<?php

//while loop
$num1=6; // start or yyou can call this initialize counter

while ($num1<=15){   // this is the condition
    echo "Nambari ni: $num1 <br>";

    $num1+=2; // increase counter value by 2

}
echo "<br>";

$x=50;
while ($x<=100) {
    echo "The number is $x <br>";
    $x+=20;
}
echo "<br>";


// do while loop
$num2=15;

do{
    echo "Nambari ni: $num2 <br>";
    $num2++;

} while($num2<=14);
echo "<br>";

// for loop
//init counter, test counter, increment counter

for ($x=50; $x<=100; $x+=10) {  //initialize counter, continue the loop as long as condition is true, increase the counter
    echo "The number is $x <br>";
}
echo "<br>";

for ($y=60; $y<=80; $y+=5) {
    echo "The numbber is $y <br>";
}
echo "<br>";
echo "<br>";

// foreach loop
$counties=array("Kach", "Mumias","Kitui","Mombasa");

foreach ($counties as $value){
    echo "$value <br>";
}
echo "<br>";

$students=array("Isaac", "caleb", "james", "Ezekiel");

foreach ($students as $value){
    echo "$value<br>";
}
echo "<br>";

// output keys and values of array

$grade=array("Jona"=>"56", "Masha"=>"65", "Terah"=>"78", "Belac"=>"87");
foreach ($grade as $x=>$val) {
    echo "$x = $val <br>";
}
