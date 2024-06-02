<?php
require_once __DIR__ . "/Models/movie.php";
require_once __DIR__ . "/Models/genre.php";
require_once __DIR__ . "/Models/actor.php";

// Creazione istanza Genre
$movie1_genre = new Genre("Action");
//Creazione Istanza Actor
$actor1 = new Actor("Harrison", "Ford", "M", "Protagonista");
$actor2 = new Actor("Karen", "Allen", "F", "Minor Role");

//Creazione Istanza Movie
$movie1 = new Movie();
$movie1->setTitle("Indiana Jones");
$movie1->setDescr("The government wants to recruit Jones to find and obtain the biblical Ark of the Covenant before it can be claimed by Nazi leader Adolf Hitler, whose excavation for the Ark is underway in Egypt. Brody warns that if the Nazis obtain the Ark, its power will make Hitler invincible.");
$movie1->setPoster("https://upload.wikimedia.org/wikipedia/en/c/c3/Indiana_Jones_and_the_Dial_of_Destiny_theatrical_poster.jpg");
$movie1->setCast($actor1);
$movie1->setCast($actor2);

$movie1->setGenre($movie1_genre);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie class</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

    <div class="card" style="width: 18rem;">
        <img src=" <?php echo $movie1->getPoster(); ?> " class="card-img-top">

        <div class="card-body">
            <h5 class="card-title"><?php echo $movie1->getTitle(); ?></h5>
            <p class="card-text">
            <h3><?php echo $movie1->getTitle(); ?></h3>
            <?php echo $movie1->getDescr(); ?>
            </p>
            <hr>
            <div>
                <h4>Cast</h4>
                <?php foreach ($movie1->getCast() as $index => $actor) { ?>
                    <div><?php echo $actor->getFullName(); ?></div>
                <?php } ?>
            </div>

            <hr>
            <div>
                <h4>Genere</h4>
                <?php foreach ($movie1->getGenre()->getType() as $curr_Genre) { ?>
                    <div>
                        <?php
                        echo $curr_Genre;
                        ?>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</body>

</html>