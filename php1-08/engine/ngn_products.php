<?php

function getAllProducts() {
    return queryAll('SELECT * FROM products');
}

function getProductById($id) {
    return queryOne("SELECT * FROM products WHERE id = '{$id}'");
}

function getProductsByIds(array $ids) {
    $in = implode(', ', $ids);
    return queryAll("SELECT * FROM products WHERE id IN ({$in})");
}

function uploadFile($uploadFileFormat, $destination, $table) {
    uploadProdToFolder($uploadFileFormat, $destination);
    uploadProdToDB($uploadFileFormat, $table);
}

function uploadProdToFolder($uploadFileFormat, $destination) {
    $destinationFile = false;
    if (isset($_FILES[$uploadFileFormat])) {
        $uploadFile = $_FILES[$uploadFileFormat];
        $destinationFile = $destination . $uploadFile['name'];
        if ($uploadFile['size'] >= 200000) {
            echo "<h1 style='color:red'>Размер файла превышает 200кб.</h1>";
        } elseif ($uploadFile['type'] != 'image/jpeg') {
            echo "<h1 style='color:red'>Тип файла должен быть jpg, jpeg, png.</h1>";
        } else {
            move_uploaded_file($uploadFile['tmp_name'], $destinationFile);
        }
    }
    return $destinationFile;
}

function uploadProdToDB($uploadFileFormat, $table) {
    $uploadFile = $_FILES[$uploadFileFormat];
    if (isset($uploadFile)) {
        $productName = $_POST['name'];
        $productDescription = $_POST['description'];
        $uploadFileName = $uploadFile['name'];
        $productPrice = $_POST['price'];
        
        //апдейтим базу данных
        execute("INSERT INTO {$table} (name, description, imgPath, price)
                VALUES ('{$productName}', '{$productDescription}', '/img/products/{$uploadFileName}', '{$productPrice}')"
        );
    }
    
}
