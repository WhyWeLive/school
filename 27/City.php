<?php

namespace twenty_seven;

class City
{
    public $name;
    public $population;

    /**
     * City constructor.
     * @param $name
     * @param $population
     */
    public function __construct($name, $population)
    {
        $this->name = $name;
        $this->population = $population;
    }
}