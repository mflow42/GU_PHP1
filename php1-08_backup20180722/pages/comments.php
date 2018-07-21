<?php
include __DIR__ . '/../config/cfg_main.php';
include ENGINE_DIR . 'ngn_autoload.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST' && $_POST['upload'] == 'comment') {
    $name = $_POST['name'];
    $content = $_POST['content'];
    execute("INSERT INTO comments (name, content) VALUES ('{$name}', '{$content}')");
}
$comments = getComments($conn);
?>