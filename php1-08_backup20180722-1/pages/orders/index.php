<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 21:01
 */

session_start();

$userId = $_SESSION['user_id'];
$orders = getAllUniqueOrders($userId);

echo render('tpl_orders', ['orders' => $orders]);