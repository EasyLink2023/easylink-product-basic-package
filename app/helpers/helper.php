<?php

use App\Models\GeneralSetting;
use App\Models\IndexPage;

if(!function_exists('_get_setting_value')) {
    function _get_setting_value($key) {
        $value = GeneralSetting::whereKeyName($key)->first();
        return $value->value ?? 'Not Avaliable';
    }
}
if(!function_exists('_get_index_page_value')) {
    function _get_index_page_value($key) {
        $value = IndexPage::where('key', $key)->first();
        return $value->value ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit';
    }
}