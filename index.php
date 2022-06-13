<?php
class Movie
{
    public $title;
    public $genre;
    public $year;
    public $votes;

    function __construct($title, $genre, $year, $votes = []){
        $this->title = $title;
        $this->genre = $genre;
        $this->year = $year;
        $this->votes = $votes;
    }
}

?>