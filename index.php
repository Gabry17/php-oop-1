<?php
//creo classe 
class Movie
{
    public $title;
    public $genres;
    public $year;
    public $votes;

    //funzione che mi crea obj al richiamo
    function __construct($_title, $_year,$_genres = [], $_votes = []){
        $this->title = $_title;
        $this->genres = $_genres;
        $this->year = $_year;
        $this->votes = $_votes;
    }

    //aggiungere elementi all array generi
    public function addGenre($_genre){
        $this->genres[] = $_genre;
    }

    //aggiungere elementi all array voti
    public function addVote($_vote){
        $this->votes[] = $_vote;
    }

    //media voti
    public function finalVote(){
        $sum = 0;
        foreach($this->votes as $vote){
            $sum += $vote;
        }
        $final = $sum / count($votes);
        return $final;
        
    }
}

//Movie1
$titanic = new Movie("Titanic", 1997);
$titanic->addGenre("Romantico");
$titanic->addGenre("Drammatico");
$titanic->addVote(10);
$titanic->addVote(7);
$titanic->addVote(9);
$titanic->addVote(8);
var_dump($titanic);

//Movie2
$avatar = new Movie("Avatar", 2009);
$avatar->addGenre("Avventura");
$avatar->addGenre("Fantascienza");
$avatar->addGenre("Azione");
$avatar->addVote(9);
$avatar->addVote(7);
$avatar->addVote(8);
var_dump($avatar);

//Movie3
$focus = new Movie("Focus", 2015);
$focus->addGenre("Romantico");
$focus->addGenre("Commedia");
$focus->addGenre("Drammatico");
$focus->addVote(6);
$focus->addVote(9);
$focus->addVote(7);
var_dump($focus);

?>