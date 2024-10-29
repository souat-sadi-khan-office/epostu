<?php

namespace App\Http\Controllers\Install;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\InstallRepository;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\Install\InstallRequest;

class InstallController extends Controller
{
    protected $installRepository;
	protected $request;

    public function __construct(
        InstallRepository $installRepository, 
        Request $request
    ) {	
		$this->installRepository = $installRepository;
		$this->installRequest = $request;

		if (env('APP_INSTALLED', false) == true) {
			Redirect::to('/')->send();
		}
    }
	
    public function index()
    {
        return view('install.index');
    }
	
	public function terms(InstallRequest $request) 
    {
		return response()->json(['message' => 'Ok Buddy First Step Done Successful. Let\'s Start Step 2.']);
	}

	public function server() 
    {
		$requirements = $this->repo->getPreRequisite();
		return view('install.step_1', compact('requirements'));
	}

	public function check_server() 
    {
		$requirements = $this->installRepository->checkServer();
		return response()->json(['message' => 'It\'s Great. Let\'s Start Step 3.']);
	}

	public function database() 
    {
		return view('install.step_2');
	}

	public function process_install(InstallRequest $request) 
    {
		$this->installRepository->validateDatabase($request->all());
		return response()->json(['message' => 'Oh Nice. It\'s A Pleasure. Let\'s Start Step 4.']);
	}

	public function create_user() 
    {
		return view('install.step_3');
	}

	public function store_user(InstallRequest $request) 
    {
		$this->installRepository->makeAdmin($request->all());
		return response()->json(['message' => 'One More Step And You Are Ready To Go.']);
	}

	public function system_settings() 
    {
		return view('install.step_4');
	}

	public function final_touch(Request $request) 
    {
		$this->repo->install($request->all());
		return response()->json(['message' => 'You Are Done. Just Click Login Button And Go, Explore!', 'goto' => route('login')]);
	}
}