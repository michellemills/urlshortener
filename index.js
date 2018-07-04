console.log("hello world")
// ajax request
$.ajax({
  url: "/shorten.php",
  data: {
    desitnation: "whatever is in the test box"
  },
  success: function( result ) {
    $( "#weather-temp" ).html( "<strong>" + result + "</strong> degrees" );
  }
});
