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

