<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>

<?php

require_once("./db.php");


// var_dump($movie1);
// echo  "<br>-------------------<br>";
// var_dump($movie2);

?>

<h1>Lista Film: </h1>

<ul>
    <?php
        foreach($Movies as $film){
    ?>
    <li> 
        <?php 
       echo  $film -> printMovie();
        ?>    
    </li>
    <?php
    }
    ?> 
</ul>


</body>
</html>
