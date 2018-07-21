<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 0:21
 */
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