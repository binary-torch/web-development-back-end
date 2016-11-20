<?php
/*
    Router class functionality is to check first if the path is exist in out system by checking the routes array,
    then we grap the needed controller that associated with it and the method also.
    for example: if the user type: example.com/about 
    and the (about) is exist in our routes and its value is PageController@about
    that mean we need to need to redirect the user to the PageController class and
    then we run the method inside it which is in this case (about)
*/
class Router {
    protected $routes = [];

    public function __construct(array $routes){
        $this->routes = $routes;
    }
    /*
        we used explode built-in php function to split the string into two part according to specific char
        for example if the string = "PageController@index" and what we need actually is to split the
        string into two strings ["PageController" , "index"], and it's a good practice to check
        first if the key exist in our route before we use explode method ;), you know why?
    */
    public function direct($url){
        $result = explode("@", $this->routes[$url]);
        $controller = new $result[0];
        $method = $result[1];
        if(method_exists($controller,$method)){
            return $controller->$method();
        }
        throw new Exception("error");
    }
}