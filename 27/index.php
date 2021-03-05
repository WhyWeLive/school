<?php

use twenty_seven\City;
use twenty_seven\Employee;
use twenty_seven\Student;
use twenty_seven\User;
use twenty_seven\UserEmployee;

$array = [
    new Employee('Коля', 0),
    new Student('Маша', 200),
    new Student('Наташа', 500),
    new Employee('Жора', 0),
    new Student('Зина', 454),
    new Employee('Люда', 454354)
];

foreach ($array as $item) {
    if ($item instanceof Employee) {
        echo $item->name;
    }
}

foreach ($array as $item) {
    if ($item instanceof Student) {
        echo $item->name;
    }
}

$total_salary = 0;

foreach ($array as $item) {
    if ($item instanceof Employee) {
        $total_salary += $item->salary;
    } else if ($item instanceof Student) {
        $total_salary += $item->scholarship;
    }
}

$new_array = [
    new UserEmployee('Коля', 'Колич', 0),
    new User('Маша', 200),
    new City('Додо пицца', 5345),
    new User('Наташа', 500),
    new UserEmployee('Жора', 'Кукович', 0),
    new User('Зина', 454),
    new City('Булочная', 4534),
    new UserEmployee('Люда', 'Свободная касса', 454354),
    new City('Шаурмечная', 43242345),
];

foreach ($new_array as $item) {
    if ($item instanceof User) {
        echo $item->name;
    }
}

foreach ($new_array as $item) {
    if (!($item instanceof User)) {
        echo $item->name;
    }
}

foreach ($new_array as $item) {
    if ($item instanceof User && !($item instanceof UserEmployee)) {
        echo $item->name;
    }
}
