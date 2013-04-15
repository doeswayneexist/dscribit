<?php 
/*
This script sets all the info for the cards database
Include this file into any page that needs to connect
*/

//db info
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="dscribit"; // Database name 
$tbl_name="cards"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");
 ?>