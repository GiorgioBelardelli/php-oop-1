<?php

class Genre{
    public $genre;
    
    public function __construct($_genre){
        $this->genre = $_genre;   
    }
}

class Movie{
    public $titolo;
    public $dataUscita;
    public $genres = [];

    function __construct($_titolo, $_datauscita, $_genres){
        
        $this->titolo = $_titolo;
        $this->dataUscita = $_datauscita;
        $this->genres = $_genres;
    }

    public function getTitolo(){
        return $this->titolo;
    }

}

$movie1 = new Movie("Guerre Stellari", 25-05-1977, [new Genre("Fantascienza"), new Genre("Azione")]);
$movie2 = new Movie("Rogue One", 15-12-2016 , [new Genre("Fantascienza"), new Genre("Azione")]);

var_dump($movie1);
echo  "<br>-------------------<br>";
var_dump($movie2);

?>

