<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<?php
//Camel case
//Lower case
//Pascal case

function myFunction(){
    $x= "Hello";
    echo $x;
}
myFunction();

$num1=5;
$num2=5;

function calculator($num1,$num2){
    echo $num1*$num2;
}

calculator($num1,$num2);

//Function with return value
//Pass by value
$num3=10;
$num4= 15;
function add($num3,$num4){
    $result= $num3 + $num4;
    return $result;
}
//add($num3,$num4);
echo "<br>";
$x=10;
function addByValue($x){   //ovdje je x 10 iako smo dodali 5 ne uzima to u obzir
    $x+=5;
}
function addByReference(&$x){ // ovdje uzima 10 i stavlja jos 10 -----manipulira varijablama
    $x+=10;
}echo "<br>";
addByValue($x);
echo "The value is:" .$x;
echo "<br>";
addByReference($x);
echo "The reference is:" .$x;
echo "<br>";

$y=0;

function ble($y){
    $y=5;
    echo $y;
}
ble($y);
echo "<br>";
//constants
//function -define()
//Keyword - CONST

$companyName= "Apple";
$companyName="Microsoft";

// define("CONSTANCE NAME", ARGUMENT2);

//const MY_NAME = "Dary";


?>

</body>

</html>



