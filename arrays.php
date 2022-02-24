<?php
//storing multiple values in a single array
// indexed arrays- index always starts at zero
$cars = array("volvo", "Mercedes", "Bentley", "Ferrarri");
echo "I love ".$cars[0].", ".$cars[1].", ".$cars[2]." and ".$cars[3].".";
echo "<br>";

echo "<br>";
// counting an array
echo count($cars);
echo "<br>";

//Looping through an indexed array
echo "<br>";

$arrlength= count($cars);

for($x=0; $x<$arrlength;$x++){
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
// Associative array- Used named keys that you assign to them
echo "<br>";
$age = array("James"=>"53", "Jacob"=>"25", "John"=>"36", "Jonah"=>"38");
echo "Jonah is " .$age['Jonah']. " years old.";

// looping through an associative array
foreach ($age as $x => $x_value) {
    echo "Key=" .$x. ", Value=" .$x_value;
    echo "<br>";
}
echo "<br>";

// Multidimensional arrays- contain one or more arrays
// Two-multidimensional arrays
$cars = array(
    array("volvo",22,17),
    array("Ferrarri",18,14),
    array("Discover",51,17),
    array("Legacy",7,5)
);
// two-dimensional $cars array contains four arays, and it has two indices: row and column
// to get access to the elements of the $crs array we must point to the two indices (row and column)

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".
<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".
<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".
<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
echo "<br>";

// Looping through the multidimensional array
for ($row = 0; $row < 4; $row++) {
    echo "<p><b>Row number $row</b></p>";
    echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
        echo "<li>".$cars[$row][$col]."</li>";
    }
    echo "</ul>";
}
