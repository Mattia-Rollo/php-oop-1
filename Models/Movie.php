<?php

class Movie
{
    public $title;
    private $genres;
    private $duration;
    private $strDurata;
    private $colors;
    public $muted;
    public $dateRelase;
    public $budget;


    function __construct(string $_title, array $_genres = null, int $_durata, string $_budget, bool $_muted)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genres = $_genres;
        $this->duration = $_durata;
        $this->budget = $_budget;
        $this->muted = $_muted;
        $this->durataString();

    }


    // funzione per determinare se è un lungo metraggio uno medio o corto
    public function durataString()
    {
        if ($this->duration > 130) {
            $this->strDurata = "è un lungometraggio";
        } else {
            $this->strDurata = "è un cortometraggio";
        }
    }
    public function getMovieInfo()
    {

        return " titolo: " . $this->title . " genere: " . implode(",", $this->genres) . " durata: " . $this->strDurata . "<br>";


    }
}

?>