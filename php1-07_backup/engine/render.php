<?php

function getConnection()
{
    include CONFIG_DIR . 'db.php';
    static $conn = null;
    if (!$conn) {
        $conn = mysqli_connect($config['server'], $config['login'], $config['password'], $config['db']);
    }
    return $conn;
}

function queryAll($sql)
{
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function execute($sql)
{
    return mysqli_query(getConnection(), $sql);
}


function getComments($conn)
{
    $getComments = mysqli_query($conn, "SELECT * FROM comments ORDER BY id ASC");
    return $getComments;
}

function getGoods($conn)
{
    $getGoods = mysqli_query($conn, "SELECT * FROM goods ORDER BY id ASC");
    return $getGoods;
}

function getFilesFromDB($conn)
{
    $filesFromDB = mysqli_query($conn, "SELECT * FROM images ORDER BY visitedCount DESC");
    return $filesFromDB;
}

function uploadFileToFolder($uploadName, $destination, $callback = null)
{
    $destinationFile = false;
    if (isset($_FILES[$uploadName])) {
        $uploadFile = $_FILES[$uploadName];
        $destinationFile = $destination . $uploadFile['name'];
        if ($uploadFile['size'] >= 200000) {
            echo "<h1 style='color:red'>Размер файла превышает 200кб.</h1>";
        } elseif ($uploadFile['type'] != 'image/jpeg') {
            echo "<h1 style='color:red'>Тип файла должен быть jpg, jpeg, png.</h1>";
        } else {
            move_uploaded_file(
                $uploadFile['tmp_name'], $destinationFile
            );
            if ($callback) {
                $callback($destination, $uploadFile['name']);
            }
        }
    }
    return $destinationFile;
}

function uploadFileToDB($conn, $uploadName)
{
    $uploadFile = $_FILES[$uploadName];
    $uploadFileName = $uploadFile['name'];
    //апдейтим базу данных
    mysqli_query($conn, "INSERT INTO images (`name`, `pathToNormal`, `pathToThumbnail`, `size`, `visitedCount`) VALUES ('{$uploadFileName}', '/img/normal/{$uploadFileName}', '/img/thumbnail/{$uploadFileName}', '{$uploadFile['size']}', '0')");
    //перезагружаем страницу
//    redirect('/');
}



