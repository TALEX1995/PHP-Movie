<?php

class Movie
{
    public $id;
    public $title;
    public $type;
    public $year_of_release;
    public $vote;

    // Construct
    function __construct(int $id, $title, $type, int $year_of_release, int $vote)
    {
        $this->id = $id;
        $this->title = $title;
        $this->type = $type;
        $this->year_of_release = $year_of_release;
        $this->vote = $vote;
    }
}
