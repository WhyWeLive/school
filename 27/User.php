<?php

namespace twenty_seven;

class User
{
    public $name;
    public $surname;

    /**
     * User constructor.
     * @param $name
     * @param $surname
     */
    public function __construct($name, $surname)
    {
        $this->name = $name;
        $this->surname = $surname;
    }


}