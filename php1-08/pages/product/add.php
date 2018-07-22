<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 22.07.2018
 * Time: 13:01
 */


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $productName = $_POST['name'];
    $productDescription = $_POST['description'];
    $productPrice = $_POST['price'];
    uploadFile('image', UPLOADS_PRODUCTS_DIR, 'products');
    redirect($_SERVER['HTTP_REFERER']);
}