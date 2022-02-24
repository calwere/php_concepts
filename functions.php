<?php
// function names are ot case sensitive
function writeMsg() {
    echo "Say Hello to the world"; // code to be executed
}
writeMsg(); // calling the function

echo "<br>";
echo "<br>";

// php function arguments- argument is like a variable. Specified after the function name

function familyName ($fname){ // information can be passed to functions through arguments
    echo "$fname Werterko. <br>";
}
familyName("Johnson");// we also pass along a name and the name is used the function, which outputs several
// different first names, but an equal last name.
familyName("Jackson");
familyName("Jani");
familyName("Stale");
echo "<br>";

// function can have two arguments ($fname and $year)

function NameYears($fname, $year){
    echo "$fname Werterko. Admitted to school on $year <br>";
}
NameYears("Hanks", "2012");
NameYears("Johnson", "2019");
NameYears("Jackson", "2015");
NameYears("Kailesa", "2017");
echo "<br>";

//Dividing numbers using a function
function divideNumbers(int $a, int $b) {
    return $a/$b;
}
echo divideNumbers(100, 15);
 echo "<br>";
// passing arguments by reference using  $ operator

function SubTwo(&$value){
    $value-=2;
}
$num=8;
SubTwo($num);
echo $num;
