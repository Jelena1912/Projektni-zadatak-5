<?php

$age = 20;
$salary = 300000;

// Sample if

if ($age == 20){
    echo "1";
}

// Without circle braces

if ($age == 20) echo "2".'<br>';

// Sample if-else

if ($age >20){
    echo "3".'<br>';
}
else{
    echo "4".'<br>';
}

// Difference between == and ===

if ($age == 20){
    echo "1".'<br>';
}
if ($age === '20'){
    echo "2".'<br>';
}

// if AND

if ($age > 20 && $salary==300000){
    echo "Do something";
}

// if OR

if ($age > 20 || $salary==300000){
    echo "Do something";
}

// Ternary if

echo $age <22 ? 'Young' :'Old';

// Short ternary

$myAge=$age?:18;
echo '<pre>';
var_dump($myAge);
echo '</pre>';

// Null coalescing operator

 $myName= isset($name)? $name : 'John';
echo '<pre>';
var_dump($myName);
echo '</pre>';

// switch

$userRole='admin';
switch ($userRole){
    case 'admin':
        echo 'admin';
        break;
    case  'editor':
        echo 'editor';
        break;
    case 'user':
        echo 'user';
        break;
    default:
        echo 'Invalid role';
}

