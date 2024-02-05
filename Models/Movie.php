<?php

class Movie{
    public $titolo;
    public $dataUscita;
    public $genres;

    function __construct($_titolo, $_datauscita, $_genres){
        
        $this->titolo = $_titolo;
        $this->dataUscita = $_datauscita;
        $this->genres = $_genres;
    }

    public function getTitolo(){
        return $this->titolo;
    }

    public function printMovie(){
        echo 'Titolo: ' . $this->titolo . '<br>';
        echo 'Data di uscita: ' . $this->dataUscita . '<br>';

        $infoGenres = "";
            foreach ($this -> genres as $genre) {
                $infoGenres .= " " . $genre -> genre;
            }
        echo 'Generi: ' . $infoGenres . '<br>';
    }
}

?>