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

$Avengers = new Movie(
    "Avengers",
    ["Fantascienza", "azione"],
    130,
    "500000",
    false,
    "https://upload.wikimedia.org/wikipedia/it/a/a6/The_Avengers_Logo.png"
);

$BlackAdam = new Movie(
    "BlackAdam",
    ["Fantascienza", "Bello"],
    100,
    "23456",
    false,
    "https://i0.wp.com/www.comicsuniverse.it/wp-content/uploads/2021/12/2021-12-08-15.38.21-1.jpg?resize=759%2C500&ssl=1"
);
$BlackAdam = new Movie(
    "BlackAdam",
    ["Fantascienza", "Bello"],
    100,
    "23456",
    false,
    "https://i0.wp.com/www.comicsuniverse.it/wp-content/uploads/2021/12/2021-12-08-15.38.21-1.jpg?resize=759%2C500&ssl=1"
);
$BlackAdam = new Movie(
    "BlackAdam",
    ["Fantascienza", "Bello"],
    100,
    "23456",
    false,
    "https://i0.wp.com/www.comicsuniverse.it/wp-content/uploads/2021/12/2021-12-08-15.38.21-1.jpg?resize=759%2C500&ssl=1"
);


array_push($db_movies, $Avatar, $Avengers, $BlackAdam);
?>