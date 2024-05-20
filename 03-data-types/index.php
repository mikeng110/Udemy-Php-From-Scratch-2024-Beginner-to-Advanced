<?php

/*
  PHP DATA TYPES:

- String
- Integer
- Float
- Boolean
- Array
- Object
- NULL
- Resource
*/

//string 
$name = "Mikael Englund";
$name2 = " John Doe";
var_dump($name);
//echo getType($name2);
echo '<br />';

//integer
$age = 35;
var_dump($age);
echo '<br />';

//float 
$rating = 4.5;
var_dump($rating);

echo '<br />';

//boolean
$isLoaded = true;
var_dump($isLoaded);

echo '<br />';

//Array
$friends =  ['John', 'Jack', 'Jane'];
var_dump($friends);

//object 
$person = new stdClass();
var_dump($person);
echo '<br/>';

//null
$car = null;
var_dump($car);

//Resource
$file = fopen('sample.txt', 'r');
var_dump($file);