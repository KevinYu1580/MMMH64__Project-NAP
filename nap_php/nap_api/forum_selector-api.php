<?php
require  '../parts/connect_db.php';
$pageName = 'Forum-events'; // 頁面名稱

$type = isset($_GET['type']) ? intval($_GET['type']) : 1; // 預設dog

$where= " AND cc.`article_cate`= $type ";

$rows = [];  // 預設值

$sql = sprintf("
SELECT *   FROM  chat cc LEFT JOIN member01 mm on mm.id = cc.po_sid

LEFT JOIN (SELECT `chat_event_sid`, COUNT(1) num FROM `chat_commit` GROUP BY `chat_event_sid`) cc2
ON cc.sid=cc2.chat_event_sid

WHERE (tag = 0 OR tag = 1) $where 
ORDER BY `date` DESC;
");






$rows = $pdo->query($sql)->fetchAll();




$myLikes = [];
if(isset($_SESSION['user'])){

    $sql = "SELECT item_sid post_sid FROM likes WHERE like_type=3 AND member_sid=". intval($_SESSION['user']['id']);
    $myLikes = $pdo->query($sql)->fetchAll();

}

echo json_encode([
    'type' => $type,
    'rows' => $rows,
    // 'messageCount' => $messageRow[0]
    'sql' => $sql,
    'myLikes' => $myLikes

], JSON_UNESCAPED_UNICODE);