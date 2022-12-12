<?php

class Movie
{
    public $title;
    // public $cast;
    public $genre;

    public $durata;

    public $colors;

    function __construct($_title, $_genre, $_durata)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genre = $_genre;
        $this->durata = $_durata;

    }


}

?>