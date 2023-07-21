<?php

class Actor
{
    public $first_name;
    public $last_name;
    public $nation;
    public $age;


    // Construct
    function __construct($first_name, $last_name, $nation, $age)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->nation = $nation;
        $this->age = $age;
    }
}
