<?php

include __DIR__ . './Models/Movie.php';

$Avatar = new Movie("Avatar", ["Fantascienza"], 190, "1000000", false);

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie("Avenger", ["Fantascienza", "azione"], 130, "500000", "false");

$BlackAdam = new Movie("BlackAdam", ["Fantascienza", "Azione", ""], 100, "23456", false);

// var_dump($Avatar);
// $Avatar->durataString();
// var_dump($Avenger);
// $Avenger->durataString();
var_dump($BlackAdam);
// $BlackAdam->durataString();
echo $Avatar->getMovieInfo();
echo $Avenger->getMovieInfo();
echo $BlackAdam->getMovieInfo();

// $listMovie = [$Avatar, $Avenger, $BlackAdam];
// var_dump($listMovie);

// foreach ($listMovie as $movie) {
//     echo "il film: $movie->durataString() <br>";
// }