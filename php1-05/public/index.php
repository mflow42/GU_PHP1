<?php
header("Content-Type: text/html;charset=utf-8");
include __DIR__ . "/../config/paths.php";
include ENGINE_DIR . "kint.php";

/*if (!$conn) {
    $conn = mysqli_connect("localhost", "root", "", "php1-lesson5");
}
$res = mysqli_query($conn, "CREATE TABLE `images`
    (`id` INT(50) NOT NULL AUTO_INCREMENT,
    `pathToNormal` char(50) not null DEFAULT '0',
    `pathToThumbnail` char(50) not null DEFAULT '0',
    `visitedCount` INT not null DEFAULT '0',
    PRIMARY KEY (`id`))"
);*/

?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
<?php include "gallery.php"; ?>
</body>


</html>