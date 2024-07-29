<?php

use App\Models\ContactUsPage;
use App\Models\GeneralSetting;
use App\Models\IndexPage;
use App\Models\Menu;

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

if(!function_exists('_get_contact_us_page_data')) {
    function _get_contact_us_page_data($key) {
        $value = ContactUsPage::where('key', $key)->first();
        return $value->value ?? 'Lorem ipsum dolor sit amet consectetur adipisicing elit';
    }
}

if(!function_exists('_get_all_menu')) {
    function _get_all_menu() {
        $value = Menu::get();
        return $value;
    }
}