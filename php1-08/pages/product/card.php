<?php
//include __DIR__ . '/../config/cfg_main.php';
//include ENGINE_DIR . 'ngn_autoload.php';

$id = (int)$_GET['id'];
$product = getProductById($id);

echo render('tpl_product', ['product' => $product]);