<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    
<?php 

define('MY_AGE', 36);
echo MY_AGE . '</br>';


$number = 5; // int
//$number = 45;

$num = -0.75; // float

$str = 'Variable'; // srtring

$bool = true; // boolean 
$bool = false;

echo $str . ': ' . $number . '. Var 2: ' . $num;

$a = 0.7;
$b = 0.7;

echo $a + floatval($b);

?>

</body>
</html>