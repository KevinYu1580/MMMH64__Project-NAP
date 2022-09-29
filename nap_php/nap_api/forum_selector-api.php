<?php
require  '../parts/connect_db_kevin.php';
$pageName = 'Forum-events'; // 頁面名稱

$type = isset($_GET['type']) ? intval($_GET['type']) : 1; // 預設dog


$where= " AND cc.`article_cate`= $type ";


$rows = [];  // 預設值
// 有資料才執行
/*
$sql = sprintf("
SELECT *   FROM  chat cc LEFT JOIN member01 mm on mm.id = cc.po_sid


WHERE (cc.tag = 0 OR cc.tag = 1) $where;
");
*/
/*

$sql = sprintf("
SELECT cc.*, mm.*  LEFT FROM  chat cc JOIN member01 mm on mm.id = cc.po_sid


WHERE (cc.tag = 0 OR cc.tag = 1) $where;
");
*/

$sql = sprintf("
SELECT cc.*, mm.*, cc2.num   FROM  chat cc LEFT JOIN member01 mm on mm.id = cc.po_sid

JOIN (SELECT `chat_event_sid`, COUNT(1) num FROM `chat_commit` GROUP BY `chat_event_sid`) cc2
ON cc.sid=cc2.chat_event_sid

WHERE (tag = 0 OR tag = 1) $where;
");



// $messageSql = sprintf("SELECT COUNT(*)c FROM chat LEFT JOIN chat_commit on chat_commit.chat_event_sid = chat.sid LEFT JOIN member01 on chat_commit.member_sid = member01.id WHERE chat.sid = $sid;
// ");


$rows = $pdo->query($sql)->fetchAll();
// $messageRow =  $pdo->query($messageSql)->fetchAll();

//位置開始---------

echo json_encode([
    'type' => $type,
    'rows' => $rows,
    // 'messageCount' => $messageRow[0]
    'sql' => $sql

], JSON_UNESCAPED_UNICODE);