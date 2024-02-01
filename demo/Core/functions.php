<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value)
{
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404)
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN)
{
    if (! $condition) {
        abort($status);
    }

    return true;
}

function base_path($path)
{
    return BASE_PATH . $path;
}


function ref_path($path){
    return BASE_PATH.$path;
}


function core($path){
    return ref_path('Core/'.$path);
}

function view($path, $attributes = []){
    extract($attributes);

    require base_path('views/' . $path);
}

function partial($path){
    return '../views/partials/'.$path;
}



function login($user){
    $_SESSION['user'] = [
        'email'=> $user['email']
    ];

    session_regenerate_id(true);
}
function redirect($path){
    header("location: {$path}");
    exit();
}


function logout(){
    $_SESSION = [];
session_destroy();

//clear the cookie (optional)

$params = session_get_cookie_params();

setcookie('PHPSESSID', '', time()-3600, $params['path'], $params['domain'], $params['httponly']);

}
function old($key, $default = ''){
    return Core\Session::get('old')[$key] ?? $default;
}