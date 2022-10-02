<?php

require  '../parts/connect_db_kevin.php';


if ($_POST['post_sid']) {
    $post_sid = $_POST['post_sid'];

    $sql = sprintf("
    DELETE FROM chat WHERE sid = $post_sid
    ");
    $pdo->query($sql);
} 


else {
    exit;
};
