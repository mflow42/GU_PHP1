<?php
header("Content-Type: text/html;charset=utf-8");

include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'render.php';
require_once  ENGINE_DIR . 'db.php';
require_once  ENGINE_DIR . 'products.php';
include ENGINE_DIR . "route.php";
include ENGINE_DIR . "kint.php";

$conn = getConnection();
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
<?php include 'gallery.php'; ?>
<?php include TEMPLATES_DIR . 'gallery.php'; ?>
<?php include TEMPLATES_DIR . 'upload_form.php'; ?>
<?php include TEMPLATES_DIR . 'get_photo_form.php'; ?>
<?php include 'goods.php'; ?>
<?php include TEMPLATES_DIR . "goods.php"; ?>
<?php include 'comments.php'; ?>
<?php include TEMPLATES_DIR . "comments.php"; ?>

<?php //render('catalog', ['products' => $products]); ?>

</body>
</html>