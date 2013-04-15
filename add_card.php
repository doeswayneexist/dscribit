<?php
/*
This script takes in all the data needed to add a new card to the database
*/

//connect to database
require 'db_connect.php';

//get values from new_card page
$word=$_POST['word'];
$ban1=$_POST['ban1'];
$ban2=$_POST['ban2'];
$ban3=$_POST['ban3'];
$ban4=$_POST['ban4'];
$ban5=$_POST['ban5'];

//build the query string
$sql="INSERT INTO $tbl_name(word, ban1, ban2, ban3, ban4, ban5)VALUES('$word', '$ban1', '$ban2', '$ban3', '$ban4', '$ban5')";

//insert data into mysql 
$result=mysql_query($sql);
?> 
