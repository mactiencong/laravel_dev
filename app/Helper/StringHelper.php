<?php
namespace App\Helper;

class StringHelper {
    public static function removeSpace($string){
        return str_replace(' ', '', $string);
    }
}