<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 14.07.2018
 * Time: 23:10
 */
?>
<form action="calcBtn.php" method="POST">
    <input name="value1" type="text" placeholder="Число 1">
    <input name="value2" type="text" placeholder="Число 2">
    <input name="operation" type="submit" value="+">
    <input name="operation" type="submit" value="-">
    <input name="operation" type="submit" value="*">
    <input name="operation" type="submit" value="/">
</form>
<p id="result"><?=$result?></p>