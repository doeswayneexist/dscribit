<?php 
//takes in the id of a card and approves it from the database

//connect to the database 
require 'db_connect.php';

//dev: set id to something
$id = $_POST['id'];;

//delete the chosen card
$sql="UPDATE $tbl_name
            SET ok = '1'
            WHERE id='$id'";

mysql_query($sql);
?>