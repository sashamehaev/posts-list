<?php

function getPost($connect, $id) {
    $post = mysqli_query($connect, "SELECT * FROM `posts` WHERE `id`='$id'");
    $post = mysqli_fetch_assoc($post);
    echo json_encode($post);
}