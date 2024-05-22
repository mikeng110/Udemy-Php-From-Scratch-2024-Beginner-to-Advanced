<?php
/*
| Arithmetic Operators
| Operator | Description    |
| -------- | -------------- |
| `+`      | Addition       |
| `-`      | Subtraction    |
| `*`      | Multiplication |
| `/`      | Division       |
| `%`      | Modulus        |
*/
$output = null;

$num1 = 20;
$num2 = 10;

//Basic Math
$output = "$num1 + $num2 = " . $num1 + $num2; 
$output = "$num1 - $num2 = " . $num1 - $num2; 
$output = "$num1 * $num2 = " . $num1 * $num2; 
$output = "$num1 / $num2 = " . $num1 / $num2; 
$output = "$num1 % $num2 = " . $num1 % $num2;  //modulus (remainder from integer division)

//Assigment Operator
$num3 = 10;
//$num3 = $num3 + 20;
$num3 += 20;
$output = $num3;

//Built in Php functions
$output = rand();
$output = getrandmax(); //max number you can get from rand
$output = rand(1, 10); // random inbetween 1 and 10 

//round()
$output = round(4.7);// round to nearest 10

$output = ceil(4.2); //rounds up

$output = floor(4.9); //rounds down 

$output = sqrt(2); //square root

$output = pi();

$output = abs(-1); //absolute value

$output = max(1, 2, 5, 7, 3); // largerst entry
$output = max([1, 2, 5, 7, 3]);

$output = number_format(1234567.191234, 2, '.', ','); //number, precision, decimal seperator, thausand seperator.

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>PHP From Scratch</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">PHP From Scratch</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <div class="bg-white rounded-lg shadow-md p-6 mt-6">
      <!-- Output -->
      <p class="text-xl"><?=$output?></p>
    </div>
  </div>
</body>

</html>