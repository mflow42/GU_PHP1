<?php
include_once __DIR__ . '/../config/main.php';
require_once ENGINE_DIR . "render.php";
require_once ENGINE_DIR . "kint.php";
$goods = getFilesFromDB($conn);
?>