<?php 

function dd($value){
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

function urlIs($value){
    return $_SERVER['REQUEST_URI']===$value;
} 
function authorize($condition, $status =Response::FORBIDDEN){
    if(! $condition){
        abort($status);
    }
}

function base_path($path){
    return BASE_PATH.$path;
}

function ref_path($path){
    return BASE_PATH.$path;
}
function core($path){
    return ref_path('Core/'.$path);
}
function partial($path){
    return '../views/partials/'.$path;
}



function view($path, $attributes=[]){
    extract($attributes);
   require base_path('views/'.$path);
}