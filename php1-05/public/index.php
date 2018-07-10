<?php
header("Content-Type: text/html;charset=utf-8");
include __DIR__ . "/../config/main.php";
include ENGINE_DIR . "render.php";
?>


<body>
<?php include TEMPLATES_DIR . "gallery.php"; ?>
</body>


</html>