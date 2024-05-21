<?php
$number1 = 5;
$number2 = 10;
$number3 = '20';
$fruit = 'apple';
$bool1 = true;
$bool2 = false;
$null = null;

//implicit conversion
$result = $number1 + $number2; //int (int + int)

$result = $number1 + $number3; //int (int + string to int)

$result = $number3 + $number3; //int ((string to int) + (string to int))

$result = $number1 . $number2; //string 

//$result = $fruit + $number2; //error
$result = $number1 + $bool1; //int (int + bool to int ), true=1
$result = $number1 + $bool2; //false=0
$result = $number1 + $null; //null=0

//escplicit conversion
$result = (string)$number1;
$result = (int)$number3;

$result = (bool) $number1;


var_dump($result);

