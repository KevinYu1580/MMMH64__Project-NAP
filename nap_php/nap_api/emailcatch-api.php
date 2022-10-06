<?php
if(! isset($_SESSION)){
    session_start();
}

$email = isset($_POST['email']) ? $_POST['email'] : '123';

    $_SESSION['email'] = $email;

echo json_encode($email);
?>

