<?php

// Create simple string
$string1= 'Hello world';
$string2= "Hello world";
 echo $string1.'<br>';
 echo $string2.'<br>';
// String concatenation

echo 'Hello '.'World '.'and PHP '.'<br>';
// String functions

$string = "     Hello World     ";
echo "-".strlen($string).'<br>';
echo "-".trim($string).'<br>';
echo "-".ltrim($string).'<br>';
echo "-".rtrim($string).'<br>';
echo "-".str_word_count($string).'<br>';
echo "-".strrev($string).'<br>';
echo "-".strtoupper($string).'<br>';
echo "-".strtolower($string).'<br>';
echo "-".ucfirst('hello').'<br>';
echo "-".lcfirst('HELLO').'<br>';
echo "-".ucwords('hello world').'<br>';
echo "-".strpos($string, 'world').'<br>';
echo "-".stripos($string, 'world').'<br>';
echo "-".str_replace('World','PHP',$string).'<br>';
echo "-".str_ireplace('World','PHP', $string).'<br>';

// Multiline text and line breaks

$longText= "
    Hello,my name iz Zura
    Iam 27, 
    I love my daughter
    ";
echo nl2br($longText).'<br>';
// Multiline text and reserve html tags

$longText= "
    Hello,my name iz <b>Zura</b>
    Iam <b>27</b>, 
    I love my daughter
    ";
echo $longText.'<br>';;

echo "1- ".$longText.'<br>';
echo "2- ".nl2br($longText).'<br>';
echo "3- ".htmlentities($longText).'<br>';
echo "4- ".nl2br(htmlentities($longText)).'<br>';

echo html_entity_decode('<b>Zura</b>').'<br>';

// https://www.php.net/manual/en/ref.strings.php