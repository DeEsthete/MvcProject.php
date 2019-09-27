<?php


use Klein\Klein;

$router = new Klein();

$router->get("/?", function (){
    return "Index page";
});

$router->dispatch();