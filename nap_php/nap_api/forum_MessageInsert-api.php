<?php

require  '../parts/connect_db.php';

$post_sid = $_POST['post_sid'];
$member_sid = $_SESSION['user']['id'];
// 會員預設為sid = 1
$message = ((string)$_POST['message']);

echo $member_sid;


$sql = sprintf("
INSERT INTO chat_commit
(chat_event_sid,
 member_sid,
 comment
)

VALUES 
('$post_sid',
 '$member_sid',
 '$message'
)
");


$pdo->query($sql);




