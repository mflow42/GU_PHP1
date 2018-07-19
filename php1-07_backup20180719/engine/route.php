<?php

function redirect($url) {
    echo "<script type='text/javascript'>window.open('{$url}', '_blank');</script>";
}

