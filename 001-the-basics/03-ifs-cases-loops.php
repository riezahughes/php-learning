<?php
//If you have cloned into your XAMPP directory as requested, you can access this file using this link:
http://localhost/php-learning/001-the-basics/03-loops.php

//The most basic conditional you can do is the IF statement.

$example = true;
if($example == true){
  echo "The First Example is True!";
}

// in this example, if the variable $example is equal to true, then it will fire the code withing the curly brackets.

//if you require a fallback, you can use the ELSE statement:

$exampleTwo = false;
if($example == true){
  echo "I won't reach here by default";
}else{
  echo "IM NOT TRUE";
}

// you can use AND and OR using && or ||

$exampleThree = "Betsy";
$exampleFour = "Boo";

if($exampleThree == "Betsy" && $example4 == "Boo"){
  echo "You've got the name correct!";
}

$exampleFive = "Aye";
$exampleSix = "Yes";

if($exampleFive == "Aye" || $exampleSix == "test"){
  echo "only one of these need to match to reach this echo!";
}

//You can embed these within each other with each in order to create clever conditionals.
//Other than if statements however, you can also use CASE Switch Statements. These act relatively the xhprof_sample_disable
