<?php

require 'getPosts.php';
require 'getPost.php';
require 'addPost.php';
require 'deletePost.php';

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: *');
header('Access-Control-Allow-Methods: *');
header('Access-Control-Allow-Credential: true');
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
} elseif($requestMethod === 'DELETE') {
    if($route === 'posts') {
        deletePost($connect, $id);
    }
}




