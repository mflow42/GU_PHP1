<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 0:48
 */
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['id'];
    $productQty = $_POST['qty'] ?: 0;
    
    if (isset($_SESSION['basket'])) {
        $_SESSION['basket'][$productId] += (int) $productQty;
    } else {
        $_SESSION['basket'][$productId] = (int) $productQty;
    }
//    redirect($_SERVER['HTTP_REFERER']);
    echo json_encode(['success'=>'ok', 'message'=>'Товар добавлен в корзину']);
}
