<?php
// return[
    
//     '/' => 'controller/index.php',

//     '/about' => 'controller/about.php',

//     '/contact' => 'controller/contact.php',

//     '/notes' => 'controller/notes/index.php',

//     '/note/create' => 'controller/notes/create.php',

//     '/note' => 'controller/notes/show.php',
    

// ];

$router->get("/", "/index.php");
$router->get("/about", "/about.php");
$router->get("/contact","/contact.php");

$router->get("/notes", "/notes/index.php")->only('auth');
$router->get("/note/create", "/notes/create.php")->only('auth');;
$router->get("/note", "/notes/show.php")->only('auth');;
$router->get("/note/edit","/notes/edit.php")->only('auth');;


$router->patch("/note", "/notes/update.php")->only('auth');;
$router->post("/notes", "/notes/store.php")->only('auth');;
$router->delete("/note", "/notes/destroy.php")->only('auth');;

$router->get("/register",  "/reg-user/create.php")->only('guest');
$router->post("/register",  "/reg-user/store.php");


$router->get("/login",  "/session/create.php")->only('guest');
$router->post("/login",  "/session/store.php")->only('guest');
$router->delete("/logout",  "/session/destroy.php")->only('auth');

