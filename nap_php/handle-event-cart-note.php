<?php
if(! isset($_SESSION)){
    session_start();
}

$note = isset($_POST['note']) ? $_POST['note'] : '';
if (!empty($note)) {
    $_SESSION['evt-note']['content'] = $note;
}else
{
    $_SESSION['evt-note']['content'] = null;
}

echo json_encode($_SESSION['evt-note']['content']);
?>