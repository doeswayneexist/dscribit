//get a new card from the database
function getCard() {

  //check to see if there is an id
  if(document.getElementById('id')) {

    //get the id of the card
    var id = $('#id').html();
    //alert(id); //dev

  } else {

    //set the id to nothing if there is no card
    var id = '0';
  }

  //request a card and pass the id of the previous card
  $.ajax({ type: "POST", 
   url: "get_cards.php", 
       data: { 'id': id},
       charset: "utf-8", 
       success: function(obj) { 
        $('.card').html(obj);
      },
      error: function() { 
        alert("error");
      } 
    });
}