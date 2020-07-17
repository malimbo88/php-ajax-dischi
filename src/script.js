// javaScript
var $ = require( "jquery" );
var Handlebars = require("handlebars");

//jquery
$(document).ready(function() {
 $.ajax({
   url: "http://localhost:8888/php-ajax-dischi/partials_php/database.php",
   method: "GET",
   success: function(dataResponse) {
     console.log(dataResponse);
   }
 })
});
//end Jquery
