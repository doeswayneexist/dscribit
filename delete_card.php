<?php 
/*
This script takes in the id of a card and deletes it from the database
*/

//connect to the database 
require 'db_connect.php';

//get the id of the card to delete
$id = $_POST['id'];

//build the query string and delete the chosen card
$sql="DELETE FROM $tbl_name WHERE id='$id'";
mysql_query($sql);
?>