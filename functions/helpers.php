<?php 

//------------------------------------------------------------------------------------
//config

define('BASE_URL', 'http://localhost/php-project/');

function redirect($url)
{
    header('Location: ' . trim(BASE_URL, '/ ') . '/' . trim($url, '/ '));
    exit;
}
// redirect('/panel/category/');
//------------------------------------------------------------------------------------
function asset($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}
//------------------------------------------------------------------------------------
function url($file)
{
    return trim(BASE_URL, '/ ') . '/' . trim($file, '/ ');
}
//------------------------------------------------------------------------------------
function dd($var)
{
    echo '<pre>';
    var_dump($var);
    exit;
}
//------------------------------------------------------------------------------------