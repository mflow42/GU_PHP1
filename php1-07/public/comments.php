<?php
include_once __DIR__ . '/../config/cfg_main.php';
require_once ENGINE_DIR . "ngn_render.php";


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'comment') {
    $name = $_POST['name'];
    $content = $_POST['content'];
    execute("INSERT INTO comments (name, content) VALUES ('{$name}', '{$content}')");
}
$comments = getComments($conn);
?>