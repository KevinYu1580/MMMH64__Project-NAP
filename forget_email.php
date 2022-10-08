<?php

if(! isset($_SESSION)){
    session_start();
}

// 設定收件者
$to = $_SESSION['email'];

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$mail_key2 = '';

@include __DIR__ . '/keys.php';

// echo $mail_key2;

//Load Composer's autoloader
require __DIR__ . '/vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    $mail->Encoding = 'base64';
    $mail->CharSet = 'UTF-8';
    //Server settings
    $mail->SMTPDebug = 3;                      //Enable verbose debug output
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'nap.service2022@gmail.com';                     //SMTP username
    $mail->Password   =  $mail_key2;                               //SMTP password
    $mail->SMTPSecure = 'ssl';            //Enable implicit TLS encryption
    $mail ->SMTPOptions = array (
        'ssl' => array (
            'verify_peer' => false ,
            'verify_peer_name' => false ,
            'allow_self_signed' => true
            )
        );
    // $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('nap.service2022@gmail.com', 'N.A.P.');
    $mail->addAddress($to);     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'N.A.P. 會員密碼重設';
    $mail->Body    = '<!DOCTYPE html>
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
    // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
