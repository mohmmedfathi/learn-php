<?php

abstract class Person
{
    abstract public function greet(); 
}

class German extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Hallo!<br>";
    }
}

class French extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Bonjour!<br>";
    }
}

class English extends Person
{
    // Override the original greet method
    public function greet()
    {
        return "Hello!<br>";
    }
}

$objEnglish = new English();
$objGerman = new German();
$objFrench = new French();

echo $objEnglish->greet();
echo $objGerman->greet();
echo $objFrench->greet();