<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.07.2018
 * Time: 0:19
 */
include __DIR__ . "/../config/paths.php";
include VENDOR_DIR . "funcImgResize.php";
include ENGINE_DIR . "files.php";
include ENGINE_DIR . "route.php";
include ENGINE_DIR . "kint.php";

//$files = getFilesInFolder(UPLOADS_NORM_DIR);

if (!$conn) {
    $conn = mysqli_connect("localhost", "root", "", "php1-lesson5");
}

$files = getFilesInDB($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    uploadFile('img', UPLOADS_NORM_DIR, function ($sourceDir, $sourceFile) {
        $source = $sourceDir . "/" . $sourceFile;
        img_resize($source, UPLOADS_MIN_DIR . $sourceFile, 200, 300);

    });
    uploadFileIntoDB($conn, UPLOADS_NORM_DIR, 'img');
};


//да вроде и не нужно перезагружать страницу
//    redirect("/");


//$id = $_GET['id'];
//if ($id != "") {
//    $sql = "SELECT * FROM images WHERE id = {$id}";
//    $oneImage = mysqli_query($conn, $sql);
//    $oneImageUrl = mysqli_fetch_assoc($oneImage)['pathToNormal'];
//    redirect($oneImageUrl);
//
//}

//$res = mysqli_query($conn, "SELECT * FROM images ORDER BY visitedCount DESC");
//while($row = mysqli_fetch_assoc($res)) {
////    s($row);
//};


mysqli_close($conn);

include TEMPLATES_DIR . "gallery.php";
?>

<form action="" method="get">
    <input name="id" type="text"/>
    <input type="submit" value="Показать картинку"/>
</form>
