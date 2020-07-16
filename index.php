<?php
// Database
include __DIR__ . "/partials/database.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>php-ajax-dischi</title>
  </head>
  <body>

    <!-- general container -->
    <div class="general_container">

      <!-- Header -->
      <header>
      </header>
      <!-- end Header -->

      <!-- Main -->
      <main>

        <!-- wrapper main -->
        <div class="wrapper_main">

          <!-- section music -->
          <section class="section_music">
            <?php if (isset($database) && !empty($database)) {?>
              <!-- albums list -->
              <ul class="albums_list">

                <?php foreach ($database as $album_key => $album_values) {?>
                  <!-- single album <?php $album_values["title"] ?> -->
                  <li>

                    <!-- album box -->
                    <div class="album_box">

                      <!-- poster image -->
                      <div class="poster_img">
                        <img src="<?php echo $album_values["poster"]; ?>" alt="">
                      </div>
                      <!-- end poster image -->

                      <!-- album info -->
                      <div class="album_info">
                        <h4><?php echo $album_values["title"]; ?></h4>
                        <span><?php echo $album_values["author"]; ?></span>
                        <span><?php echo $album_values["year"]; ?></span>
                      </div>
                      <!-- album info -->

                    </div>
                  <!-- end album box -->

                  </li>
                <?php }; ?>

              </ul>
              <!-- end albums list <?php $album_values["title"] ?> -->
            <?php }; ?>
          </section>
          <!-- end section music -->

        </div>
        <!-- end wrapper main -->

      </main>
      <!-- end Main -->
    </div>
    <!-- end general container -->

  </body>
</html>
