<?php
require_once __DIR__ . "/Models/movie.php";
require_once __DIR__ . "/Models/genre.php";

$movie1_genre = new Genre("Action");
$movie1 = new Movie();
$movie1->setTitle("Indiana Jones");
$movie1->setDescr("The government wants to recruit Jones to find and obtain the biblical Ark of the Covenant before it can be claimed by Nazi leader Adolf Hitler, whose excavation for the Ark is underway in Egypt. Brody warns that if the Nazis obtain the Ark, its power will make Hitler invincible.");
$movie1->setPoster("https://upload.wikimedia.org/wikipedia/en/c/c3/Indiana_Jones_and_the_Dial_of_Destiny_theatrical_poster.jpg");
$movie1->setCast("Harrison Ford");
$movie1->setGenre($movie1_genre);

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