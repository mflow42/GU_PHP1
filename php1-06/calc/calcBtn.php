<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 13.07.2018
 * Time: 22:33
 */
include 'kint.php';
include 'calcEngine.php';
$result = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn = $_POST;
    $a = $conn['value1'];
    $b = $conn['value2'];
    switch ($conn['operation']) {
        case '+':
            $result = sum($a, $b);
            break;
        case '-':
            $result = subtr($a, $b);
            break;
        case '*':
            $result = mult($a, $b);
            break;
        case '/':
            if ($b == 0) {
                $result = 'Деление на 0 запрещено';
                break;
            }
            $result = div($a, $b);
            break;
    }
}

include 'calcBtnTemplate.php';

?>
