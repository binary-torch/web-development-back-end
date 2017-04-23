<?php


require 'database/DB.php';
require 'database/QueryBuilder.php';

$queryBuilder = new QueryBuilder(DB::connect());

$users = $queryBuilder->selectAll("users");


require 'views/home.view.php';