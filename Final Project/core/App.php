<?php
/*
    App class, think about it it just a convenient way of storing some important objects or variables in our systems,
    for example the query instance, configuration data..etc
*/
class App{
    /*
        $content variable is just an internal container will store the needed information,
        an example of it:
        $content = [
            "database" => $queryBuilder,
            "config" => $config
        ];
    */
    protected static $content = [];
    /*
        register method is static method that means we can call it without having an instance of App class,
        and its functionality is just to push a new item into the array $content
    */
    public static function register($key,$value){
        static::$content[$key] = $value;
    }
    /*
        retrieve back any need information from the $content array
    */
    public static function get($key){
        if(!array_key_exists($key, static::$content)){
            throw new Exception("does not exist!");
        }
        return static::$content[$key];
    }
}