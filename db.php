<?php

include __DIR__ . './Models/Movie.php';

$db_movies = [];
$Avatar = new Movie(
    "Iron Man",
    ["Fantascienza"],
    190,
    "1000000",
    false,
    "https://images5.alphacoders.com/523/523395.jpg"
);

// $Avatar->title = "BelloCiccio";

$Avenger = new Movie(
    "Avenger",
    ["Fantascienza", "azione"],
    130,
    "500000",
    false,
    "https://images5.alphacoders.com/523/523395.jpg"
);

$BlackAdam = new Movie(
    "BlackAdam",
    ["Fantascienza", "Bello"],
    100,
    "23456",
    false,
    "https://images5.alphacoders.com/523/523395.jpg"
);

array_push($db_movies, $Avatar, $Avenger, $BlackAdam);
?>