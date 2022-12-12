<?php

include __DIR__ . './Models/Movie.php';
include __DIR__ . './db.php';

$Avatar = new Movie("Avatar", ["Fantascienza"], 190, "1000000", false);

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie("Avenger", ["Fantascienza", "azione"], 130, "500000", "false");

$BlackAdam = new Movie("BlackAdam", ["Fantascienza", "Bello"], 100, "23456", false);

array_push($db_movies, $Avatar, $Avenger, $BlackAdam);

var_dump($db_movies);

foreach ($db_movies as $Movie) {
    echo $Movie->getMovieInfo();
}
;

// var_dump($Avatar);
// $Avatar->durataString();
// var_dump($Avenger);
// $Avenger->durataString();
// var_dump($BlackAdam);
// $BlackAdam->durataString();
// echo $Avatar->getMovieInfo();
// echo $Avenger->getMovieInfo();
// echo $BlackAdam->getMovieInfo();