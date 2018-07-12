<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.07.2018
 * Time: 0:00
 */

function getFilesInFolder($dir)
{
    $files = scandir($dir);
    foreach (
        $files as $key => $file) {
        if (is_dir($dir . "/" . $file)) {
            unset($files[$key]);
        }
    }
    return $files;
}

function getFilesInDB($conn) {
    $filesFromDB = mysqli_query($conn, "SELECT * FROM images ORDER BY visitedCount DESC");
//    foreach ($filesFromDB as $key => $value) {
//        !d($value['pathToNormal']);
//    };
    return $filesFromDB;
}

function uploadFile($uploadName, $destination, $callback = null)
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
function uploadFileIntoDB($conn, $destination, $uploadName) {
    $uploadFile = $_FILES[$uploadName];
    $uploadFileName = $uploadFile['name'];
    //апдейтим базу данных
    mysqli_query($conn, "INSERT INTO images (`name`, `pathToNormal`, `pathToThumbnail`, `size`, `visitedCount`) VALUES ('{$uploadFileName}', '/img/normal/{$uploadFileName}', '/img/thumbnail/{$uploadFileName}', '{$uploadFile['size']}', '0')");
    //перезагружаем страницу
    redirect('/');
}

