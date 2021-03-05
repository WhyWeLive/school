<?php

namespace twenty_seven;

class Student
{
    public $name;
    public $scholarship;

    /**
     * Student constructor.
     * @param $name
     * @param $scholarship
     */
    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }
}