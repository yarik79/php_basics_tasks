<?php

/**
 * 10. С помощью конструкции switch выведите фразу: "Это рабочий день",
 * если значение переменной day попадает в диапазон чисел от 1 до 5 (включительно).
 */

$day = 3;
switch ($day){
    case 1:
        echo "Это рабочий день";
        break;
    case 2:
        echo "Это рабочий день";
        break;
    case 3:
        echo "Это рабочий день";
        break;
    case 4:
        echo "Это рабочий день";
        break;
    case 5:
        echo "Это рабочий день";
        break;
}

/*
или так

$day = 3;
switch ($day) {
    case 0:
        echo "";
        break;
    case ($day >= 1) && ($day <= 5):
        echo 'Это рабочий день';
        break;
}
*/