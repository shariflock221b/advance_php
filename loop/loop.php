<?php

// $num = 1;

// while ($num < 10) {
//     echo $num;
//     echo '</br>';
//     $num++;
// }

// $a = 1;

// while ($a <= 20) {
//     if($a % 2 == 0 && $a % 5 == 5 ) {
//         echo $a;
//         echo PHP_EOL;
//     }

//     $a++;
// }

$b = 100;

// do {
//     echo $b;
//     $b++;

// }while($b < 10);

// for ($num = 1; $num <br 10; $num++) :

//     echo $num;
//     echo "\n";

// endfor;


// $name = [
//     "name" => "sharif",
//     "age" => "25",
//     "hairColor" => "white",
// ];

// foreach ($name as $key => $value) {
//     echo $key. ' = ' .$value;
//     echo '</br>';
// }


// for ($i =1; $i < 10; $i++){
//     for($j = 0; $j < $i; $j++){
//         echo '*';
//     }
//     echo '</br>';
// }


for ($i =1; $i < 100; $i++){
    if($i % 13 == 0) break;
        
    echo $i;
    echo '</br>';
}