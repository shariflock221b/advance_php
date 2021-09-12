<?php


// $num1 = 10;
// $num2 = 3;

// // $result = $num1 + $num2; //addition
// //$result = $num1 - $num2; //subtraction
// //$result = $num1 % $num2; //modulus
// //$result = $num1 * $num2; //multiplication
// //$result = $num1 / $num2; //division
// $result = $num1 ** $num2; //Exponentiation

// echo $result;



$num1 = 10;
$num2 = 15;



//var_dump($num1 == $num2); // equal
//var_dump($num1 === $num2); // identical
//var_dump($num1 != $num2); // not-equal
//var_dump($num1 <> $num2); // not-equal
//var_dump($num1 !== $num2); // not identical
//var_dump($num1 < $num2); // Greater than
//var_dump($num1 > $num2); // Less than
//var_dump($num1 >= $num2); // Greater than or equal to
//var_dump($num1 => $num2); // 	Less than or equal to
//var_dump($num1 <=> $num2); // Spaceship


$var = true;
$var1 = false;

// var_dump($var and $var1);
// var_dump($var && $var1);
// var_dump($var or $var1);
// var_dump($var || $var1);
// var_dump($var xor $var1);
// var_dump(!$var );


// $var1 = 10;

// //$result = $var1 + $var1++;
// // $result =  ++$var1;
// $result = --$var1 ;

// echo $result;




$lol = 10;
$bool = true;

echo gettype($bool);

echo '</br>';

for ($x = 6; $x <= 10; $x++){
    echo "$x";
    echo PHP_EOL;
}
echo '</br>';

$x = 10;
$y = 20;

if($x > $y ) {
    echo 'this is big';
} else if ($x < $y) {
    echo 'this is small';
} else {
    echo 'this other';
}


