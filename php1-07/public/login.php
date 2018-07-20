<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.07.2018
 * Time: 19:35
 */
header("Content-Type: text/html;charset=utf-8");
include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_route.php';
include_once ENGINE_DIR . 'ngn_users.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if ($user = getUserByLoginPass($login, $pass)) {
        $_SESSION['user_id'] = $user['id'];
        redirect('/index.php');
        exit;
    }
    $message = "Логин или пароль введен неверно.";
}

echo render('tpl_login', ['message' => $message]);