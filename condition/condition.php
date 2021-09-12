<?php

$a = 10;
$b = 20;

if($a == $b) {
    echo 'this is big';
}else if($a > $b) {
    echo 'this is small';
}else if($a < $b) {
    echo 'this is xtra-small';
}

echo '</br>';

$c = 25;
$d = 10;


if($c > $d) {
    
    if($c > $d) {
        echo 'this is small';
    }else if($c < $d) {
        echo 'this is xtra-small';
    }
}