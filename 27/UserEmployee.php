<?php

namespace twenty_seven;

class UserEmployee extends User
{
    public $salary;

    /**
     * UserEmployee constructor.
     * @param $name
     * @param $salary
     * @param $surname
     */
    public function __construct($name, $surname, $salary)
    {
        parent::__construct($name, $surname);

        $this->salary = $salary;
    }


}