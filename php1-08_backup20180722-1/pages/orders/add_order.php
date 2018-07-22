<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 17:16
 */

session_start();

$date = date("d.m.Y H:i");
$userId = $_SESSION['user_id'];
$lastOrder = getLastOrder($userId);
$newOrderId = $lastOrder['order_id'] + 1;

foreach ($_SESSION['basket'] as $key => $value) {
    $product = $key;
    $qty = $value;
    
    execute("INSERT INTO orders (date, user_id, order_id, product, qty) VALUES ('{$date}', '{$userId}', '$newOrderId', '{$product}', '{$qty}')"
    );
};

$_SESSION['basket'] = [];

redirect('/orders');