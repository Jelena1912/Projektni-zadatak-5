<?php

// Function which prints "Hello I am Zura"

function hello(){
    echo "Hello I am Zura";
}
hello();

// Function with argument

function ola($name){
    echo "Hello I am $name";
}
ola('Jelena');
// Create sum of two functions

function sum($a, $b){
    return $a+$b;
}
echo sum(4,5);

// Create function to sum all numbers using ...$nums

function zbroj(... $nums)
{
$zbroj=0;
foreach ($nums as $n){
    $zbroj = $zbroj + $n;
}
return $zbroj;
}
echo zbroj(1,2,3,4,5,6);


// Arrow functions

function bla(...$nums)
{
    return array_reduce($nums, fn($carry, $n) => $carry +$n);
}
echo  bla(1,2,3,4,5,6);



