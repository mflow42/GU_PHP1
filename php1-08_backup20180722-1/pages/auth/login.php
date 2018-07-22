<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.07.2018
 * Time: 19:35
 */
header("Content-Type: text/html;charset=utf-8");
include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_autoload.php';

$message = '';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    session_start();
    $login = $_POST['login'];
    $pass = $_POST['password'];
    if ($user = getUserByLoginPass($login, $pass)) {
        $_SESSION['user_id'] = $user['id'];
        redirect('/account.php');
        exit;
    }
    $message = "Логин или пароль введен неверно.";
}

echo render('tpl_login', ['message' => $message]);