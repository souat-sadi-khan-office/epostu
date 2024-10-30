<?php

use App\Models\Setting;

if (!function_exists('get_setting')) {
    function get_settings($key, $default = null)
    {
        $value = false;
        $setting = Setting::where('name', $key)->first();
        if ($setting) {
            $value = $setting->value;
        }

        return $value;
    }
}