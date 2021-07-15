<?php
//Task-1

function coube($a) {
    if (!is_numeric($a)) return 'Введено неверно число';
    return $a * $a * $a;
}

echo coube(3);

echo '<hr>';

//Task-2

function sum($a,$b) {
    if ((!is_numeric($a)) || (!is_numeric($b))) return 'Введено неверно число';
    return $a + $b;
}

echo sum(3,5);

echo '<hr>';

//Task-3

function getDay($a = 0) {
    if ((!is_numeric($a)) || ($a < 1) || ($a > 7)) return 'Введено неверно число';
    switch ($a) {
        case '1':
            return 'Понедельник';

        case '2':
            return 'Вторник';

        case '3':
            return 'Среда';

        case '4':
            return 'Четверг';

        case '5':
            return 'Пятница';

        case '6':
            return 'Суббота';

        case '7':
            return 'Воскресенье';
    }
}

echo getDay(6);

echo '<hr>';

//Task-4

function negativeOrPositive($a) {
    if (!is_numeric($a)) return 'Введено неверно число';
    if ($a >= 0) {
        return 'false';
    } else {
        return 'true';
    }
}

echo negativeOrPositive(9);

echo '<hr>';

//Task-5

function getDigitsSum($a) {
    if (!is_numeric($a)) return 'Введено неверно число';
    $a = (string)$a;
    $sum = 0;
    for ($i = 0; $i < strlen($a); $i++) {
        $sum += ($a[$i]);
    }
    return $sum;
}

echo getDigitsSum(123);

echo '<hr>';

//Task-6

function getYearSum($a = 1,$b = 2021) {
    if ((!is_numeric($a)) || (!is_numeric($b))) return 'Введено неверно число';
    for ($a;$a <> $b;$a++) {
        $yearSum = getDigitsSum($a);
        if ($yearSum === 13) {
            echo "$a ";
        }
    }
}

getYearSum(1,2021);

echo '<hr>';

//Task-7

function isEven($a) {
    if (!is_numeric($a)) return 'Введено неверно число';
    if (($a % 2) === 0) {
        return 'true';
    } else {
        return 'false';
    }
}

echo isEven(-10);

echo '<hr>';

//Task-8

function translit($text_for_translit){
    $arr_rus=['а','б','в','г','д','е','ё','ж','з','и','й','к','л','м','н','о','п','р','с','т','у','ф','х','ц','ч','ш','щ','ь','ы','ъ','э','ю','я'];
    $arr_lat=['a','b','v','g','d','e','jo','zh','z','i','j','k','l','m','n','o','p','r','s','t','u','f','h','cz','ch','sh','shh','`','y','``','e`','yu','ya'];
    $arr_translit = array_combine($arr_rus,$arr_lat); // создаем таблицу транлитерации. В этом случае, ключи и значения могут иметь любую длину, за исключением того, что ключи не должны быть пустыми. Кроме того, длина возвращаемого значения может отличаться от string. Однако, стоит учесть тот факт, что эта функция максимально эффективна в том случае, если все ключи имеют одинаковый размер.
    $text_for_translit = mb_strtolower($text_for_translit);
    $translit_1=strtr($text_for_translit, $arr_translit); // транслитерация. Преобразует заданные символы или заменяет подстроки
    return $translit_1;
}

echo translit('Привет Мир!');

echo '<hr>';

//Task-9

function getSingularPular($a,$b,$c,$d) {
    if (!is_numeric($a)) return 'Введено неверно число';
    if ($a <= 0) return $a . ' Яблок нет ';
    if (($a == 11) || ($a == 12) || ($a == 13) || ($a == 14)) return $a . ' ' . $d;
    $aToStr = (string)$a;
    $strLastItem = $aToStr[strlen($aToStr)-1];
    switch ($strLastItem) {
        case '1':
            return $a . ' ' . $b;
        case '2':
        case '3':
        case '4':
            return $a . ' ' . $c;
        default:
            return $a . ' ' .$d;
    }
}

echo getSingularPular(22,'Яблоко','Яблока','Яблок');

echo '<hr>';

//Task-10

function getArrRec($a,$b) {
    static $i = 0;
    if ($b == 0) return;
    echo $a[$i] . ' ';
    $i++;
    getArrRec($a,$b-1);
}
$arr = [10,20,30,40,50,60,70,80,1,2,3,4,5,65,7];

getArrRec($arr,count($arr));

echo '<hr>';

//Task-11

function sumNumber($a) {
    $a = (string)$a;
    $sum = 0;
    for ($i = 0; $i < strlen($a); $i++) {
        $sum += +($a[$i]);
    }
    echo $sum . ' ';
    if ($sum > 9) {
        sumNumber($sum);
    }
}

sumNumber(999999999999999);

echo '<hr>';

//Task-12

function getSpeed($a,$b) {
    $speedKm = $a / ($b / 60); //получаем скорость в км/ч
    $speedM = $speedKm / 3.6; // получаем скорость в м/с;
    $speedM = intval($speedM*100)/100; // округляем скорость в м/с
    return "Пройденный путь $a км за $b минут. Скорость движения в км/ч : $speedKm, скорость движения в м/с : $speedM";
}

echo getSpeed(100,30); // Задаюется пройденный путь в км и время в минутах в пути

echo '<hr>';

//Task-13

function comparisonWords($a,$b) {
    if (strlen($b) > strlen($a)) return 'Составить слово нельзя';

    for ($i = 0; $i < strlen($a); $i++) {

        for ($j = 0; $j < strlen($b); $j++) {
            //Если есть элемент, удаляем со сторой строки его
            if (($a[$i]) === ($b[$j])) {
                $b = substr_replace($b,'',$j,1);
                var_dump($b);
                break;
            }

        }

        if(strlen($b) === 0) break;
    }
    if (strlen($b) === 0) {
        return 'Составить слово можно';
    } else {
        return 'Составить слово нельзя';
    }
}

echo comparisonWords('abcde','asdasd');

echo '<hr>';

//Task-14

function polidrom($a) {
    if ($a < 10) return 'Число не может быть полиндромом';
    $a = (string)$a;
    //Идем по циклу до половины длины ( с округлением в меньшкую сторону)
    for ($i = 0; $i < round(strlen($a)/2,0,PHP_ROUND_HALF_DOWN); $i++) {
        if ($a[$i] != $a[strlen($a) - $i - 1]) return 'Число не полиндром';
    }
    return 'Число полиндром';
}

echo polidrom(2111112);

echo '<hr>';

//Task - 15

$cols = 10;
$rows = 10;
$number = 0;
$number2 = 0;

echo "<table border=\"1\">";

for ($r = 0; $r <= $rows; $r++){
    echo('<tr>');
    if ($r == 0) {
        for ($i = 0; $i < $rows; $i++) {
            echo('<th>' .$number2++.'</th>');
        }
    }
    for ($c = 0; $c <= $cols; $c++){
        if ($c == 0) {
            echo('<th>' .$number++.'</th>');
        } else if ($r != 0) {
            echo( '<td>' .$c*$r.'</td>');
        }
    }
    echo('</tr>');
}

echo "</table>";

echo '<hr>';

//Task-16

function moreLongWord($a) {
    //Разбиваем строку на массив с разделителем " "
    $arrWord = explode(" ", $a);
    $indexMaxL = 0;
    //Ищем индекс самого большого слова
    for ($i = 0; $i < count($arrWord) - 1; $i++) {
        if (strlen($arrWord[$indexMaxL]) < strlen($arrWord[$i + 1])) {
            $indexMaxL = $i + 1;
        }
    }
    return $arrWord[$indexMaxL];
}

echo moreLongWord('as as w asdasdasdasda as asd asdf asdfg asdfgh asdfghj asdasdasdasdasdas123');

echo '<hr>';

//Task-17

function sumOne($a) {
    $endSum = 0;
   for ($i = 1; $i <= $a; $i++) {
       //Преобразуем число в строку
       $strA = (string)$i;
       //Проверяем есть ли "1" в нашей строке
       if (stristr($strA,'1')) {
           //Разбиваем строку поэлементно в массив
           $arr1 = str_split($strA);
           //Проверяем массив на наши "1"
           for ($j = 0; $j < count($arr1); $j++) {
               if ($arr1[$j] == '1') $endSum++;
           }
       }
   }
   return $endSum;
}

echo sumOne(100);

echo '<hr>';

//Task-18

function splitStr ($a,$b) {
    while (strlen($a) >= $b) {
        //проверка на пробел
        if ($a[0] == ' ') {
            $a = substr($a,1,strlen($a));
            continue;
        }
        //вырезаем подстроку с заданной длиной
        $s = mb_strcut($a,0,$b);
        //удаляем подстроку заданной длины из нашей строки
        $a = substr($a,$b,strlen($a));
        echo '<br />' . $s;
    }
}

splitStr('ssss s s ss  ssssss ssssss ssssss', 2);