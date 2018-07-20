<?php
include_once __DIR__ . '/../config/cfg_main.php';
include_once  ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once  ENGINE_DIR . 'ngn_products.php';

session_start();
//
//if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $productId = $_POST['id'];
//    $productQty = $_POST['qty'] ?: 0;
//    var_dump($_POST);
//    if (isset($_SESSION['basket'])) {
//        $_SESSION['basket'][$productId] += (int) $productQty;
//    } else {
//        $_SESSION['basket'][$productId] = (int) $productQty;
//    }
////    redirect($_SERVER['HTTP_REFERER']);
//}


$products = getAllProducts();

//var_dump($_SESSION);
//var_dump($_SERVER);

echo render('tpl_catalogue', ['products' => $products]);
