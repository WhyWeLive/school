<?php

namespace twenty_seven;

class Employee
{
    public $name;
    public $salary;

    /**
     * Employee constructor.
     * @param $name
     * @param $salary
     */
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }


}