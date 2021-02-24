<?php 

use Carbon\Carbon;

if (!function_exists("convertDate")) {
    
    function convertDate($date)
    {
        return Carbon::parse($date)->format('m/d/Y');
    }
}