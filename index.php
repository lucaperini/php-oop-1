<?php 
include "./data/Movie.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-OOP-1</title>
</head>
<body>
    <div class="container">
    <?php 

    $firstMovie = new Movie('Magnolia', 'Paul Thomas Anderson', 'drammatico', '1999', 'Philip Seymour Hoffman');

    $secondMovie = new Movie('Amici Miei', 'Mario Monicelli', 'commedia', '1975', 'Ugo Tognazzi');

    var_dump($firstMovie, $secondMovie);

    
    ?>

    </div>
</body>
</html>