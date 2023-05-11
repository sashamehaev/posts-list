<?php

require 'getPosts.php';
require 'getPost.php';
require 'addPost.php';

header('Content-type: json/application');
$connect = mysqli_connect('localhost', 'root', '', 'postsList');

$url = $_GET['q'];
$url = explode('/', $url);
$route = $url[0];
$id = $url[1];


$requestMethod = $_SERVER['REQUEST_METHOD'];

if($requestMethod === 'GET') {
    if($route === 'posts') {
        if($id !== '') {
            getPost($connect, $id);
        } else {
            getPosts($connect);
        }
    }
} elseif($requestMethod === 'POST') {
    if($route === 'posts') {
        addPost($connect);
    }
}




