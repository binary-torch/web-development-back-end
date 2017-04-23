<?php


require 'database/DB.php';
require 'database/QueryBuilder.php';

$queryBuilder = new QueryBuilder(DB::connect());



if(isset($_POST['submit'])){
	if(isset($_POST['skill']) != null){
		$queryBuilder->insert("skills", [
			"name" => $_POST['skill']
		]);
	}
}

$skills = $queryBuilder->selectAll("skills");


require 'views/home.view.php';
