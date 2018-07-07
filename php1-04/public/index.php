<?php
header("Content-Type: text/html;charset=utf-8");
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "render.php";

?>

  <!DOCTYPE html>
  <html lang="ru">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="<?=STYLE_DIR?>style.css">
  </head>

  <body>
    <?php include TEMPLATES_DIR . "gallery.php";?>
  </body>

  </html>