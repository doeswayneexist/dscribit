<?php 
/*
This page is used to create new cards. 
The user enters words into the form and an ajax function is called to pass the cards to a php page which updates the db
*/

$step1 = "This is the word that will be guessed at. We suggest picking picking some object in the world like a basketball";
$step2 = "This is a word that cannot be used in the explanation of the word in the green box. If the word is basketball, then a good word to ban would be court."
?>

<head>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="introjs.css">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="intro.js"></script>
	<script src="addCard.js"></script>
</head>


<body>
	<div class="cardWrap">
		<h1>Create a new card.</h1>
		<div class="help" onclick="introJs().start();">
			<span>Help.</span>
		</div>
		<input title="Type in a word." type="text" id="word" class="good" placeholder="Enter a word to be guessed." data-intro="<?php echo $step1 ?>" data-step='1'>
		<input title="Type in a word." type="text" id="ban1" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='2'>
		<input title="Type in a word." type="text" id="ban2" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='3'>
		<input title="Type in a word." type="text" id="ban3" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='4'>
		<input title="Type in a word." type="text" id="ban4" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='5'>
		<input title="Type in a word." type="text" id="ban5" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='6'>
		<div class="submit" id="sub" onclick="addCard();">
			<span>Submit.</span>
		</div>
	</div>
</body>