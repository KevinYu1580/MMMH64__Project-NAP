<?php

require '../parts/connect_db.php';


$picture_name = $_FILES['file']['name'];

$sql = sprintf("INSERT INTO chat
(articlePic_id
)
VALUES 
(
$picture_name
)");

$pdo->query($sql);