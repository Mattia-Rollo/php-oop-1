<?php

class Movie
{
    private $title;
    // public $cast;
    public $genre;


    public $durata;

    public $colors;

    public $muted;
    public $dateRelase;
    public $budget;


    function __construct(string $_title, string $_genre, int $_durata, string $_budget, bool $_muted)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genre = $_genre;
        $this->durata = $_durata;

        $this->budget = $_budget;
        $this->muted = $_muted;

    }
    public function durataString()
    {
        if ($this->durata > 130) {
            echo "è un lungometraggio";
        } else {
            echo "è un cortometraggio";
        }
    }
// funzione che capisce se è un lungo metraggio uno medio o corto


//
}

?>