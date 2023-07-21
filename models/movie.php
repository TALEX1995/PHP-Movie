<?php

include_once __DIR__ . '/actor.php';
class Movie
{
    public $id;
    public $title;
    public $type;
    public $year_of_release;
    public $vote;
    public $actors;

    // Construct
    function __construct(int $id, $title, $type, int $year_of_release, int $vote, array $actors)
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->year_of_release = $year_of_release;
        $this->vote = $vote;
        $this->actors = $actors;
    }

    public function isVoteValid()
    {
        if (($this->vote < 6) && ($this->vote > 0)) {
            return true;
        } else {
            return false;
        }
    }

    public function getMovieInfo()
    {
        return 'Nome Film: ' . $this->title . ' ' . 'Tipo: ' . $this->type . ' ' . 'Anno di uscita: ' . $this->year_of_release;
    }
}
