<?php
//requiring App and helper functions
require "core/App.php";
App::register("env", require 'core/env.php');
require 'helper/functions.php';
//Core
require 'core/database/Connection.php';
require 'core/database/QueryBuilder.php';
require 'core/Router.php';
//Controllers
require 'controllers/PageController.php';
require 'controllers/PostController.php';
require 'controllers/UserController.php';

//Add the query builder object to the App class to refer to it later or any where in our system.
App::register("database",new QueryBuilder(Connection::make(App::get("env")["database"])));

//New instance of the Router class.
$router = new Router([
    "" => "PageController@welcome",
    "home" => "PageController@home",
    "add-user" => "UserController@addUser"
]);

/*
	Redirect the user to the specific route according to the path that entered in the url
	1. we use the trim function to remove any backslash (/) from the url
	2. we use the $_SERVER["REQUEST_URI"] to get the actual path that entered by the user, for example: www.example.com/about-us
		which in this case we care about about-us only
	3. we use parse_url to get the filtered path without any parameter that it maybe exist in the url,
		for example: www.example.com/about-us?name=something
*/

$router->direct(trim(parse_url($_SERVER["REQUEST_URI"],PHP_URL_PATH),'/'));