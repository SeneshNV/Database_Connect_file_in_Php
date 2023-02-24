<?php

$dbserver = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "user"; 
    
//create connection
$connection = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname);

check connection
if(!$connection){
    die("Connection failed:" . mysqli_connect_error());
}
echo "Connected successfuly";
?>

