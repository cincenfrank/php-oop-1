<?php
require_once "./classes/Movie.php";
require_once "./data/data.php";
require_once "./component/movieCard.php";

// $newMovie = new Movie("it", "test titolo", "2020", 9, "ciao.jpg");
// var_dump($newMovie);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <title>Test PHP</title>
</head>

<body>
    <main>
        <div class="container py-5">
            <div class="row row-cols-4">
                <?php
                foreach ($movieResponse["results"] as $movieData) {
                    $newMovie = new Movie($movieData["original_language"], $movieData["original_title"], $movieData["release_date"], $movieData["vote_average"], $movieData["poster_path"]);
                    // var_dump($newMovie);
                    movieCard($newMovie);
                }

                ?>
            </div>
        </div>
    </main>
</body>

</html>