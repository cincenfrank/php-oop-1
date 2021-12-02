
<?php
class Movie
{
    public $title = [];
    public $year;
    public $vote;
    public $posterPath;

    function __construct($_lang, $_title, $_year, $_vote, $_posterPath)
    {
        $this->setTitle($_lang, $_title, true)->setYear($_year)->setVote($_vote)->setPosterPath($_posterPath);
    }

    public function setTitle($_lang, $_title, $_isDefault = false)
    {
        if ($_isDefault) {
            $this->title["default"] = $_lang;
        }
        $this->title["map"] = [$_lang => $_title];
        return $this;
    }
    public function getTitle($_lang = null)
    {
        $langKey = $this->title["default"];
        if ($_lang) {
            if (key_exists($_lang, $this->title["map"])) {
                $langKey = $_lang;
            }
        }
        return $this->title["map"][$langKey];
    }
    public function setYear($_year)
    {
        $this->year = $_year;
        return $this;
    }
    public function getYear()
    {
        return $this->year;
    }
    public function setVote($_vote)
    {
        $this->vote = $_vote;
        return $this;
    }
    public function getVote($_convertToStars = false)
    {
        if ($_convertToStars) {
            return  round($this->vote / 2);
        } else {
            return $this->vote;
        }
    }
    public function setPosterPath($_posterPath)
    {
        $this->posterPath = $_posterPath;
        return $this;
    }
    public function getPosterPath()
    {
        return "https://image.tmdb.org/t/p/w342" . $this->posterPath;
    }

    public function getOriginalLanguage()
    {
        return $this->title["default"];
    }
}
