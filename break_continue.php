<?php
// php break

for ($x=1; $x<15; $x++ ){
    if ($x == 5){
        break;
    }
    echo "The nummber is: $x <br>";
}
echo "<br>";

//php continue--breaks one iteration in the loop andcontinues with the next iteration in the loop

for ($x=0; $x<15; $x++) {
    if ($x == 5) {
        continue;
    }
    echo "Nambari ni: $x <br>";

}
echo "<br>";

// break and continue in while loops
 $x=12;
 while ($x<15){
     if ($x == 14){
         break;
     }
     echo "Nambari ni: $x <br>";
     $x++;
 }
echo "<br>";
 $x= 2;

 while ($x < 9) {
     if ($x == 6) {
         continue;
     }
     echo "The number is: $x <br>";
     $x+=2;
 }