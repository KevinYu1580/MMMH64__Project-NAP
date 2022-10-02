<?php

require './parts/connect_db_kevin.php';

$post_sid = $_POST['post_sid'];
$member_sid = $_POST['member_sid']? $_POST['member_sid'] : NULL;
$message = $_POST['message'];




$sql = sprintf("
INSERT INTO chat_commit

(chat_event_sid,
 member_sid,
 comment
)

VALUES 
($post_sid,
 $member_sid,
 $message
)
");


$pdo->query($sql);




echo $post_sid;
echo "/";
echo $member_sid;
echo "/";
echo $message;