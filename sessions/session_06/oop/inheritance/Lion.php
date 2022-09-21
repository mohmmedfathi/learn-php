<?php

require_once 'Animal.php';

class Lion extends Animal
{
    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }
}

$test = new Lion("Lion Family", "Meat");

echo $test->get_family();