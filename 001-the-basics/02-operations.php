<?php
// Variables can be used to do a multitude of things and are the core of any serverside application..
//lets do an initial setup of strings and integers.

$numberOne = 1;
$numberTwo = 2;
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
