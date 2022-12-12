<?php

include __DIR__ . './Models/Movie.php';

$Avatar = new Movie("Avatar", "Fantascienza", 190, "1000000", false);

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie("Avenger", "Fantascienza", 130, "500000", "false");

$BlackAdam = new Movie("BlackAdam", "Fantascienza", 100, "23456", false);

var_dump($Avatar);
$Avatar->durataString();
var_dump($Avenger);
$Avenger->durataString();
var_dump($BlackAdam);
$BlackAdam->durataString();