<?php
include __DIR__ . "/../config/cfg_main.php";
include ENGINE_DIR . "ngn_db.php";
include ENGINE_DIR . "ngn_render.php";
include VENDOR_DIR . "vnd_funcImgResize.php";
include ENGINE_DIR . "ngn_route.php";
include ENGINE_DIR . "ngn_gallery.php";


$conn = getConnection();
$files = getGallery();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'image') {
    uploadFileToFolder('img', UPLOADS_NORM_DIR, function($sourceDir, $sourceFile) {
        $source = $sourceDir . "/" . $sourceFile;
        img_resize($source, UPLOADS_MIN_DIR . $sourceFile, 200, 300);
    });
};

include TEMPLATES_DIR . 'tpl_gallery.php';
include TEMPLATES_DIR . 'tpl_upload_form.php';
include TEMPLATES_DIR . 'tpl_get_photo_form.php';
?>

