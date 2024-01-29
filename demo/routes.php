<?php
// return[
    
//     '/' => 'controller/index.php',

//     '/about' => 'controller/about.php',

//     '/contact' => 'controller/contact.php',

//     '/notes' => 'controller/notes/index.php',

//     '/note/create' => 'controller/notes/create.php',

//     '/note' => 'controller/notes/show.php',
    

// ];

$router->get("/","controller/index.php");
$router->get("/about","controller/about.php");
$router->get("/contact","controller/contact.php");

$router->get("/notes","controller/notes/index.php")->only('auth');
$router->get("/note/create","controller/notes/create.php")->only('auth');;
$router->get("/note","controller/notes/show.php")->only('auth');;
$router->get("/note/edit","controller/notes/edit.php")->only('auth');;


$router->patch("/note","controller/notes/update.php")->only('auth');;
$router->post("/notes","controller/notes/store.php")->only('auth');;
$router->delete("/note","controller/notes/destroy.php")->only('auth');;

$router->get("/register", "controller/reg-user/create.php")->only('guest');
$router->post("/register", "controller/reg-user/store.php");


$router->get("/login", "controller/session/create.php")->only('guest');
$router->post("/login", "controller/session/store.php")->only('guest');
$router->delete("/logout", "controller/session/destroy.php")->only('auth');

