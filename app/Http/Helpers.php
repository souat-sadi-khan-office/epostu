<?php

use App\Models\Setting;
use Illuminate\Support\Facades\Cache;

if (!function_exists('get_setting')) {
    function get_settings($key, $default = null)
    {
        // $value = false;
        // $setting = Setting::where('name', $key)->first();
        // if ($setting) {
        //     $value = $setting->value;
        // }

        // return $value;
        
        return Cache::rememberForever("settings_{$key}", function () use ($key, $default) {
            $setting = Setting::where('name', $key)->first();
            return $setting ? $setting->value : $default;
        });
    
    }
}

function encode($value)
{
    return base64_encode(urlencode(base64_encode($value))); 
}

function decode($encoded)
{
    return base64_decode(urldecode(base64_decode($encoded)));
}