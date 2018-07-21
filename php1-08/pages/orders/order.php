<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 23:24
 */

$id = (int)$_GET['id'];
$orderFullInfo = getFullOrderInfo($id);

echo render('tpl_order', ['order' => $orderFullInfo]);

