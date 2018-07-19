<?php

include __DIR__ . "/../config/main.php";
include ENGINE_DIR . 'render.php';
include ENGINE_DIR . "kint.php";

$conn = getConnection();

if ($id = $_GET['id']) {
    $sql = "SELECT * FROM images WHERE id = {$id}";
    $oneImageSql = mysqli_query($conn, $sql);
    $oneImage = mysqli_fetch_assoc($oneImageSql);

    $oneImageName = $oneImage['name'];
    $oneImageUrl = $oneImage['pathToNormal'];
    $oneImageVisitedNumber = $oneImage['visitedCount'];
    $oneImageVisitedNumber++;
    mysqli_query($conn, "UPDATE `images` SET `visitedCount`={$oneImageVisitedNumber} WHERE `id`={$id}");
    include TEMPLATES_DIR . 'photo.php';
} else {
    include TEMPLATES_DIR . 'photo-error.php';
}




?>
