<?php

include __DIR__ . '/../config/main.php';
include ENGINE_DIR . 'render.php';
require_once  ENGINE_DIR . 'db.php';
require_once  ENGINE_DIR . 'products.php';
include ENGINE_DIR . "kint.php";

$conn = getConnection();
$products = getAllProducts();


echo render('catalog', ['products' => $products], false);
