<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pair Program 1</title>
</head>
<body>
    <h1>Pair Program 1</h1>

    <?php

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    $numbers = array(7, 9, 8, 9, 8, 8, 6);

    include("functions.php");

    printArr($numbers);

    echo '<p>The largest number is ' . largest($numbers) . '<?p>';
    echo '<p>The average is ' . average($numbers) . '<?p>';
    echo '<p>The new array is: <?p>';
    print_r(removeDups($numbers));
    echo '<br>';
    print_r(distribution($numbers));

    ?>


</body>
</html>

