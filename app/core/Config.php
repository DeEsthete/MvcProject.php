<?php
namespace Core;

class Config{

    private static $cfgs = [];

    private function __construct()
    {
    }

    static function fromName($name, $key = null){
        if(self::$cfgs[$name]){
            $cfg = self::$cfgs[$name];
        }
        else{
            $cfg = include Helpers::path("app", "config", "$name.php");
            self::$cfgs[$name] = $cfg;
        }
        return self::keyOrArray($cfg, $key);
    }

    static function database($key = null){
        return self::fromName("database", $key);
    }

    static function composer($key = null){
        $composerDir = Helpers::path("composer.json");
        $composerFile = file_get_contents($composerDir);
        $composer = json_decode($composerFile, true);
        return self::keyOrArray($composer, $key);
    }

    static function main($key = null){
        return self::fromName("main", $key);
    }

    static function keyOrArray($array, $key = null){
        if($key == null){
            return $array;
        }
        return $array[$key];
    }
}