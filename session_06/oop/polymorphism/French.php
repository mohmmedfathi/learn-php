<?php

require_once 'Person.php';

class French extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Bonjour!";
    }
}