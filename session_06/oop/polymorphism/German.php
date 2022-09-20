<?php

require_once 'Person.php';

class German extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Hallo!";
    }
}