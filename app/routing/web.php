<?php


use controllers\IndexController;
use core\RenderEngine;
use Klein\Klein;
use models\tables\News;
use models\tables\Users;

$router = new Klein();

$router->get("/?", function (){
    $controller = new IndexController();
    return $controller->show();
});

$router->dispatch();