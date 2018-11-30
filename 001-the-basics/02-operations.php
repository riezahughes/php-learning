<?php
//If you have cloned into your XAMPP directory as requested, you can access this file using this link:
http://localhost/php-learning/001-the-basics/02-operations.php

// Variables can be used to do a multitude of things and are the core of any serverside application..
//lets do an initial setup of strings and integers.

$numberOne = 1;
$numberTwo = 2;
$numberThree = 3;
$numberFour = 4;
$numberFive = 5;

$string1 = "Hello there,";
$string2 = "World";

//Contatenation: The ability to string two strings together. This is done by using a full stop(.)
//Other Languages may use a plus, but in php it is a full stop.

echo $string1 . $string2 . "</br>";
// > "Hello there,World" will print.

//As you can see, a space is missing, so we'll add this:

echo $string1 . " " . $string2 . "</br>";
// > "Hello there, World" will print.

//The space could just have easilly been added in the string variables as well. It didn't have to be a space either
//You can fill in as much as you want so long as you remember that strings need to be contained withing quotation marks ("" or '')

/*

echo $string1 . fantastic . $string2; - WILL CAUSE AN ERROR

echo $string2 . " fantastic " . $string2; - WILL NOT.

*/

//You can have as many concatenations as you would like.

//Math: The ability to add, divide, get the remainder of etc from numbers.

echo $numberOne + $numberTwo;
echo "<br/>";
//adds 1 and 2

echo $numberFive - $numberFour;
echo "<br/>";

echo $numberTwo * $numberFive;
echo "<br/>";
//multiplies 2 by 5

echo $numberFour / $numberTwo;
echo "<br/>";
//divides 4 by 2.

//Making new Variables from old ones:
//Until now we've been echoing out the results. If you wanted to store the value to be used later, you would just set a new variable.

$newNumber = ($numberOne + $numberTwo) / $numberThree;
echo $newNumber;
echo "<br/>";
//takes the sum of one + two and divides it by 3,making $newNumber = 1;

//One thing to note is that you can go ahead and overwrite any of these at any time.
//To save clutter and remembering variables, one practice is to use the same left side variable.
//Here's an example of what i mean.

$newNumber = 0;
//sets the previous $newNumber to equal 0;

$newNumber = $newNumber + 5;
$newNumber = $newNumber * 2;
$newNumber = $newNumber / 2;
//simple math

echo $newNumber;
echo "<br/>";
// $newNumber will equal 5.

//TO DO:

/*
Using the space below, create 3 different formulas that make the number 100 and echo it out.
You may use the variables defined at the start or if you require it include other numbers using variables of your own.
Remember: $numberOne is just a reference i choose. You could have just as easilly called the variable holding 1 $house.

remember to commit this file once you're convinced it's doing what you need it to.
*/

//ADD CODE UNDER HERE
