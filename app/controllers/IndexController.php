<?php
namespace controllers;


use core\abstracts\Controller;

class IndexController extends Controller
{
    public function show(){
        return $this->render("index", [
            "title" => "Hot news",
            "message" => "On ne obmansik"
        ]);
    }
}