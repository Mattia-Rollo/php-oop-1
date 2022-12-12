<?php

class Movie
{
    public $title;
    private $genres;
    private $duration;
    private $typeDuration;
    private $colors;
    public $muted;
    public static $dateRelase;
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
            $this->typeDuration = "è un lungometraggio";
        } else {
            $this->typeDuration = "è un cortometraggio";
        }
    }
    public function getMovieInfo()
    {

        return " titolo: " . $this->title . " genere: " . implode(",", $this->genres) . " durata: " . $this->duration . " minuti " . $this->typeDuration . "<br>";


    }
    public function getData()
    {

    }
}

?>