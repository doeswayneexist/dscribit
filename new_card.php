<?php 
	$step1 = "This is the word that will be guessed at. We suggest picking picking some object in the world like a basketball";
	$step2 = "This is a word that cannot be used in the explanation of the word in the green box. If the word is basketball, then a good word to ban would be court."
?>

<head>
	<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="introjs.css">

	<script src="intro.js"></script>
</head>


<body>
	<div class="cardWrap">
		<h1>Create a new card.</h1>
		<div class="help" onclick="introJs().start();">
			<span>Help.</span>
		</div>
		<input type="text" class="good" placeholder="Enter a word to be guessed." data-intro="<?php echo $step1 ?>" data-step='1'>
		<input type="text" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='2'>
		<input type="text" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='3'>
		<input type="text" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='4'>
		<input type="text" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='5'>
		<input type="text" placeholder="Enter a banned word." data-intro="<?php echo $step2 ?>" data-step='6'>
		<div class="submit" id="sub">
			<span>Submit.</span>
		</div>
	</div>
</body>