<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 19:38
 */

function getAllOrders() {
    return queryAll('SELECT * FROM orders');
}

function getAllUniqueOrders($userId) {
    return queryAll("SELECT DISTINCT `date`, order_id FROM orders ");
}

function getOrderById($id) {
    return queryOne("SELECT * FROM orders WHERE order_id = '{$id}'");
}

function getLastOrder($userId) {
    return queryOne("SELECT * FROM orders WHERE user_id = '{$userId}' ORDER BY order_id DESC");
}

function getFullOrderInfo($orderId) {
    return queryAll("SELECT * FROM orders, products WHERE order_id = '{$orderId}' AND product = products.id");
}

