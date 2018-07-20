<?php
//header("Content-Type: text/html;charset=utf-8");

include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_render.php';
require_once  ENGINE_DIR . 'ngn_db.php';
require_once  ENGINE_DIR . 'ngn_products.php';
include ENGINE_DIR . "ngn_route.php";
include ENGINE_DIR . "kint.php";

var_dump($files);
$conn = getConnection();
$files = getFilesFromDB($conn);
include 'gallery.php';
include TEMPLATES_DIR . 'tpl_gallery.php';
include TEMPLATES_DIR . 'tpl_upload_form.php';
include TEMPLATES_DIR . 'tpl_get_photo_form.php';
include 'goods.php';
include TEMPLATES_DIR . "tpl_goods.php";
include 'comments.php';
include TEMPLATES_DIR . "tpl_comments.php";
?>