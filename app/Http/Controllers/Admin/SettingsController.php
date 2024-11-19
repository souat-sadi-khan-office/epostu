<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\Setting;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Cache;

class SettingsController extends Controller
{
    public function index()
    {
        return view ('admin.settings.general');
    }

    public function update(Request $request)
    {
        $validator = Validator::make($request->all(), [
			'system_logo_white' => 'mimes:jpeg,bmp,png,jpg|max:2000',
			'system_logo_dark'  => 'mimes:jpeg,bmp,png,jpg|max:2000',
			'system_favicon'    => 'mimes:jpeg,bmp,png,jpg|max:2000'
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false, 
                'message' => $validator->errors()
            ]);
        }

        $input = $request->all();
        $config_type = $request->config_type;
        $boolean_system_setting = config('system.boolean.'.$config_type);

        if($boolean_system_setting){
            foreach($boolean_system_setting as $v){
                $config = Setting::firstOrCreate(['type' => $v]);
                $config->value = 0;
                $config->save();
            }
        }
        
        foreach($_POST as $key => $value){
            if($key == "_token"){
                continue;
            }

            $data = array();
            $data['value'] = $value;
            $data['updated_at'] = Carbon::now();
            if(Setting::where('name', $key)->exists()){
                Setting::where('name','=',$key)->update($data);
            } else {
                $data['name'] = $key;
                $data['created_at'] = Carbon::now();

                Setting::insert($data);
            }

            Session::put('settings.' . $key, $value);

            Cache::forget("settings_{$key}");

        }


        return response()->json([
            'status' => true, 
            'message' => 'Configuration updated', 
            'load' => true
        ]);
    }
}
