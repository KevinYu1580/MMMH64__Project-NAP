<?php
if(! isset($_SESSION)){
    session_start();
}


// 設定收件者
$to = $_SESSION['email'];

// 設定郵件主旨
$subject = "N.A.P. 會員密碼重設";
$subject = "=?utf-8?B?" . base64_encode($subject) . "?=";

//設定郵件標頭資訊
$headers  = "MIME-Version: 1.0" . PHP_EOL;
$headers .= "Content-type: text/html; charset=utf-8" . PHP_EOL;
$headers .= 'To:';
$headers .= $to . PHP_EOL;
$headers .= "From: N.A.P.<nap.service2022@gmail.com>" . PHP_EOL;


// 設定郵件內容

$message = '

<!DOCTYPE html>
<html>
	<body>
		<table border="1" cellspacing="0" cellpadding="15" style="background-color:#ffffff;" >
            <tbody>
                <tr>
                    <td align="center" width="700">
                        <table width="650" border="0" cellspacing="5" cellpadding="5">
                            <tbody>
                                <tr>
                                    <td align="left">
                                        <h1><span><font style="font-family: 微軟正黑體;">讓我們來重設密碼吧！</font></span>
                                        </h1>
                                    </td>
                                </tr>

                                <tr>
                                    <td align="left">
                                        <p>
                                            <font style="font-family: 微軟正黑體;">請點擊下方「重設密碼」連結以重設您的密碼。<br></font>
                                        </p>
                                        <p>
                                            <font style="font-family: 微軟正黑體;">【<a href="http://localhost/MMMH64__Project-NAP/nap_php/forget_back.php" style="font-weight:bold; text-decoration: none; color: blue;"  target="_blank">重設密碼</a>】</font>
                                        </p>
                                        
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <table width="650" border="0" cellspacing="5" cellpadding="0">
                            <tbody>
                                <tr>
                                    <td align="center">
                                        <div>
                                            <font style="font-family: 微軟正黑體; font-size: 14px; color: #f00;">本信件由系統自動發送通知，請勿直接回覆，<wbr />如您沒有重設密碼，請直接與 N.A.P. 聯絡。</font>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td align="center">
                                        <div style="margin: 30px;">
                                            <img src="./img/component/logo/logo-2.svg" alt="">
                                            <br />
                                            <div style="margin: 6px;">
                                            <span>客服信箱：
                                                <a href="nap.service2022@gmail.com" target="_blank">nap.service2022@gmail.com</a>
                                            </span>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
            </tbody>
        </table>
	</body>
</html>
';

// 傳送郵件
mail($to, $subject, $message, $headers);

?>
