// javaScript
var $ = require( "jquery" );
var Handlebars = require("handlebars");

//jquery
$(document).ready(function() {
//url server api
var serverApi = "http://localhost:8888/php-ajax-dischi/partials_php/server.php";

apiCall(serverApi);

//FUNCTIONS
//Function apiCall
function apiCall(url) {
  console.log(url)
  //Ajax
   $.ajax(

    {
     url: url,
     method: "GET",
     success: function(dataSuccess) {
       printSuccess(dataSuccess);
     }
   },
   {
     error: function(dataError) {
       console.log(dataError);
     }
   }

  );
  //end Ajax
};
//end Function apiCall

//Function printSuccess
function printSuccess(jsonArray) {
  for (var key in jsonArray) {
    thisAlbum = jsonArray[key];

    //Handlebars
    var source = $("#album_template").html();
    var template = Handlebars.compile(source);
    var context = thisAlbum;
    var html = template(context);

    //append Handlebars results
    $(".albums_list").append(html);
  };
};
//end Function printSuccess

});
//end Jquery
