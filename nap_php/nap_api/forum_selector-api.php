<?php
require  '../parts/connect_db_kevin.php';
$pageName = 'Forum-events'; // 頁面名稱

$type = isset($_GET['type']) ? intval($_GET['type']) : 1; // 預設dog

$where= " AND `article_cate`= $type ";


$rows = [];  // 預設值
// 有資料才執行
$sql = sprintf("SELECT * FROM  chat LEFT JOIN member01 on member01.id = chat.po_sid WHERE (tag = 0 OR tag = 1) $where ;");

$messageSql = sprintf("SELECT COUNT(*) c FROM chat LEFT JOIN member01 on member01.id = chat.po_sid WHERE (tag = 0 OR tag = 1) $where ;");


$rows = $pdo->query($sql)->fetchAll();
$messageRow =  $pdo->query($messageSql)->fetchAll();

//位置開始---------

echo json_encode([
    'type' => $type,
    'rows' => $rows,
    'messageCount' => $messageRow
], JSON_UNESCAPED_UNICODE);