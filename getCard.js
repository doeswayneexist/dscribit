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

        //add the card to the html of the page
        $('.card').html(obj);
      },
      error: function() { 
        alert("error");
      } 
    });
}

//toggles the play and submit buttons
function toggleButtons () {
  //toggle the play button
  $('#play').toggle();

  //display the got it button
  $('#sub').toggle();
}

//puts the turn in motion
function play() {

  //toggle the play button
  toggleButtons();

  //set the turn to active
  turnActive = true;

  //get a card
  getCard();

  //start the timer
  var count=120;

  var counter = setInterval(timer, 1000); //1000 will  run it every 1 second

  function timer()
  {
    count=count-1;
    if (count <= 0)
    {
     clearInterval(counter);
       //counter ended, do something here
       $('#time').html('Turn Over')

       //reset the game board
       turnActive = false;
       toggleButtons();


       //make the next player active
       return;
     }

    //show the current countdown time
    $('#time').html(count)
  }

}

function gotCard() {

  //getCard
  getCard();

  //update player score

}

function skipCard() {

  //do nothing if the turn isnt active
  if (!turnActive) {
    return;
  }

  //getCard
  getCard();

  //update player score

}

function resetGame() {

  //set turn to not active

  //put the play button back

  //reset the cards
}

//init settings
var turnActive = false;
$('#sub').toggle();



