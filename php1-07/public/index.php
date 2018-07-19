<?php
header("Content-Type: text/html;charset=utf-8");

include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once  ENGINE_DIR . 'ngn_db.php';
include_once  ENGINE_DIR . 'ngn_products.php';
//include_once ENGINE_DIR . "ngn_route.php";

//$conn = getConnection();
//$files = getFilesFromDB($conn);
$products = getAllProducts();
echo render('tpl_catalogue', ['products' => $products]);

//include 'gallery.php';
//include TEMPLATES_DIR . 'tpl_gallery.php';
//include TEMPLATES_DIR . 'tpl_upload_form.php';
//include TEMPLATES_DIR . 'tpl_get_photo_form.php';
//include 'goods.php';
//include TEMPLATES_DIR . "tpl_products.php";
//include 'comments.php';
//include TEMPLATES_DIR . "tpl_comments.php";
?>