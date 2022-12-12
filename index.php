<?php

// include __DIR__ . './Models/Movie.php';
include __DIR__ . './db.php';



// var_dump($db_movies);

// foreach ($db_movies as $Movie) {
//     echo $Movie->getType() . ": ";
//     echo $Movie->getMovieInfo();
// };

// var_dump($Avatar);
// $Avatar->durataString();
// var_dump($Avenger);
// $Avenger->durataString();
// var_dump($BlackAdam);
// $BlackAdam->durataString();
// echo $Avatar->getMovieInfo();
// echo $Avenger->getMovieInfo();
// echo $BlackAdam->getMovieInfo();

?>

<?php
include __DIR__ . './partials/header.php';
?>

<div class="container">
    <h1 class="py-3">Movies</h1>
    <div class="row py-5">
        <?php foreach ($db_movies as $movie) { ?>
        <div class="col-4 bg-secondary">


            <div class="card" style="w-100">
                <img src="
                <?php echo $movie->imgPath; ?> 
                " class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">
                        <?php echo $movie->title; ?><br>

                    </p>
                </div>
            </div>


        </div>
        <?php } ?>
    </div>
</div>

<?php
include __DIR__ . './partials/footer.php';
?>