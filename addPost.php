<?php

function addPost($connect) {
    $data = $_POST;
    $data = file_get_contents('php://input');
    $data = json_decode($data, true);
    $title = $data['title'];
    $text = $data['text'];
    
    mysqli_query($connect, "INSERT INTO `posts` (`id`, `title`, `text`) VALUES (NULL, '$title', '$text')");
    
    $id = mysqli_insert_id($connect);
    $res = [
        "id" => $id,
        "title"=> $title,
        "text"=> $text
    ];

    echo json_encode($res);
}