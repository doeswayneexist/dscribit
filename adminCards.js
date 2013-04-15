// The function that passes the id to the php page that deletes cards
var deleteCard = function (id) {

	//submit the cards to be added to the db
	$.ajax({
    type: "POST",
    url: "delete_card.php",
    data: { 'id': id},
    cache: false,
    success: function()
        {
            alert("Card Deleted");
        }
    });
	$(this.parentNode).remove();
}

// The function that passes the id to the php page that approves cards
var approveCard = function (id) {

	//submit the cards to be added to the db
	$.ajax({
    type: "POST",
    url: "approve_card.php",
    data: { 'id': id},
    cache: false,
    success: function()
        {
            alert("Card Approved");
        }
    });
}

$('.delete').click(function() {
  $(this).parent().remove();
});