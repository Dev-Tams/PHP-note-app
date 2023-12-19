<?php
namespace Core;
class Validator{

    public static function text($value){
        return strlen(trim($value))==0;
    }

    public static function maxinput($value,  $max= 3500){
        return strlen($value)>=  $max; 
    }

    public static function mininput($value, $origin=2,  $min= 10){
        return strlen(trim($value)) <= $origin &&  $min; 
    }
}
