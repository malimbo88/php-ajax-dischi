// javaScript
var $ = require( "jquery" );
var Handlebars = require("handlebars");

//jquery
$(document).ready(function() {
//url server api
var serverApi = "http://localhost:8888/php-ajax-dischi/partials_php/server.php";

//chimata api avvio pagina popolo select autori
apiAuthorOptions(serverApi);

//chiamata api in avvio pagina popolo lista album
apiCall(serverApi, "");

//leggo il valore di option relativo alla scelta dell'utente su input select
$("#author_select").change(function() {
  authorSelected = $(this).val();

  //svuoto la lista di album corrente
  $(".albums_list").html("");

  //chiamata api dopo selezione utente
  apiCall(serverApi, authorSelected);
});

//FUNCTIONS
//Function apiCall
function apiCall(url, authorSearch) {
  //Ajax
   $.ajax(

    {
     url: url,
     method: "GET",
     data: {
       author: authorSearch
     },
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
  for (var i = 0; i < jsonArray.length; i++) {
    thisAlbum = jsonArray[i];

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

//Function apiAuthorOptions
function apiAuthorOptions(url) {
  //Ajax
  $.ajax(
    {
      url: url,
      method: "GET",
      data: {
        "author_list": "true"
      },
      success: function(dataSuccess) {
        printOptions(dataSuccess)
      },
      error: function(a, b, dataError) {
        alert("Error" + dataError);
      }
    }
  );
  //end Ajax
};
//Function end apiAuthorOptions

//Function printOptions
function printOptions(jsonArray) {
  for (var i = 0; i < jsonArray.length; i++) {
    thisAuthor = jsonArray[i];

    //Handlebars
    var source = $("#option_template").html();
    var template = Handlebars.compile(source);
    var context = thisAuthor;
    var html = template(context);

    //append Handlebars results
    $("#author_select").append(html);
  };
};
//end Function printOptions

});
//end Jquery
