<?php
// strings, numbers(intergers, float, or double), boolean, null, arrays

// let's start with a string

$name= "John";
$NAME="James";

echo "My first name is: $name";
echo "<br>";
echo "My second name is: $NAME";
echo "<br>";

//intergers
$nambari= 785;
echo "<br>";
 var_dump($nambari);
echo "<br>";
var_dump($name);

//boolean
$male= true;
$female= false;// mostly used in conditional statements

//lastly array

$students= array("caleb", "james", "Carlos", "Chris", 6,5,8,11);
var_dump($students);
echo "<br>";

//string functions
echo str_repeat("emobillis Mobile Technology.", 15);
echo "<br>";
echo str_word_count($name);
echo "<br>";
echo str_shuffle("Caleb Welwah");
echo "<br>";
echo strcasecmp("Benson", "Jackson");
echo "<br>";
echo strcmp("Erick", "Trainer");
echo "<br>";
echo strcspn("Derrick","Word", 6);
echo "<br>";

