<?php
$output = null;
$ids = [10, 22, 15, 45, 67];
$users = ['user1', 'user2', 'user3'];

$output = count($ids);

//sort
sort($ids);
rsort($users); //reverse sort

//array push
array_push($ids, 300);

//array_pop
array_pop($ids);

array_shift($ids); //takes first value of rthe array

$ids2 = array_slice($ids, 2, 3);
//var_dump($ids2);

//array_splice - return portion of array 
array_splice($ids,1, 1, 'New Id') ;
//var_dump($ids);

//array_search 
$output = 'User 2 is at index: ' . array_search('user2', $users);

//explode
$tags = 'tech,0code,programming';
$tagsArr = explode(',', $tags);


//implode - turn back to comma seperated list
$output = implode(',', $tagsArr);
var_dump($tagsArr);
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
            <p class="text-xl"><?= $output ?></p>
            </p>
            <h2 class='text-xl font-semibold my-4'>ID's Array:</h2>
            <p>
                <pre>
                    <?=print_r($ids)?>
                </pre>
            </p>

            <h2 class='text-xl font-semibold my-4'>users's Array:</h2>
            <p>
                <pre>
                    <?=print_r($users)?>
                </pre>
            </p>
        </div>
    </div>
</body>

</html>