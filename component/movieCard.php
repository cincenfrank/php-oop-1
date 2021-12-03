<?php
function movieCard($newMovie)
{
?><div class="col">
        <div>
            <img class="w-100" src="<?php echo $newMovie->getPosterPath() ?>" alt="poster">
            <h3><?php echo $newMovie->getTitle() . " (" . $newMovie->getOriginalLanguage() . ")" ?></h3>
            <p>vote: <?php echo $newMovie->getVote(true) ?></p>
        </div>
    </div>
<?php
}
