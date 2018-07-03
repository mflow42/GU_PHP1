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

function makeText($val, $one, $two, $five)
{
    if ($val > 20) {
        $val %= 10;
    }
    if ($val >= 2 && $val <= 4) {
        return $two;
    } elseif ($val === 1) {
        return $one;
    } else {
        return $five;
    }
};

function getLitText($timeStamp = null)
{
    if ($timeStamp === null) {
        $timeStamp = time();
    }
    $hour = date("H", $timeStamp);
    $minutes = date("i", $timeStamp);
    $hourText = makeText($hour, "час", "часа", "часов");
    $minutesText = makeText($minutes, "минута", "минуты", "минут");

    return "{$hour} {$hourText} {$minutes} {$minutesText}";
}

?>
<p><b style='color:red'>Сейчас</b>: <?=getLitText()?></p>
<p>Если в параметре строка "00:00": <?=getLitText(mktime(00, 00))?></p>
<p>Если в параметре строка "01:01": <?=getLitText(mktime(01, 01))?></p>
<p>Если в параметре строка "02:02": <?=getLitText(mktime(02, 02))?></p>
<p>Если в параметре строка "06:06": <?=getLitText(mktime(06, 06))?></p>
<p>Если в параметре строка "11:11": <?=getLitText(mktime(11, 11))?></p>
<p>Если в параметре строка "12:12": <?=getLitText(mktime(12, 12))?></p>
<p>Если в параметре строка "16:16": <?=getLitText(mktime(16, 16))?></p>
<p>Если в параметре строка "20:20": <?=getLitText(mktime(20, 20))?></p>
<p>Если в параметре строка "21:21": <?=getLitText(mktime(21, 21))?></p>
<p>Если в параметре строка "21:21": <?=getLitText(mktime(22, 22))?></p>
<hr>