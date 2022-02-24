<?php
$myserver="localhost";
$username="root";
$pass="";
// creating connection using object oriented language
$connect=new mysqli("$myserver", "$username", "$pass");
// check connection
if (!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";