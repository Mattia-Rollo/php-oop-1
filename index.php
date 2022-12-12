<?php

include __DIR__ . './Models/Movie.php';

$Avatar = new Movie("Avatar", "Fantascienza", "190 minuti", "1000000", false);

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie("Avenger", "Fantascienza", "130 minuti", "500000", "false");

$BlackAdam = new Movie("BlackAdam", "Fantascienza", "100 minuti", "23456", false);

var_dump($Avatar);
var_dump($Avenger);
var_dump($BlackAdam);