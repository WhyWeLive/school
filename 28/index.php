<?php

use twenty_eight\Employee;
use twenty_eight\Post;

$software_engineer = new Post('Программист', 534252);
$manager = new Post('Менеджер', 523523);
$driver = new Post('Водитель', 234234);

$junior = new Employee('Роман', 'Шариков', $software_engineer);

echo 'Name: ' . $junior->getName() . ' ' . $junior->getSurname() . ' Post: ' . $junior->getPost()->getName() . ' Salary: ' . $junior->getPost()->getSalary();