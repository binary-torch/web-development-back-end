<?php
/*
    Connection class will handle the process of connecting to the database using PDO class that's provided in php.
*/
class Connection{
	/*
    	we use the keyword "static" to say that this method we can use it even thow we don't have an instance of that class
    	example:
    	Connection::make($db); 
    	you may notice that we used (::) which represent that we're refering back to static method
    	and the $db parameter it just a way of getting the parameter from an external file just for security purpose.
	*/
    public static function make($db){
        try {
            return new PDO(
                $db["type"].':host='.$db["host"].';dbname='.$db["name"].';', $db["user"], $db["password"]
            );
        } catch (PDOException $e) {
            die($e->getMessage());
        }
    }
}