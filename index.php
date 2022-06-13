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

    //titolo
    public function getTitle()
    {
        return $this->title;
    }

    //year
    public function getYear()
    {
        return $this->year;
    }

    //media voti
    public function finalVote(){
        $sum = 0;
        foreach($this->votes as $vote){
            $sum += $vote;
        }
        $final = $sum / count($this->votes);
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

//Movie2
$avatar = new Movie("Avatar", 2009);
$avatar->addGenre("Avventura");
$avatar->addGenre("Fantascienza");
$avatar->addGenre("Azione");
$avatar->addVote(9);
$avatar->addVote(7);
$avatar->addVote(8);

//Movie3
$focus = new Movie("Focus", 2015);
$focus->addGenre("Romantico");
$focus->addGenre("Commedia");
$focus->addGenre("Drammatico");
$focus->addVote(6);
$focus->addVote(9);
$focus->addVote(7);


//aggiungere oggetti in un array
$allMovie = [];
$allMovie [] = $titanic;
$allMovie [] = $avatar;
$allMovie [] = $focus;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>OOP</title>
</head>
<body>
<ul>
    <?php foreach($allMovie as $item){ ?>
        <li>
            <p><?php echo "Titolo: " . $item->getTitle(); ?></p>
            <p><?php echo "Anno: " . $item->getYear(); ?></p>
            <p>
                Genere:
                <?php foreach($item->genres as $genre) {?>
                    <?php echo $genre . "<br> "; ?>
                <?php } ?>
            </p>
            <p><?php echo "Voto:" . round($item->finalVote(), 1); ?></p>
        </li>
    <?php } ?>
</ul>
</body>
</html>