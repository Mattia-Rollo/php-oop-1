<?php

include __DIR__ . './Models/Movie.php';

$Avatar = new Movie("Avatar", "Fantascienza", "190 minuti");

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie("Avenger", "Fantascienza", "130 minuti");
$BlackAdam = new Movie("BlackAdam", "Fantascienza", "100 minuti");

var_dump($Avatar);
var_dump($Avenger);
var_dump($BlackAdam);