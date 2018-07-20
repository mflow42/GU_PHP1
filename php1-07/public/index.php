<?php
header("Content-Type: text/html;charset=utf-8");

include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_products.php';
include_once ENGINE_DIR . 'ngn_route.php';
include_once ENGINE_DIR . 'ngn_users.php';

session_start();
$userId = $_SESSION['user_id'] ?? null;

if ($user = getUserById($userId)) {
//    $products = getAllProducts();
    redirect('/account.php');
} else {
    redirect('/login.php');
}

?>