<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 12.07.2018
 * Time: 0:12
 */

function redirect($url) {
    echo "<script type='text/javascript'>window.open('{$url}', '_blank');</script>";
}