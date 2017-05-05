//$( "button" ).click(function() {
  //$( ".modal" ).show();
//});

$(".close").click(function() {
   $(".modal").hide();
});

$("button").click(function() {
  var nav =$(this).text();
	$("#"+nav).show();
//alert(nav);

});