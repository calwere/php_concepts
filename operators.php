<?php
// mathematical operators

$num = 45;
$num1 = 19;

echo $num+$num1; //Addition
echo "<br>";
echo $num-$num1; //Subtraction
echo "<br>";
echo $num/$num1; //Division
echo "<br>";
echo $num*$num1; // Multiplication
echo "<br>";
echo $num%$num1; //Modulus
echo "<br>";

//Assignment Operators
$num3=65;
$num3+=50;

echo $num3;
echo "<br>";

//Comparison Operators
$num4="32";
$num5=32;

var_dump($num4===$num5); //identical
echo "<br>";

var_dump($num4==$num5); //equals
$num4=71;
$num5=17;
echo "<br>";
var_dump($num4==$num5); //equals
echo "<br>";
var_dump($num4===$num5); //identical
echo "<br>";
var_dump($num4!=$num5);//not equal to
echo "<br>";
var_dump($num4>$num5);//greater than
echo "<br>";
var_dump($num4<$num5);// less than
echo "<br>";
var_dump($num4<=$num5);//less than or equal to
echo "<br>";
var_dump($num4>=$num5);//greater or equal to
echo "<br>";

//Logical operators
var_dump($num<$num1 && $num3>=$num4); // and operator
echo "<br>";
echo "<br>";
echo "<br>";
var_dump($num<$num1 || $num3>=$num4); // or operator