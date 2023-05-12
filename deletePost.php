<?php

function deletePost($connect, $id) {
    mysqli_query($connect, "DELETE FROM `posts` WHERE `posts`.`id` = $id");

    $res = [
        "message" => "Post has been deleted"
    ];

    echo json_encode($res);
}