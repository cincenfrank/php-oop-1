<?php
require_once "classes/Movie.php";
require_once "data/data.php";

// $newMovie = new Movie("it", "test titolo", "2020", 9, "ciao.jpg");
// var_dump($newMovie);
echo "<ul>";
foreach ($movieResponse["results"] as $movieData) {
    $newMovie = new Movie($movieData["original_language"], $movieData["original_title"], $movieData["release_date"], $movieData["vote_average"], $movieData["poster_path"]);
    // var_dump($newMovie);
?>
    <li>
        <div>
            <img src="<?php echo $newMovie->getPosterPath() ?>" alt="poster">
            <h3><?php echo $newMovie->getTitle() . " (" . $newMovie->getOriginalLanguage() . ")" ?></h3>
            <p>vote: <?php echo $newMovie->getVote(true) ?></p>
        </div>
    </li>
<?php
}
echo "</ul>";
