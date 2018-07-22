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

//if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'comment') {
//    $name = $_POST['name'];
//    $content = $_POST['content'];
//    execute("INSERT INTO comments (name, content) VALUES ('{$name}', '{$content}')");
//}
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//    $productId = $_POST['id'];
//    $productQty = $_POST['qty'] ?: 0;
//
//    if (isset($_SESSION['basket'])) {
//        $_SESSION['basket'][$productId] += (int) $productQty;
//    } else {
//        $_SESSION['basket'][$productId] = (int) $productQty;
//    }
////    redirect($_SERVER['HTTP_REFERER']);
//    echo json_encode(['success'=>'ok', 'message'=>'Товар добавлен в корзину']);
}

echo render('tpl_cart', ['basket' => $basket]);