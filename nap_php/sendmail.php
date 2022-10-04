<?php
// 設定收件者
$to = "nap.service2022@gmail.com";

// 設定郵件主旨
$subject = "謝謝您對 N.A.P 的支持，請查收訂單明細";
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

//設定郵件標頭資訊
$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text; charset=utf-8\r\n";
$headers .= "To: nap.service2022@gmail.com\r\n";
$headers .= "From: N.A.P<nap.service2022@gmail.com>\r\n";


// 設定郵件內容
$message = "2159這是一封測試信\n\n若您收到此封信，表示測試成功。";

// 傳送郵件
mail($to, $subject, $message,$headers);
?>
