<?php


require 'BreatherTrait.php';
require 'Dog.php';
require 'Person.php';

$person = new Person;

$person->name = 'Juan';
$person->age = 123;

echo 'mi nombre es ' . $person->name . "\n";

echo $person->inhale();
echo $person->exhale();


print_r(get_class_methods($person));

$dog = new Dog;

echo $dog->inhale();
echo $dog->exhale();

print_r(get_class_methods($dog));