<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.07.2018
 * Time: 15:17
 */

$id = (int)$_GET['id'];
$product = getProductById($id);
$productFilePath = $product['imgPath'];
$productFullFilePath = $_SERVER["DOCUMENT_ROOT"] . $productFilePath;

execute("DELETE FROM `products` WHERE `id`='{$id}'");
unlink($productFullFilePath);

redirect('/');