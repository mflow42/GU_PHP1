<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 0:48
 */
header("Content-Type: text/html;charset=utf-8");

include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_products.php';
include_once ENGINE_DIR . 'ngn_route.php';

session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productId = $_POST['id'];
    $productQty = $_POST['qty'] ?: 0;
    
    if (isset($_SESSION['basket'])) {
        $_SESSION['basket'][$productId] += (int) $productQty;
    } else {
        $_SESSION['basket'][$productId] = (int) $productQty;
    }
    redirect($_SERVER['HTTP_REFERER']);
}
