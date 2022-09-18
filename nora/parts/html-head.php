<?php
if(! isset($title)){
    $title = 'N.A.P.';
} else {
    $title = $title. ' | N.A.P.';
}

?>


<!DOCTYPE html>
<html lang="zh">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css_n/reset.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/css/bootstrap.css">
    <link rel="stylesheet" href="./bootstrap-5.1.1-dist/js/bootstrap.js">
    <link rel="stylesheet" href="./css_n/login.css">
    
    <title><?= $title ?></title>
</head>

<body>