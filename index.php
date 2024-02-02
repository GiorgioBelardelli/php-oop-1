<?php

class Movie{
    public $titolo;
    public $dataUscita;
    public $genre;

    function __construct($_titolo, $_datauscita, $_genre){
        
        $this->titolo = $_titolo;
        $this->dataUscita = $_datauscita;
        $this->genre = $_genre;
    }

    public function getTitolo(){
        return $this->titolo;
    }

}

$movie1 = new Movie("Guerre Stellari", 25-05-1977, "Fantascienza");
$movie2 = new Movie("Rogue One", 15-12-2016 ,"Fantascienza");

var_dump($movie1);
echo  "<br>-------------------<br>";
var_dump($movie2);

?>

