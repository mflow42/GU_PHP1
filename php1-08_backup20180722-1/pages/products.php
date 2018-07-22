<?php
include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_autoload.php';

$products = getAllProducts();
echo render('tpl_products', ['products' => $products]);
?>