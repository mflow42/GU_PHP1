<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 20.07.2018
 * Time: 20:05
 */

function getUserByLoginPass() {
    return queryOne("SELECT * FROM users WHERE login = '{$login}' AND password = '{$pass}'");
};