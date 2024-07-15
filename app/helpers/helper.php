<?php

use App\Models\GeneralSetting;

if(!function_exists('_get_setting_value')) {
    function _get_setting_value($key) {
        $value = GeneralSetting::whereKeyName($key)->first();
        return $value->value ?? 'N/A';
    }
}