<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 21.07.2018
 * Time: 3:15
 */
$products = getAllProducts();

echo render('tpl_catalogue', ['products' => $products]);
