<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 

$num1=$_GET["n1"];
$num2=$_GET["n2"];

$suma = $num1+$num2;
$resta = $num1-$num2;
$mult = $num1*$num2;
$div = $num1/$num2;

echo "Suma: " . $suma . " Resta: " . $resta . " Multiplicacion: " . $mult . " Division: " . $div;

?>

</body>
</html>