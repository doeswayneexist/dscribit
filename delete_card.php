<?php 
//takes in the id of a card and deletes it from the database

//connect to the database 
require 'db_connect.php';

//dev: set id to something
$id = $_POST['id'];;

//delete the chosen card
$sql="DELETE FROM $tbl_name WHERE id='$id'";
mysql_query($sql);
?>