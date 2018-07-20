<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.07.2018
 * Time: 19:33
 */
if (isset($_COOKIE['user_id'])) {
    echo "Полученные cookie уже существуют в локальной базе данных";
} else {
    setcookie('user_id', $userId, time() + 60 * 60 * 24 * 15);
}

var_dump($_COOKIE);