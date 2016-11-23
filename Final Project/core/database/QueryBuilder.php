<?php

/*
    QueryBuilder class is responsible of doing any kind of data manipulation, 
    for instance, selecting all the rows inside users table, inserting
    new record to any table or updating existing data in our db.. 
*/
class QueryBuilder{
    protected $pdo; //think about it like this, it just a copy of pdo opject that we can use it inside our object.

    public function __construct($pdo){
        $this->pdo = $pdo;
    }
    /*
        fetchAll method will return back all the records in any table that exist in our database
        it accept the table name and the representation class or model, if we didn't specify
        the representation class the items from the database will be retrieved as stdClass.
    */
    public function fetchAll($table, $class){
        $query = $this->pdo->prepare("SELECT * from {$table}");
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS, $class);
    }
    /*
        calling insert method by sending two arguments, the first one is the table name
        and the second one is the parameters which it should be in this form:
        example:
        $query->insert("users", [
            "name" => "anyName",
            "email" => "anyEmail",
            "password" => "anyPassword",
        ]);
        and this line here, its functionality is to construct sql insert query in a dynamic way.
        $query = "insert into {$table} (". implode(', ',array_keys($parameters)) .") values (:". implode(", :", array_keys($parameters)) .")";
    */
    public function insert($table, $parameters){
        $query = "insert into {$table} (". implode(', ',array_keys($parameters)) .") values (:". implode(", :", array_keys($parameters)) .")";
        $query = $this->pdo->prepare($query);
        $query->execute($parameters);
    }
}