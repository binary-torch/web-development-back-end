<?php

class QueryBuilder {
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    function insert($table, $parameters){
        $query = "insert into {$table} (". implode(', ',array_keys($parameters)) .") values (:". implode(", :", array_keys($parameters)) .")";
        $query = $this->pdo->prepare($query);
        $query->execute($parameters);
    }

    public function selectAll($table){
        $query = "SELECT * FROM {$table}";
        $query = $this->pdo->prepare($query);
        $query->execute();
        return $query->fetchAll(PDO::FETCH_CLASS);
    }
}