<?php 
/*
This script gets a single card from the database and builds the html version of the card
This script is passed an id value of the last card that it generated to prevent it from pulling the same card twice in a row
*/

//connect to the db
require 'db_connect.php';

//get the id of the previous card
$id = $_POST['id'];

//build the query string
$sql = "SELECT * FROM $tbl_name WHERE ok='1' AND id!='$id' ORDER BY RAND() LIMIT 1"; //will be to slow when db grows
//$sql = "SELECT * FROM $tbl_name WHERE ok='1' ORDER BY RAND() LIMIT 1"; //will be to slow when db grows
$result = mysql_query($sql);

//get the first row
$row = mysql_fetch_array($result);
?>

<!-- build a card in html -->
<h2 class="word"><?php echo $row['word']?></h2>
<p class="ban"><?php echo $row['ban1']?></p>
<p class="ban"><?php echo $row['ban2']?></p>
<p class="ban"><?php echo $row['ban3']?></p>
<p class="ban"><?php echo $row['ban4']?></p>
<p class="ban"><?php echo $row['ban5']?></p>
<!-- this hidden element exists just to pass the id of the current card -->
<p hidden id="id"><?php echo $row['id'] ?></p>