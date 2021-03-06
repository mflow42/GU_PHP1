<?php
include __DIR__ . '/../config/cfg_main.php';


function getConnection()
{
    $config = include CONFIG_DIR . "cfg_db.php";
    static $conn = null;
    if (!$conn) {
        $conn = mysqli_connect('localhost', 'root', $config['password'], $config['dbName']
//            $config['server'], $config['login'], $config['password'], $config['dbName']
        );
    }
    return $conn;
}

function execute($sql)
{
    return mysqli_query(getConnection(), $sql);
}

function queryAll($sql)
{
    $res = execute($sql);
    return mysqli_fetch_all($res, MYSQLI_ASSOC);
}

function queryOne($sql)
{
    return queryAll($sql)[0];
}

function closeConnection()
{
    mysqli_close(getConnection());
}