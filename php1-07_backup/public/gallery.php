<?php
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "gallery.php";
include ENGINE_DIR . "kint.php";
include VENDOR_DIR . "funcImgResize.php";

$files = getFilesFromDb($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'image') {
    uploadFileToFolder('img', UPLOADS_NORM_DIR, function ($sourceDir, $sourceFile) {
        $source = $sourceDir . "/" . $sourceFile;
        img_resize($source, UPLOADS_MIN_DIR . $sourceFile, 200, 300);
    });
    uploadFileToDB($conn,'img');
    redirect('/gallery.php');
};
?>

