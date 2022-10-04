<?php
if(! isset($_SESSION)){
    session_start();
}

$note = isset($_POST['note']) ? $_POST['note'] : '';
if (!empty($note)) {
    $_SESSION['rm-note']['content'] = $note;
}else
{
    $_SESSION['rm-note']['content'] = null;
}

echo json_encode($_SESSION['rm-note']['content']);
?>