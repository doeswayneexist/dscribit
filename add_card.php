<?php

$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="dscribit"; // Database name 
$tbl_name="cards"; // Table name 

// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
mysql_select_db("$db_name")or die("cannot select DB");

// Get values from new_card page
$word=$_POST['word'];
$ban1=$_POST['ban1'];
$ban2=$_POST['ban2'];
$ban3=$_POST['ban3'];
$ban4=$_POST['ban4'];
$ban5=$_POST['ban5'];

// Insert data into mysql 
$sql="INSERT INTO $tbl_name(word, ban1, ban2, ban3, ban4, ban5)VALUES('$word', '$ban1', '$ban2', '$ban3', '$ban4', '$ban5')";
$result=mysql_query($sql);
?> 
