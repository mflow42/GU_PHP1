<?php
include_once __DIR__ . '/../config/cfg_main.php';
require_once ENGINE_DIR . "ngn_render.php";
require_once ENGINE_DIR . "ngn_products.php";

$products = getAllProducts();
echo render('tpl_products', ['products' => $products]);
?>