<?php

require 'getPosts.php';

header('Content-type: json/application');
$connect = mysqli_connect('localhost', 'root', '', 'postsList');

$url = $_GET['q'];
$url = explode('/', $url);
$route = $url[0];
$id = $url[1];

$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'GET') {
    if($route === 'posts') {
        getPosts($connect);
    }
}




