<?php

require_once 'Animal.php';

class Cow extends Animal
{
    private $owner;

    public function __construct($family, $food)
    {
        parent::__construct($family, $food);
    }

    public function set_owner($owner)
    {
        $this->owner = $owner;
    }

    public function get_owner()
    {
        return $this->owner;
    }
}

$cow = new Cow("Cow Family", "gross");

$cow->set_owner("hamdy");
echo $cow->get_owner();
// echo $cow->get_family();