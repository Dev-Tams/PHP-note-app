<?php

namespace Core;

class Validator{
    public static function text($value, $min = 1, $max = INF){
        if ($value === null) {
            return false;
        }
    
        $value = trim($value);

        return strlen($value) >= $min && strlen($value) <= $max;
    }

    public static function email(string $value): bool{
        return filter_var($value, FILTER_VALIDATE_EMAIL);
    }

public static function maxinput($value, $min=10, $max =3500){
    $value = trim($value);
    return strlen($value) >= $min && strlen($value)<= $max;
}

public static function mininput($value, $min=10){
    $value = trim($value);
    return strlen($value) >= $min;
}
    public static function greaterThan(int $value, int $greaterThan): bool{
        return $value > $greaterThan;
    }
}