<?php
//Simple examples of using php and little language excepts so you can understand

//every php file starts with "<?php". This explains to the server to start parsing for PHP.

//every line must finish with a semicolon(;) in order to tell it to stop the line

//should you be using html, you can cleverly include php in your html using the following syntax:

/*
<div>
<h1><?php echo $header; ?></h1>
</div>
*/

//where $header is a variable containing a header string.

//two forward slashes make a one-line comment that isn't read by php. These are useful for snippets.

/*
Forward Slash Asterisk is for a multi-line comment.
Each part represents where it starts and where it ends.
Usefull for paragraphs and explaining multiple things.
*/

//This will output "Hello World" onto our page.
echo "Hello World";

//this will output "Hello World" using html syntax to our page.
echo "<h1>Hello World</h1><p>We have a header and a paragraph!</p>";
echo "<hr/>";

//Variables are one of the fundamental ways of dealing with data in php and some of these can be echoed as well.
//Variables are defined by using a DOLLAR($) sign on your keyboard. You can attach multiple types to variables.

//String
$newString = "This is a string attached to a variable <br/>";
echo "String: ";
echo $newString;

//Integer
echo "Integer: ";
$newInt = 0;
echo $newInt;
echo "<br/>";

//Boolean - Will show 1 for true and 0 for false
echo "Boolean: ";
$newBoolean = true;
echo $newBoolean;
echo "<br/>";

//Array
echo "Array: ";
$newArray = array(1,2,3,4,5);
print_r($newArray);
echo "<br/>";
//you can't echo an array. It's recommended you use print_r or var_dump. I personally prefer print_r

//Function
//We'll cover this more later, but this is a really basic example of a function that needs two inputs.
//no matter whats added, this particular function will return true so long as there are two attributes.
echo "Function: ";
function myFunction($string, $num){
  return true;
}

$newFunction = myFunction("example_function", 0);
echo $newFunction;


//you can echo a function but only if it's return value allows it to do such.

//TO DO:

/*
Using the space below, echo out a simple html table. You can use multiple echoes, or just one echo.
The table can be as big or as small as you want.
Make the table have a header above it, which is defined by a variable.
*/

//ADD CODE UNDER HERE
