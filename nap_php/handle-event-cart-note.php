<?php
if(! isset($_SESSION)){
    session_start();
}

$note = isset($_POST['note']) ? $_POST['note'] : '';
if (!empty($note)) {
    $_SESSION['note']['content'] = $note;
}

echo json_encode($_SESSION['note']['content']);
?>