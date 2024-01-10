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

$router->get("/notes","controller/notes/index.php");
$router->get("/note/create","controller/notes/create.php");
$router->get("/note","controller/notes/show.php");
$router->get("/note/edit","controller/notes/edit.php");


$router->patch("/note","controller/notes/update.php");
$router->post("/notes","controller/notes/store.php");
$router->delete("/note","controller/notes/destroy.php");

