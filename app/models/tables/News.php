<?php
namespace models\tables;


use models\Table;

class News extends Table
{
    protected static $table_name = "news";

    public function getByTitle($title){
        return $this->get("*", [
            "title" => $title
        ]);
    }
}