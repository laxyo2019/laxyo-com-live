<?php
 
if (!function_exists('get_site_val')) {
    function get_site_val($key)
    {
       return  DB::table('site_variables')->where('var_key', $key)->pluck('var_val')->first();
    }
}