<?php
namespace App\Repositories;
ini_set('max_execution_time', 0);

use App\Setting;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class InstallRepository {

	/**
	 * Instantiate a new controller instance.
	 *
	 * @return void
	 */
	public function __construct(

	) {
		//
	}

	/**
	 * Used to compare version of PHP
	 */
	public function my_version_compare($ver1, $ver2, $operator = null) 
	{
		$p = '#(\.0+)+($|-)#';
		$ver1 = preg_replace($p, '', $ver1);
		$ver2 = preg_replace($p, '', $ver2);
		return isset($operator) ?
		version_compare($ver1, $ver2, $operator) :
		version_compare($ver1, $ver2);
	}

	/**
	 * Used to check whether pre requisites are fulfilled or not and returns array of success/error type with message
	 */
	public function check($boolean, $message, $help = '', $fatal = false) 
	{
		if ($boolean) {
			return array('type' => 'success', 'message' => $message);
		} else {
			return array('type' => 'danger', 'message' => $help);
		}
	}

	/**
	 * Check all pre-requisite for script
	 */
	public function getPreRequisite() 
	{
		$server[] = $this->check((dirname($_SERVER['REQUEST_URI']) != '/' && str_replace('\\', '/', dirname($_SERVER['REQUEST_URI'])) != '/'), 'Installation directory is valid.', 'Please use root directory or point your sub directory to domain/subdomain to install.', true);
		$server[] = $this->check($this->my_version_compare(phpversion(), '7.1.3', '>='), sprintf('Min PHP version 7.1.3 (%s)', 'Current Version ' . phpversion()), 'Current Version ' . phpversion(), true);
		$server[] = $this->check(extension_loaded('fileinfo'), 'Fileinfo PHP extension enabled.', 'Install and enable Fileinfo extension.', true);
		$server[] = $this->check(extension_loaded('ctype'), 'Ctype PHP extension enabled.', 'Install and enable Ctype extension.', true);
		$server[] = $this->check(extension_loaded('json'), 'JSON PHP extension enabled.', 'Install and enable JSON extension.', true);
		$server[] = $this->check(extension_loaded('openssl'), 'OpenSSL PHP extension enabled.', 'Install and enable OpenSSL extension.', true);
		$server[] = $this->check(extension_loaded('tokenizer'), 'Tokenizer PHP extension enabled.', 'Install and enable Tokenizer extension.', true);
		$server[] = $this->check(extension_loaded('mbstring'), 'Mbstring PHP extension enabled.', 'Install and enable Mbstring extension.', true);
		$server[] = $this->check(extension_loaded('zip'), 'Zip archive PHP extension enabled.', 'Install and enable Zip archive extension.', true);
		$server[] = $this->check(class_exists('PDO'), 'PDO is installed.', 'Install PDO (mandatory for Eloquent).', true);
		$server[] = $this->check(extension_loaded('curl'), 'CURL is installed.', 'Install and enable CURL.', true);
		$server[] = $this->check(ini_get('allow_url_fopen'), 'allow_url_fopen is on.', 'Turn on allow_url_fopen.', true);

		$folder[] = $this->check(is_writable("../.env"), 'File .env is writable', 'File .env is not writable', true);
		$folder[] = $this->check(is_writable("../storage/framework"), 'Folder /storage/framework is writable', 'Folder /storage/framework is not writable', true);
		$folder[] = $this->check(is_writable("../storage/logs"), 'Folder /storage/logs is writable', 'Folder /storage/logs is not writable', true);
		$folder[] = $this->check(is_writable("../bootstrap/cache"), 'Folder /bootstrap/cache is writable', 'Folder /bootstrap/cache is not writable', true);

		$verifier = config('app.verifier');

		return ['server' => $server, 'folder' => $folder, 'verifier' => $verifier];
	}

	public function checkServer() 
	{
		$req = $this->getPreRequisite();
		if (in_multi_array('danger', $req)) {
			throw ValidationException::withMessages(['message' => 'Something Wrong With Your Server']);
		}
		return true;
	}

	/**
	 * Validate database connection, table count
	 */
	public function validateDatabase($params) 
	{
		$db_host = gv($params, 'db_host');
		$db_username = gv($params, 'db_username');
		$db_password = gv($params, 'db_password');
		$db_database = gv($params, 'db_database');

		$link = @mysqli_connect($db_host, $db_username, $db_password);

		if (!$link) {
			throw ValidationException::withMessages(['message' => 'Looks like, you have provided wrong database details. Please check your database connection again.']);
		}

		mysqli_select_db($link, $db_database);
		$count_table_query = mysqli_query($link, "show tables");
		$count_table = mysqli_num_rows($count_table_query);

		if ($count_table) {
			throw ValidationException::withMessages(['message' => 'Looks like, your database has some existing table. Installation requires, empty database to proceed. Please empty your database.']);
		}
		$this->setDBEnv($params);
		$this->migrateDB();
		$this->seed();

		return;
	}

	/**
	 * Install the script
	 */
	public function install($params) 
	{
		foreach ($params as $key => $value) {
			if ($key == "_token") {
				continue;
			}

			$data = array();
			$data['value'] = $value;
			$data['updated_at'] = Carbon::now();
			if (Setting::where('name', $key)->exists()) {
				Setting::where('name', '=', $key)->update($data);
			} else {
				$data['name'] = $key;
				$data['created_at'] = Carbon::now();
				Setting::insert($data);
			}
		}

		\Storage::put('.app_installed', isset($checksum) ? $checksum : '');
		\Storage::put('.access_code', request('access_code'));
		\Storage::put('.account_email', request('envato_email'));

		\File::cleanDirectory('storage/app/public');
		\Artisan::call('storage:link');
		envu([
			'APP_NAME' => gv($params, 'company_name'),
			'APP_LOCALE' => session('locale'),
			'APP_INSTALLED' => 'true',
			'APP_DEBUG' => 'true',
			'APP_URL' => url(''),
		]);
	}

	/**
	 * Write to env file
	 */
	public function setDBEnv($params) 
	{
		envu([
			'APP_URL' => app_url(),
			'DB_PORT' => gv($params, 'db_port'),
			'DB_HOST' => gv($params, 'db_host'),
			'DB_DATABASE' => gv($params, 'db_database'),
			'DB_USERNAME' => gv($params, 'db_username'),
			'DB_PASSWORD' => gv($params, 'db_password'),
		]);

		\DB::disconnect('mysql');

		config([
			'database.connections.mysql.host' => gv($params, 'db_host'),
			'database.connections.mysql.port' => gv($params, 'db_port'),
			'database.connections.mysql.database' => gv($params, 'db_database'),
			'database.connections.mysql.username' => gv($params, 'db_username'),
			'database.connections.mysql.password' => gv($params, 'db_password'),
		]);

		\DB::setDefaultConnection('mysql');
	}

	/**
	 * Mirage tables to database
	 */
	public function migrateDB() 
	{
		$db = \Artisan::call('migrate');
		$key = \Artisan::call('key:generate');
	}

	/**
	 * Seed tables to database
	 */
	public function seed($seed = 0) 
	{
		if (!$seed) {
			return;
		}

		$db = \Artisan::call('db:seed');
	}

	/**
	 * Populate default locale
	 */
	public function populateLocale() 
	{
		if (!$this->locale->findByLocale('en')) {
			$this->locale->create([
				'locale' => 'en',
				'name' => 'English',
			]);
		}
	}

	/**
	 * Insert default admin details
	 */
	public function makeAdmin($params) 
	{

		$user = new User;
		$user->email = gv($params, 'email');
		$user->username = gv($params, 'username');
		$user->uuid = Str::uuid();
		$user->password = bcrypt(gv($params, 'password', '12345678'));
		$user->activation_token = Str::uuid();
		$user->status = 1;
		$user->save();

		$this->populateRole();
		$this->populatePermission();

		$user->assignRole(config('system.default_role.admin'));
	}
}
