<?php
require_once __DIR__ . "/Models/movie.php";
require_once __DIR__ . "/Models/genre.php";

$movie1 = new Movie();

var_dump($movie1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <img src=" <?php echo $movie1->getPoster(); ?> "> -->

</body>

</html>