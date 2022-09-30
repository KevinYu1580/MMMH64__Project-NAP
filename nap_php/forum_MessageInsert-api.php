<?php

require './parts/connect_db_kevin.php';

$message = $_POST['message'];




// $sql = sprintf("INSERT INTO chat
// (po_sid,)
// VALUES 
// ('$memberId',)");

// $pdo->query($sql);

// $output = [
//     $memberId,
// ];


echo json_encode ($message) ;
