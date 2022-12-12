<?php

class Movie
{
    public $title;
    public $genres;

    public $description;

    public $imgPath;
    private $duration;
    private $typeDuration;
    private $colors = true;
    public $muted;
    public static $type = "film";
    public $budget;


    function __construct(string $_title, array $_genres = null, int $_durata, string $_budget, bool $_muted, $_imgPath, $_description)
    {

        $this->title = $_title;
        // $this->cast = $_cast;
        $this->genres = $_genres;
        $this->duration = $_durata;
        $this->budget = $_budget;
        $this->muted = $_muted;
        $this->imgPath = $_imgPath;
        $this->description = $_description;
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
        return " titolo: " . $this->title . "<br> genere: " . implode(",", $this->genres) . "<br> durata: " . $this->duration . "minuti, " . $this->typeDuration . "<br>";
    }
    public function getType()
    {
        return self::$type;
    }
    public function getGenres()
    {
        return implode(",", self::$genres);
    }
}

?>