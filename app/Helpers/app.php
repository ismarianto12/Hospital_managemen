<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class App
{

    public static function human_file_size($bytes, $decimals = 2)
    {
        $sz = 'BKMGTPE';
        $factor = (int) floor((strlen($bytes) - 1) / 3);
        return sprintf("%.{$decimals}f", $bytes / pow(1024, $factor)) . $sz[$factor];
    }

    public static function rian($params)
    {
        return $params;
    }


    public static function load_js($file_path)
    {
        return '<script src="' . asset($file_path) . '"></script>';
    }

    public static function load_css($file_path)
    {
        return '<link rel="stylesheet" href="' . asset($file_path) . '">';
    }
}
