<?php

// Declaring numbers
$a= 5;
$b=4;
$c=1.2;
// Arithmetic operations

echo $a+$b + $c . '<br>';

// Assignment with math operators

$a=$a +$b;
echo $a.'<br>';

// Increment operator

echo $a++;
echo ++$a;

// Decrement operator

echo $a--;
echo --$a.'<br>';

// Number checking functions

is_float(1.25); //true
is_double(1.25); //true

echo is_numeric("3.45").'<br>';

// Conversion

$strNumber = '13.54';
$number = (float) $strNumber;
$number= intval($strNumber);
var_dump($number);
echo '<br>';

// Number functions

abs(-15).'<br>';

echo '<br>'.pow(2,4);

// Formatting numbers

$number= 123456789.12345; //
echo number_format($number,2,'.', ' ');


// https://www.php.net/manual/en/ref.math.php
