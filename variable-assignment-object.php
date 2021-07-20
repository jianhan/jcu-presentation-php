<?php
    class Student {
        public $name;
        public $age;
    }

    $bob = new Student();
    $bob->name = 'Bob';
    $bob->age = 12;
    var_dump($bob);

    $copyOfBob = $bob;
    $copyOfBob->age = 50;

    var_dump($bob, $copyOfBob);
    
?>