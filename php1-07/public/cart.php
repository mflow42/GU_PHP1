<?php
include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'render.php';
require_once  ENGINE_DIR . 'db.php';
require_once  ENGINE_DIR . 'products.php';
include ENGINE_DIR . "kint.php";

$id = (int) $_GET['id'];
$product = getProductById($id);

echo render('cart', ['product' => $product]);