<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.07.2018
 * Time: 1:14
 */

function getConnection()
{
    static $conn = null;
    if (!$conn) {
        $conn = mysqli_connect('localhost', 'root', '', 'php1-lesson6');
    }
    return $conn;
}

function queryAll($sql)
{
    return mysqli_fetch_all(execute($sql), MYSQLI_ASSOC);
}

function execute($sql)
{
    return mysqli_query(getConnection(), $sql);
}

function getComments($conn)
{
    $getComments = mysqli_query($conn, "SELECT * FROM comments ORDER BY id ASC");
    return $getComments;
}

function getGoods($conn)
{
    $getGoods = mysqli_query($conn, "SELECT * FROM goods ORDER BY id ASC");
    return $getGoods;
}