<?php 
include "./data/Movie.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Php-OOP-1</title>
</head>
<body>
    <div class="container">
        <?php 
        
        $firstMovie = new Movie('Magnolia', 'Paul Thomas Anderson', 'drammatico', '1999', 'Philip Seymour Hoffman');

        $secondMovie = new Movie('Amici Miei', 'Mario Monicelli', 'commedia', '1975', 'Ugo Tognazzi');

        // var_dump($firstMovie, $secondMovie);
        
        ?>
        <div class="istanza">
            <h2> Prima istanza classe Movie <h2>
            <p>Titolo: <?= $firstMovie->getTitle();?></p>
            <p>Regia: <?= $firstMovie->getDirector();?></p>
            <p>Genere: <?= $firstMovie->getGenre();?></p>
            <p>Anno: <?= $firstMovie->getYear();?></p>
            <p>Attore protagonista: <?= $firstMovie->getmainActor();?></p>
        </div>
        <div class="istanza">
            <h2> Seconda istanza classe Movie <h2>
            <p>Titolo: <?= $secondMovie->getTitle();?></p>
            <p>Regia: <?= $secondMovie->getDirector();?></p>
            <p>Genere: <?= $secondMovie->getGenre();?></p>
            <p>Anno: <?= $secondMovie->getYear();?></p>
            <p>Attore protagonista: <?= $secondMovie->getmainActor();?></p>
        </div>
    </div>
</body>
</html>