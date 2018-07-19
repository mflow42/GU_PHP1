<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.07.2018
 * Time: 23:10
 */
?>
<form action="calcInput.php" method="POST">
    <input name="value1" type="text" placeholder="Число 1">
    <input name="value2" type="text" placeholder="Число 2">
    <select name="select" id="select">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
    <input name="result" type="submit" value="Вычислить">
</form>
<p id="result"><?=$result?></p>