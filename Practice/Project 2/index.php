<?php

$currentLanguage = $_GET['lang'] ?? "English";

$languages = [
	"Arabic" => "كيف الحال",
	"English" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quibusdam, hic."
];


require 'views/home.view.php';