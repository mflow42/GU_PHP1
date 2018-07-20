<?php

include __DIR__ . "/../config/cfg_main.php";
include ENGINE_DIR . '/ngn_render.php';

if ($id = $_GET['id']) {
    $photo = queryOne("SELECT * FROM images WHERE id = {$id}");
//    var_dump($photo);
    $visitedCount = $photo['visitedCount'] + 1;
    execute("UPDATE images SET `visitedCount` = {$visitedCount} WHERE id = {$id}");
//    execute("UPDATE images SET `visitedCount` = `visitedCount + 1` WHERE id = {$id}");
    echo render('tpl_photo', [
        'path' => "{$photo['pathToNormal']}",
        'name' => "{$photo['name']}",
        'visitedCount' => "{$photo['visitedCount']}"]
    );
} else {
    echo render('tpl_photo_error');
}


?>
