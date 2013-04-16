<?php 
/*
This file pulls a single new card for the user to experience a very basic version of the game.
*/

$step1 = "When you start the game, a word will appear here. You must describe this word without using any of the words in the red boxes.";
$step2 = "Do not use any of the words in the red boxes when trying to explain the word in the green box. If you say one of these words, you must skip this card.";
$step3 = "Click this button when are ready to play or when your partner has guessed the word.";

?>
<head>

	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="introjs.css">
	<script src="intro.js"></script>

</head>

<?php include 'header.php'; ?>

<div class="cardWrap">
	<h1>Pick a card.</h1>
	<div class="card">
		<div class="help" onclick="introJs().start();">
			<span>Help.</span>
		</div>
		<h2 class="word" data-intro="<?php echo $step1 ?>" data-step='1'>Try to explain this word.</h2>
		<p class="ban" data-intro="<?php echo $step2 ?>" data-step='2'>Do not use any of these words.</p>
		<p class="ban">Do not use any of these words.</p>
		<p class="ban">Do not use any of these words.</p>
		<p class="ban">Do not use any of these words.</p>
		<p class="ban">Do not use any of these words.</p>
	</div>
	<div class="submit" id="sub" onclick="getCard();" data-intro="<?php echo $step3 ?>" data-step='3'>
			<span>Got it.</span>
	</div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="getCard.js"></script>