<?php
// if else statement
$x=6;
if ($x>=8) {
    echo "Have a Good night";
} else{
    echo "Have a Good Day";
}
echo "<br>";

//if.. elseif..else

$y=99;
if ($y<=40) {
    echo "Fail";
}
elseif ($y<=79){
    echo "Pass";
}
else{
    echo "Excellent";
}

echo "<br>";

// switch statement
$favcountry="England";

switch ($favcountry){
    case "Italy":
      echo "Your favorite color is Italy";
      break;
    case "Britain":
        echo "Your favorite country is Britain";
        break;
    case "Germany":
        echo "You love Germany";
        break;
    case "Eng":
        echo "You love England, it's your favourite country";
        break;
    default:
        echo "Your favorite country is neither Italy, Britain, Germany nor England";
}