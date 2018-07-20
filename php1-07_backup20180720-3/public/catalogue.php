<?php
include_once __DIR__ . '/../config/cfg_main.php';
include_once  ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once  ENGINE_DIR . 'ngn_products.php';

$products = getAllProducts();
echo render('tpl_catalogue', ['products' => $products]);
