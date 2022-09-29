<?php

require __DIR__ . '/parts/connect_db_kevin.php';
$output = [
    'petType' => '',
];

$petType = isset($_POST['petType']) ? intval($_POST['petType']) : NULL;







echo json_encode ($output);






