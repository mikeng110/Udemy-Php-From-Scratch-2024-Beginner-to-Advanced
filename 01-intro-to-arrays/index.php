<?php
$names = array('john', 'jack', 'jill');
$numbers = [1,2,3,4,5,6];

function inspect($value) {
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
//die(); //what does this function do?  
}

//inspect($names);
//print_r($names);
 
//echo $names[2];
//echo $names[3]; //Warning: Undefined array key 3 in C:\xampp\htdocs\Udemy-php-from-scratch\01-intro-to-arrays\index.php on line 16

//add element to array
$numbers[6] =100;
$numbers[] =100; //empty bracket is end of array

$numbers[3] = 200;

unset($numbers[3]); //this removes the index with the value
$numbers = array_values($numbers); //reindex to 1,2,3,4 etc
inspect($numbers);

?>