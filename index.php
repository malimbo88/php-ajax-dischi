<?php
// Database
include __DIR__ . "/partials_php/database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dist/style.css">
  </head>
  <body>

    <!-- general container -->
    <div class="general_container">

      <?php include __DIR__ . "/partials_php/header.php"; ?>

      <?php include __DIR__ . "/partials_php/main.php"; ?>

    </div>
    <!-- end general container -->

    <!-- Handlebars album template-->
    <script id="album_template" type="text/x-handlebars-template">

      <!-- single album -->
      <li class="album">

        <!-- album box -->
        <div class="album_box">

          <!-- poster image -->
          <div class="poster_img">
            <img src="{{poster}}" alt="{{title}} poster">
          </div>
          <!-- end poster image -->

          <!-- album info -->
          <div class="album_info">
            <h4>{{title}}</h4>
            <span>{{author}}</span>
            <span>{{year}}</span>
          </div>
          <!-- album info -->

        </div>
      <!-- end album box -->

      </li>
      <!-- end single album -->

    </script>
    <!-- end Handlebars album template-->

    <!-- Handlebars option template-->
    <script id="option_template" type="text/x-handlebars-template">

      <!-- single option -->
      <option value="{{author}}">{{author}}</option>
      <!-- end single option -->

    </script>
    <!-- end Handlebars option template-->

    <!-- javaScript -->
    <script type="text/javascript" src="dist/script.js"></script>
  </body>
</html>
