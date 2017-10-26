jQuery form:-

//$('#isnsert').click(function(){
$("#isnsert").on("click", function() {
  //$('#message').text("Hello world!");
  $("#message").text( "Triggered ajaxSuccess handler." );
  $("#message").html( "<b>This is from HTML handler.</b>" );
  $("#message").append( "<li>Successful Append Request!</li>" );
  $("#message").prepend( "<li>Successful Prepend Request!</li>" );
  //$("#message").load("Ajax_loading.txt");
})

//Get
//var bla = $('#fsform').val();
//Set
//$('#message').val('bla');