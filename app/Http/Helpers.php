<?php

use App\Models\Setting;

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