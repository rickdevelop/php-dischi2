<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>AJAX</title>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.1.2/handlebars.min.js" charset="utf-8"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="public/css/app.css">

  </head>

  <body>

    <div class="container">

      <div class="album_container">
      </div>
    </div>
    <script id="album-template" type="text/x-handlebars-template">
      <div class="album">
        <div class="album_img">
          <img src="{{copertina}}" alt="{{titolo}} - {{gruppo}}">
        </div>
        <h3>{{titolo}}</h3>
        <p>{{gruppo}}</p>
        <p>{{anno}}</p>
      </div>
    </script>

    <script src="public/js/app.js">
     

    </script>
  </body>
