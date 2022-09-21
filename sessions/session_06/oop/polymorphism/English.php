<?php

require_once 'Person.php';

class English extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Hello!";
    }
}

$obj = new English();

echo $obj->greet();