<?php 
/* 
This document is used for adminitering the deck of cards
It generates a page of cards that all have an ok value of 0
It either deletes them or changes the value to 1
*/

//connect to the database
require 'db_connect.php';

//build the query string and get the data
$sql = "SELECT * FROM $tbl_name WHERE ok='0'";
$result = mysql_query($sql);
?>

<head>

	<title>Approve Cards for Gameplay</title>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="introjs.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="intro.js"></script>

</head>


<body>
	<h1>Cards to moderate.</h1>
	
	<?php 
	//add an if there is nothing

	//loop through all the results and display them
	while($row = mysql_fetch_array($result))
  {

  	//get the id of the current card to be passed to the onclick function
  	$id = $row['id'];

  	//build the cards to be moderated
  	echo "<div class='adminCards'>";
  	echo "<button class='delete' onclick='deleteCard($id)'>Delete</button>";
  	echo "<button class='delete' onclick='approveCard($id)'>Approve</button>";
  	echo $row['word'] . " " . $row['ban1']. " " . $row['ban2']. " " . $row['ban3']. " " . $row['ban4']. " " . $row['ban5'];
  	echo "</div>";
  } 
  ?>

	<script src="adminCards.js"></script>
</body>