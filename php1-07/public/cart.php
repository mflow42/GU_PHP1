<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 0:21
 */

header("Content-Type: text/html;charset=utf-8");

include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_products.php';
include_once ENGINE_DIR . 'ngn_route.php';

session_start();
$basket = [];
if (!empty($_SESSION['basket'])) {
    $productsIds = array_keys($_SESSION['basket']);
    $products = getProductsByIds($productsIds);
    foreach ($products as $product) {
        $basket[]= [
            'product' => $product,
            'count' => $_SESSION['basket'][$product['id']]
        ];
    }
}

echo render('tpl_cart', ['basket' => $basket]);