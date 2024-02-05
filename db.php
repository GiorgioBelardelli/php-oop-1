<?php
include("./Models/Genre.php");
include("./Models/Movie.php");

$Movies = [
    $movie1 = new Movie("Guerre Stellari", 25-05-1977, [new Genre("Fantascienza"), new Genre("Azione")]),
    $movie2 = new Movie("Rogue One", 15-12-2016 , [new Genre("Fantascienza"), new Genre("Azione")]),
    $movie3 = new Movie("Il Signore degli Anelli", 15-12-2016 , [new Genre("Fantasy"), new Genre("Azione")]),
];

?>