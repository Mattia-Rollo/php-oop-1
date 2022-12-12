<?php

class Movie
{
    private $title;
    // public $cast;
    public $genre;

    public $durata;

    public $colors;

    function __construct(string $_title, string $_genre, string $_durata)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genre = $_genre;
        $this->durata = $_durata;

    }


}

?>