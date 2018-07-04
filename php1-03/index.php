<?php
header("Content-Type: text/html;charset=utf-8");
echo "1. Числа от 0 до 100, которые делятся на 3 без остатка: </br></br>";
$i = 0;
while ($i < 100) {
    if ($i % 3 === 0) {
        echo "{$i} ";
    }
    $i++;
}
unset($i);
echo "<hr><br>";

echo "2. Функция для вывода чисел от 0 до 10: </br></br>";
function evenOrOdd($min, $max)
{
    $i = $min;
    do {
        if ($i === 0) {
            echo "{$i} - это ноль</br>";
        } elseif ($i % 2) {
            echo "{$i} - нечетное число</br>";
        } else {
            echo "{$i} - четное число</br>";
        }
        $i++;
    } while ($i < $max);
};
evenOrOdd(0, 10);
echo "<hr><br>";

echo "3. Вывести в цикле значения массива: </br></br>";
$arr = [
    'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
    'Ленинградская область' => ['Всеволожск', 'Павловск', 'Кронштадт'],
    'Рязанская область' => ['Касимов', 'Рязань', 'Сасово', 'Скопин'],
];

function filterInput(&$res, &$anotherValue, &$input)
{
    //сделали значение такой же длины как и буквы для фильтрации
    $str = substr($anotherValue, 0, strlen($input));
    //привели значение к нижнему регистру спец конструкцией для кириллицы
    $str = mb_convert_case($str, MB_CASE_LOWER, "UTF-8");
    if ($str === $input) {
        //если значение равно эталону то записываем результат
        return $anotherValue;
    }
}

function handleArray(&$res, $value, &$input)
{
    $numItems = count($value);
    $i = 0;
    $arrTmp = array();
    foreach ($value as $anotherKey => $anotherValue) {
        $filtered = filterInput($res, $anotherValue, $input);
        //если не последний элемент, то поставить после него запятую
        if ($filtered !== null) {
            array_push($arrTmp, $filtered);
        }
    }
    unset($i);
    // var_dump($arrTmp);
    //склеим массивы и добавим их в переменную результата
    $res .= join(", ", $arrTmp);
    //а после добавим перенос строки
    $res .= "</br>";
    return $res;
}

function showCities($arr, $input = null)
{
    $res = "";
    foreach ($arr as $key => $value) {
        $res .= "{$key}: </br>";
        if (is_array($value)) {
            handleArray($res, $value, $input);
        }
    }
    return $res;
}

echo showCities($arr, "");
echo "<hr><br>";

echo "4. Написать функцию транслитерации строк: </br></br>";
$ruleRuEng = [
    'А' => 'A',
    'а' => 'a',
    'Б' => 'B',
    'б' => 'b',
    'В' => 'V',
    'в' => 'v',
    'Г' => 'G',
    'г' => 'g',
    'Д' => 'D',
    'д' => 'd',
    'Е' => 'E',
    'е' => 'e',
    'Ё' => 'Yo',
    'ё' => 'yo',
    'Ж' => 'Zh',
    'ж' => 'zh',
    'З' => 'Z',
    'з' => 'z',
    'И' => 'I',
    'и' => 'i',
    'Й' => 'Y',
    'й' => 'y',
    'К' => 'K',
    'к' => 'k',
    'Л' => 'L',
    'л' => 'l',
    'М' => 'M',
    'м' => 'm',
    'Н' => 'N',
    'н' => 'n',
    'О' => 'O',
    'о' => 'o',
    'П' => 'P',
    'п' => 'p',
    'Р' => 'R',
    'р' => 'r',
    'С' => 'S',
    'с' => 's',
    'Т' => 'T',
    'т' => 't',
    'У' => 'U',
    'у' => 'u',
    'Ф' => 'F',
    'ф' => 'f',
    'Х' => 'Kh',
    'х' => 'kh',
    'Ц' => 'Ts',
    'ц' => 'ts',
    'Ч' => 'Ch',
    'ч' => 'ch',
    'Ш' => 'Sh',
    'ш' => 'sh',
    'Щ' => 'Scsh',
    'щ' => 'scsh',
    'Ъ' => '\'\'',
    'ъ' => '\'\'',
    'Ы' => 'Y',
    'ы' => 'y',
    'Ь' => '\'',
    'ь' => '\'',
    'Э' => 'E',
    'э' => 'e',
    'Ю' => 'Yu',
    'ю' => 'yu',
    'Я' => 'Ya',
    'я' => 'ya',
];

function translit($string, $translitRule)
{
    return strtr($string, $translitRule);
}
echo translit("Когда в доме тепло, ящерицы ягоды, Цапли объединяться!", $ruleRuEng);
echo "<hr><br>";

echo "5. Заменяет в строке пробелы на подчеркивания";
echo "<br><br>";
function change($what, $to, $str)
{
    return str_replace($what, $to, $str);
}
echo change(" ", "_", "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has");
echo "<hr><br>";

echo "7. *Вывести с помощью цикла for числа от 0 до 9, не используя тело цикла";
echo "<br>";
for ($i = 0; $i < 10;print $i, $i++) {
    // здесь пусто
}
unset($i);
echo "<br>";
for ($i = 0; $i < 10;print $i++) {
    // здесь пусто
}
unset($i);

echo "<hr><br>";
echo "8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».";
echo "<br><br>";
echo showCities($arr, "к");

echo "<hr><br>";
echo "9. *Конструировании url-адресов на основе названия статьи в блогах";
echo "<br><br>";

function getUrl($str, $ruleRuEng) {
    $str = translit($str, $ruleRuEng);
    $str = change(" ", "_", $str);
    return $str;
}

echo getUrl("Московские квартиры оборудованы потайным ходом в метро.", $ruleRuEng);