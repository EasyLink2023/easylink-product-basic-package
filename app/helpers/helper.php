<?php

use App\Models\Menu;
use App\Models\User;
use App\Models\IndexPage;
use App\Models\pageSeoData;
use App\Models\ContactUsPage;
use App\Models\GeneralSetting;
use Illuminate\Support\Facades\DB;

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

if(!function_exists('_get_page_seo_by_url')) {
    function _get_page_seo_by_url($url) {
        $value = pageSeoData::where('page_url', $url)->first();
        return $value;
    }
}

if(!function_exists('_get_data_count_with_table_name')) {
    function _get_data_count_with_table_name($table_name) {
        $value = DB::table($table_name)->count();
        return $value;
    }
}

if(!function_exists('_get_default_template')) {
    function _get_default_template() {
        $value = User::where('id', '1')->first();
        return $value->default_template ?? 1;
    }
}