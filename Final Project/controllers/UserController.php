<?php
/*
    UserController will handle all the functionalities that are related to the user
*/
class UserController{
    public function addUser(){
        //check first if is there any input coming from the user.
        if(isset($_GET['submit'])){
            /*
                access the App container to get the object "pdo" 
                then we can use the internal function we have
                build in the query builder class to insert
                new record using the data from the user.
            */
            APP::get("database")->insert("users", [ 
                "name" => $_GET["name"],
                "email" => $_GET["email"],
                "password" => $_GET["password"],
            ]);
        }
        //redirect the user after inserting the data to the specific page we want
        redirect("");
    }
}