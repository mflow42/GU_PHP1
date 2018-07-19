<?php
//header("Content-Type: text/html;charset=utf-8");

include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'render.php';
require_once  ENGINE_DIR . 'db.php';
require_once  ENGINE_DIR . 'products.php';
include ENGINE_DIR . "route.php";
include ENGINE_DIR . "kint.php";

$conn = getConnection();
$files = getFilesFromDB($conn);

include 'gallery.php';
include TEMPLATES_DIR . 'gallery.php';
include TEMPLATES_DIR . 'upload_form.php';
include TEMPLATES_DIR . 'get_photo_form.php';
include 'goods.php';
include TEMPLATES_DIR . "goods.php";
include 'comments.php';
include TEMPLATES_DIR . "comments.php";
?>