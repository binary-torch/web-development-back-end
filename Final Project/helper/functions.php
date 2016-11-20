<?php
/*
	This file will have all the global helper functions that we may need them in our project.
*/
function d($item){
    echo "<pre>";
    var_dump($item);
    echo "</pre>";
    die();
}

function assets($path){
    return "public/".$path;
}

function redirect($path){
    header("Location: /{$path}");
}