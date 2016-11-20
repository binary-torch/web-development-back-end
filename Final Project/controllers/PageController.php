<?php
/*
	PageController will be responsible in our case to give the needed view to the user after requesting any route that's related to this controller.
*/
class PageController {
    public function welcome(){
        require "views/welcome.view.php";
    }

    public function home(){
        require "views/home.view.php";
    }
}