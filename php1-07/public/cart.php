<?php
include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_render.php';
require_once  ENGINE_DIR . 'ngn_db.php';
require_once  ENGINE_DIR . 'ngn_products.php';
include ENGINE_DIR . "kint.php";

$id = (int) $_GET['id'];
$product = getProductById($id);

echo render('cart', ['product' => $product]);