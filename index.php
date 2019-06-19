<?php include 'data.php'; ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>PHP-album</title>
    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="public/css/app.css">
  </head>
  <body>
    <div class="container">

      <div class="album_container">

        <?php

        foreach ($db as $value) { ?>
          <div class="album">

            <div class="album_img">

              <img src="<?php echo $value['copertina']; ?>" alt="<?php echo $value['titolo'].' - '.$value['gruppo'] ?>">

            </div>

            <h4><?php echo $value['titolo']; ?></h4>

            <p><?php echo $value['gruppo']; ?></p>

            <p><?php echo $value['anno']; ?></p>







          </div>

        <?php } ?>

      </div>

    </div>

  </body>

</html>
