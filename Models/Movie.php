<?php

class Movie
{
    public $title;
    // public $cast;
    private $genres;


    private $durata;
    private $strDurata;

    private $colors;

    public $muted;
    public $dateRelase;
    public $budget;


    function __construct(string $_title, array $_genres, int $_durata, string $_budget, bool $_muted)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genres = $_genres;
        $this->durata = $_durata;
        $this->budget = $_budget;
        $this->muted = $_muted;
        $this->durataString();

    }


    // funzione per determinare se è un lungo metraggio uno medio o corto
    public function durataString()
    {
        if ($this->durata > 130) {
            $this->strDurata = "è un lungometraggio";
        } else {
            $this->strDurata = "è un cortometraggio";
        }
    }
    public function getMovieInfo()
    {

        echo " titolo: " . $this->title . " genere: " . implode(",", $this->genres) . " durata: " . $this->strDurata . "<br>";


    }
}

?>