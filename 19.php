<?php

/**
 * 19. Выведите результат сравнения $a и $b из п.17 с помощью var_dump.
 */

$a = '78';
$b = 78;
if ($a == $b) {
    echo 'равны';
} else {
    echo 'не равны';
}
echo '<br>';
var_dump($a == $b);