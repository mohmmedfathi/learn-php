<?php

// Encapsulation
class Animal
{
    private $family;
    private $food;

    public function __construct($family, $food)
    {
        $this->family  = $family;
        $this->food = $food;
    }

    // Encapsulation
    public function get_family()
    {
        return $this->family;
    }

    // Encapsulation
    public function set_family($family)
    {
        $this->family = $family;
    }

    // Encapsulation
    public function get_food()
    {
        return $this->food;
    }

    // Encapsulation
    public function set_food($food)
    {
        $this->food = $food;
    }
}
