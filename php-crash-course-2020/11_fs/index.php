<?php
// Magic constants
echo __DIR__.'<br>';
echo  __FILE__.'<br>';
echo __LINE__.'<br>';

// Create directory

mkdir('test');

// Rename directory

rename('test', 'test2');

// Delete directory


rmdir('test2');

// Read files and folders inside directory

$files=scandir('../');
echo '<pre>';
var_dump($files);
echo '</pre>';

// file_get_contents, file_put_contents

echo file_get_contents('lorem.txt');
file_put_contents('sample.txt', 'Some Content');

// file_get_contents from URL

//jason placeholder
$userJson=file_get_contents('https://jsonplaceholder.typicode.com/users');
//https://jsonplaceholder.typicode.com/users
echo $userJson;
$users=json_decode($userJson, true);
echo '<pre>';
var_dump($users);
echo '</pre>';

// https://www.php.net/manual/en/book.filesystem.php
// file_exists      jel postoji
// is_dir           je li direktorij
// filemtime
// filesize
// disk_free_space
// file