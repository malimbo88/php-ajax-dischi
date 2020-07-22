<?php
include __DIR__ . "/database.php";
header("Content-Type: application/json");

//variabile che rappresenta il valore di "author" riportato nella query string
$author_query = $_GET["author"];
//variabile che rappresenta il valore di "author_list" riportato nella query string
$author_list_query = $_GET["author_list"];

//se il valore query string di "author_list" !NON e` vuoto
if ($author_list_query === "true") {
  $author_list_database = [];

  //ciclo database per cercare tutti gli array che rappresentano gli album
  foreach ($database as $album) {

    //se il valore della chiave author in array !NON e` gia` presente in array $author_list_database
    if (!in_array( $album["author"], $author_list_database)) {
      //aggiungo elemento ad array
      $author_list_database[] = [
        "author" => $album["author"],
      ];
    }
  }
  echo json_encode($author_list_database);
}


elseif (!empty($author_query)) {
  $author_search_database = [];
  //ciclo database per cercare un array con chiave author === al valore di query string
  foreach($database as $album) {
    //se il valore di author e` === a query string
    //aggiungo l'oggetto ad array $author_search_database
    if ($author_query === $album["author"]) {
      $author_search_database[] = $album;
      echo json_encode($author_search_database);
    }
  }
}


else {
  echo json_encode($database);
};
?>
