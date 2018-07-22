<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.07.2018
 * Time: 12:33
 */

$id = (int)$_GET['id'];
execute("DELETE FROM `orders` WHERE `order_id`='{$id}'");
redirect('/orders');