# PHP Fundementals

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;![ele-running](https://user-images.githubusercontent.com/64088888/191135628-15da3462-6797-4e6e-9b2a-b1d348e9ed27.gif)

## :hammer: Including PHP in a File
```php
<?php

// place PHP code here

?>
```
## :hammer: Writing Comments
``` // ``` — Denotes one line comment <br>
``` # ``` — Another way of one line comment <br>
``` /*...*/ ``` — Everything between /* and */ is not executed, also works across several lines <br>

## :hammer: Outputting Data
```php
echo "<h1>hamada</h1>";
```
### :grey_exclamation: PHP echo and print Statements
```php
echo and print are more or less the same. They are both used to output data to the screen.
echo                            vs             print
echo has no return value                       print has a return value of 1 so it can be used in expressions.
echo can take multiple parameters              print can take one argument.
echo is marginally faster than print.
```

## :muscle: Variables and Constants

### :one: Defining Variables
```php
<?php

$name = "hamada";

?>
```
#### important variable rule for naming variables :
```
Variables need to start with a letter or underscore (_) 
PHP variables are case sensitive
If your variable consists of more than one word either write it $my_variable or $myVariable
```
### :two: Types of Data

&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;![PHP-Datatypes](https://user-images.githubusercontent.com/64088888/191133623-8f383f7a-ad9c-4c1a-9616-6e03083ef251.png)

* Integers — Integers are non-decimal numbers between -2,147,483,648 and ,147,483,647 .
* Floats — This is the name for numbers with a decimal point or in exponential form.
* Strings —  means text .
* Boolean - True or False
* Arrays — Arrays are variables that store several values.
* Objects — Objects store both data and information on how to process it.
* Resources — These are references to functions and resources outside of PHP.
* NULL — A variable that is NULL doesn’t have any value.

### :three: Predefined Variables
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp;![SuperGlobales-Variables-in-PHP](https://user-images.githubusercontent.com/64088888/191134540-f7183589-7eb3-4710-a064-44a4b9f4773b.png)

* ```$GLOBALS``` — Used to access global variables from anywhere inside a PHP script
* ```$_SERVER``` — Contains information about the locations of headers, paths, and scripts
* ```$_GET``` — Can collect data that was sent in the URL or submitted in an HTML form
* ```$_POST``` — Used to gather data from an HTML form and to pass variables
* ```$_REQUEST``` — Also collects data after submitting an HTML form

### :four: Constants
&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp; &nbsp; ![download](https://user-images.githubusercontent.com/64088888/191135824-e1bdd09d-5d65-4326-9ba8-1e007f02b99d.png)
```php
define(name, value, true/false)
```

#### :warning: **the third parameter whether its name should be case sensitive (the default is false).**
####  default PHP constants:
* __LINE__ — Denotes the number of the current line in a file
* __FILE__ — Is the full path and filename of the file
* __DIR__ — The directory of the file

### :five: PHP Arrays 
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;![Arrays-in-PHP-final](https://user-images.githubusercontent.com/64088888/191137223-d67d8075-e785-462d-9831-f9c511201dcb.png)
<br><br>
**In PHP there are different types of arrays:**
* Indexed arrays – Arrays that have a numeric index
* Associative arrays – Arrays where the keys are named
* Multidimensional arrays – Arrays that contain one or more other arrays

#### indexed array : 

```php
<?php
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
  echo $cars[$x];
  echo "<br>";
}
?>
```
#### Associative arrays :
```php
<?php
$human = array("hamada"=>"35", "ahmed"=>"37", "abdo"=>"43");

foreach($human as $x => $x_value) {
  echo "Key=" . $x . ", Value=" . $x_value;
  echo "<br>";
}
?>
```

#### Multidimensional arrays :
```php
<?php
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
    
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>
```
## PHP Functions : 
* A function is a block of statements that can be used repeatedly in a program.
* A function will not execute automatically when a page loads.
* A function will be executed by a call to the function.
#### **User Defined Function in PHP**:
```php
<?php
function writeMsg() {
  echo "Hello world!";
}

writeMsg(); // call the function
?>
```
## PHP Operators:
&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp;   &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;![85d5acbcbf874ffa23001f8591ff35e2](https://user-images.githubusercontent.com/64088888/191138914-890563c2-0d95-42c6-8b8e-ae1cc1da675c.jpeg)

### standard mathematic operators : 

```php 
 + — Addition
 - — Subtraction
 * — Multiplication
 / — Division
 % — Modulo (the remainder of value divided by another)
 ** — Exponentiation
```

### Assignment Operators : 

```php 
 += ----> a += b is the same as a = a + b
 -= ----> a -= b is the same as a = a – b
 *= ----> a *= b is the same as a = a * b
 /= ----> a /= b is the same as a = a / b
 %= ----> a %= b is the same as a = a % b
```

### Comparison Operators: 
```php 
== — Equal
=== — Identical
!= — Not equal
<> — Not equal
!== — Not identical
< — Less than
> — Greater than
<= — Less than or equal to
>= — Greater than or equal to
<=> — Less than, equal to, or greater than
```

### Logical Operators: 
```php 
and — And
or — Or
xor — Exclusive or
! — Not
&& — And
|| — Or
```

### Increment/Decrement Operators:
```php
++$v — Increments a variable by one, then returns it
$v++ — Returns a variable, then increments it by one
--$v — Decrements the variable by one, returns it afterward
$v-- — Returns the variable then decrements it by one
```

## PHP Loop:

&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; ![different-types-of-Loops](https://user-images.githubusercontent.com/64088888/191140016-91705079-bbb6-49ea-9578-1f42e01f35bb.jpg)
<br> 
### while :

```php
<?php
$x = 0;

while($x <= 100) {
  echo "The number is: $x <br>";
  $x+=10;
}
?>
```
### do while :
```php 
<?php
$x = 6;

do {
  echo "The number is: $x <br>";
  $x++;
} while ($x <= 5);
?>
```
### for :

```php
<?php
for ($x = 0; $x <= 100; $x+=10) {
  echo "The number is: $x <br>";
}
?>
```

### foreach  :

```php
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
?>
```

## Conditional Statements : 
* If Statement
``` php
if (condition) {
    // code to execute if condition is met
}
```

* If…Else
```php
if (condition) {
    // code to execute if condition is met
} else {
    // code to execute if condition is not met
}
```

* Switch Statement 
```php
switch (n) {
    case x:
        code to execute if n=x;
        break;
    case y:
        code to execute if n=y;
        break;
    case z:
        code to execute if n=z;
        break;

    // add more cases as needed

    default:
        code to execute if n is neither of the above;
}
```






