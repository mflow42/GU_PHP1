<?php
include __DIR__ . "/../config/cfg_main.php";
include ENGINE_DIR . "ngn_gallery.php";
include ENGINE_DIR . "kint.php";
include VENDOR_DIR . "vnd_funcImgResize.php";

$files = getFilesFromDb($conn);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'image') {
    uploadFileToFolder('img', UPLOADS_NORM_DIR, function($sourceDir, $sourceFile) {
        $source = $sourceDir . "/" . $sourceFile;
        img_resize($source, UPLOADS_MIN_DIR . $sourceFile, 200, 300);
    });
    uploadFileToDB($conn, 'img');
    redirect('/gallery.php');
};
?>

