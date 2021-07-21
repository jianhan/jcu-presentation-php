<?php

class Dog {

    private $type;

    private $name;

    private $bestTrick;

    public function __construct($type, $name, $bestTrick) {
        $this->type = $type;
        $this->name = $name;
        $this->bestTrick = $bestTrick;
    }

    public function doBestTick(): void {
        echo sprintf("I am a %s, my name is %s and my best trick is %s", $this->type, $this->name, $this->bestTrick);
        echo PHP_EOL;
    }
}

$bob = new Dog('Pug', 'Bob', 'Rollover');
$bob->doBestTick();

$jay = new Dog('French Bulldog', 'Jay', 'Sit');
$jay->doBestTick();

$mick = new Dog('chiwawa', 'Mick', 'Rnning around');
$mick->doBestTick();

