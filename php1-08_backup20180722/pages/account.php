<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 1:33
 */
header("Content-Type: text/html;charset=utf-8");
include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_autoload.php';

session_start();
$user = getUserById($_SESSION['user_id']);

echo render('tpl_account', ['user' => $user]);