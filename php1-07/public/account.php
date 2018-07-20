<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 1:33
 */

header("Content-Type: text/html;charset=utf-8");
include_once __DIR__ . '/../config/cfg_main.php';
include_once ENGINE_DIR . 'ngn_render.php';
include_once ENGINE_DIR . 'ngn_db.php';
include_once ENGINE_DIR . 'ngn_route.php';
include_once ENGINE_DIR . 'ngn_users.php';

session_start();

$user = getUserById($_SESSION['user_id']);

echo render('tpl_account', ['user' => $user]);