<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.07.2018
 * Time: 4:45
 */
include __DIR__ . "/../config/paths.php";
include ENGINE_DIR . "route.php";
include ENGINE_DIR . "kint.php";

if (!$conn) {
    $conn = mysqli_connect("localhost", "root", "", "php1-lesson5");
};

$id = $_GET['id'];
$sql = "SELECT * FROM images WHERE id = {$id}";
$oneImage = mysqli_query($conn, $sql);
$oneImageUrl = mysqli_fetch_assoc($oneImage)['pathToNormal'];
$oneImageVisitedNumber = mysqli_fetch_assoc($oneImage)['visitedCount'];
$oneImageVisitedNumber++;
mysqli_query($conn, "UPDATE `images` SET `visitedCount`={$oneImageVisitedNumber} WHERE `id`={$id}");
echo "<script type='text/javascript'>window.open('{$oneImageUrl}', '_self');</script>";