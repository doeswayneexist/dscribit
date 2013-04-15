// The function that adds the card to the database.
var addCard = function () {

	//get all the value
	var word = document.getElementById('word').value.toString(),
			ban1 = document.getElementById('ban1').value.toString(),
			ban2 = document.getElementById('ban2').value.toString(),
			ban3 = document.getElementById('ban3').value.toString(),
			ban4 = document.getElementById('ban4').value.toString(),
			ban5 = document.getElementById('ban5').value.toString();

	function resetCard() {
			document.getElementById('word').value = '';
			document.getElementById('ban1').value = '';
			document.getElementById('ban2').value = '';
			document.getElementById('ban3').value = '';
			document.getElementById('ban4').value = '';
			document.getElementById('ban5').value = '';
	}
	//submit the cards to be added to the db
	$.ajax({
    type: "POST",
    url: "add_card.php",
    data: { 'word': word,
    				'ban1': ban1,
    				'ban2': ban2,
    				'ban3': ban3,
    				'ban4': ban4,
    				'ban5': ban5
    			},
    cache: false,
    success: function()
        {
            alert("Card Submitted");
            resetCard();
        }
    });
}