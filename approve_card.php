<?php 
/*
This script takes in the id of a card and updates its ok value to 1 
*/

//connect to the database 
require 'db_connect.php';

//get the id of the card to be updated
$id = $_POST['id'];

//build the query string and update the chosen card
$sql="UPDATE $tbl_name SET ok = '1' WHERE id='$id'";
mysql_query($sql);
?>