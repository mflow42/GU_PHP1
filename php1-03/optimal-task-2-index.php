<?php
header("Content-Type: text/html; charset=utf-8");
$a = rand(-5, 5);
$b = rand(-5, 5);
$action = null;

function mult($a, $b)
{
    return $a * $b;
}

function div($a, $b)
{
    if ($b === 0) {
        return false;
    }
    return $a / $b;
}

function sum($a, $b)
{
    return $a + $b;
}

function subtr($a, $b)
{
    return $a - $b;
}

function makeMath($a, $b)
{
    global $action;
    if ($a >= 0 xor $b >= 0) {
        $action = "Числа с разным знаком - значит <b style='color:red'>сумма</b>!";
        return sum($a, $b);
    } elseif ($a >= 0) {
        $action = "Числа положительные - значит <b style='color:red'>разность</b>!";
        return subtr($a, $b);
    } else {
        $action = "Числа отрицательные - значит <b style='color:red'>умножение</b>!";
        return mult($a, $b);
    }
}

function mathOperation($arg1, $arg2, $operation)
{
    if (function_exists($operation)) {
        return $operation($arg1, $arg2);
    }
    return false;
}

?>
<p>A = <?=$a?>, а B = <?=$b?></p>
<p>Результат: <?=makeMath($a, $b)?></p>
<hr>
<p>Значит: <?=$action?></p>
<hr>
<p>Если ввести <b style='color:red'>сложение</b> "<?php echo "mathOperation(3, 6, 'sum')" ?>", то получится: <?=mathOperation(3, 6, 'sum')?></p>
<p>Если ввести <b style='color:red'>вычитание</b> "<?php echo "mathOperation(3, 6, 'subtr')" ?>", то получится: <?=mathOperation(3, 6, 'subtr')?></p>
<p>Если ввести <b style='color:red'>умножение</b> "<?php echo "mathOperation(3, 6, 'mult')" ?>", то получится: <?=mathOperation(3, 6, 'mult')?></p>
<p>Если ввести <b style='color:red'>деление</b> "<?php echo "mathOperation(3, 6, 'div')" ?>", то получится: <?=mathOperation(3, 6, 'div')?></p>
<hr>

<?php
function power($val, $pow)
{
    if ($pow) {
        return $val * power($val, $pow - 1);
    }
    return 1;
}

?>
<p>Если ввести "<?php echo "power(4, 3)" ?>", то получится: <?=power(4, 4)?></p>
<p>Если ввести "<?php echo "power(2, 6)" ?>", то получится: <?=power(2, 6)?></p>
<p>Если ввести "<?php echo "power(3, 3)" ?>", то получится: <?=power(3, 3)?></p>
<p>Если ввести "<?php echo "power(2, 3)" ?>", то получится: <?=power(2, 3)?></p>
<hr>

<?php

function showHourText($hour)
{
    $firstDigit = intval($hour[0]);
    $lastDigit = intval($hour[1]);

    if ($firstDigit !== 1 && $lastDigit >= 2 && $lastDigit <= 4) {
        return "часа";
    } elseif ($firstDigit === 1 || $lastDigit === 0 || $lastDigit >= 5) {
        return "часов";
    } else {
        return "час";
    }
};

function showMinutesText($minutes)
{
    $firstDigit = intval($minutes[0]);
    $lastDigit = intval($minutes[1]);

    if ($firstDigit !== 1 && $lastDigit >= 2 && $lastDigit <= 4) {
        return "минуты";
    } elseif ($firstDigit === 1 || $lastDigit === 0 || $lastDigit >= 5) {
        return "минут";
    } else {
        return "минута";
    }
};

function getTimeText($timeStamp = null)
{
    if ($timeStamp === null) {
        $timeStamp = time();
        $hour = date("H", $timeStamp);
        $minutes = date("i", $timeStamp);
    } else {
        $hour = substr($timeStamp, 0, 2);
        $minutes = substr($timeStamp, 3, 2);
    }
    $hourText = showHourText($hour);
    $minutesText = showMinutesText($minutes);
    return "{$hour} {$hourText} {$minutes} {$minutesText}";
}

?>
<p><b style='color:red'>Сейчас</b>: <?=getTimeText()?></p>
<p>Если в параметре строка "00:09": <?=getTimeText("00:00")?></p>
<p>Если в параметре строка "01:01": <?=getTimeText("01:01")?></p>
<p>Если в параметре строка "01:01": <?=getTimeText("02:02")?></p>
<p>Если в параметре строка "01:01": <?=getTimeText("06:06")?></p>
<p>Если в параметре строка "11:11": <?=getTimeText("11:11")?></p>
<p>Если в параметре строка "12:12": <?=getTimeText("12:12")?></p>
<p>Если в параметре строка "16:16": <?=getTimeText("16:16")?></p>
<p>Если в параметре строка "20:20": <?=getTimeText("20:20")?></p>
<p>Если в параметре строка "21:21": <?=getTimeText("21:21")?></p>
<p>Если в параметре строка "21:21": <?=getTimeText("22:22")?></p>
<hr>