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
<div class="wrap ">
        <div class="login-mb">
            <div class="close"><img src="./img_n/close.png" alt=""></div>
            <div class="content d-flex flex-column align-items-center">
                <div class="part w-100">
                    <div class="logo d-flex justify-content-center"><img src="./img_n/logo.png" alt=""></div>
                    <div class="title d-flex justify-content-center "><h3>登入</h3></div>
                </div>
                <form class="form w-100  "name="form1" method="post" onsubmit="checkForm(); return false;">
                    <div class="up-part d-flex flex-column align-items-center">
                        <div class="email-box w-100 mb-2">
                        <label for="email" class="form-label">帳號 (email)</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="請輸入帳號" required>
                        </div>
                        <div class="password-box w-100">
                        <label for="password" class="form-label">密碼</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                        </div>
                        <div class="btn-box d-flex flex-column  ">
                            <button type="submit" class="btn btn-primary  ">登入</button>
                        </div>
                        
                    </div>
                    
                        <div class="line">
                        <div class="title-sm d-flex flex-column align-items-center"><p>快速登入</p></div>
                        </div>
                        <div class="community d-flex flex
                        justify-content-center align-items-center">
                            
                                <div class="btn ">
                                    <a href="#" class="d-flex  ">
                                        <div class="pic"><img src="./img_n/google.png" alt=""></div>
                                        <div class="text"><p>Google</p></div>
                                    </a>
                                </div>
                                <div class="btn">
                                    <a href="#" class="d-flex  ">
                                        <div class="pic "><img src="./img_n/fb.png" alt=""></div>
                                        <div class="text"> <p>Facebook</p></div>
                                    </a>
                                </div>
                            
                        </div>

                        <div class="say d-flex pt-4 justify-content-center">
                            <div class="left "> <p>等不及想見到園區的毛孩嗎？</p> </div>
                            <div class="right"><a href="#"><p>立即註冊</p></a></div>
                        </div>

                    </div>

                
                </form>
        </div>
        
        <div class="login-pc">
            <div class="bg">
                <div class="textbox">
                    <div class="close"><img src="./img_n/close.png" alt=""></div>
                    <div class="content d-flex flex-column align-items-center">
                        <div class="part w-100">
                            <div class="logo d-flex justify-content-center"><img src="./img_n/logo.png" alt=""></div>
                            <div class="title d-flex justify-content-center "><h3>登入</h3></div>
                        </div>
                        <form class="form w-100" name="form1" method="post" onsubmit="checkForm(); return false;">
                            <div class="up-part d-flex flex-column align-items-center">
                                <div class="email-box w-100 mb-2">
                                <label for="email" class="form-label">帳號 (email)</label>
                                <input type="email" class="form-control" id="email1" name="email" placeholder="請輸入帳號" required>
                                </div>
                                <div class="password-box w-100">
                                    <label for="password" class="form-label">密碼</label>
                                    <input type="password" class="form-control" id="password1" name="password" placeholder="請輸入密碼" required>
                                    
                                </div>
                                <div class="btn-box d-flex flex-column  ">
                                    <button type="submit" class="btn btn-primary">登入</button>
                                    
                                </div>
                                
                            </div>
                            
                                <div class="line">
                                <div class="title-sm d-flex flex-column align-items-center"><p>快速登入</p></div>
                                </div>
                                <div class="community d-flex flex
                                justify-content-center align-items-center">
                                    
                                        <div class="btn">
                                            <a href="#" class="d-flex  ">
                                                <div class="pic"><img src="./img_n/google.png" alt=""></div>
                                                <div class="text"><p>Google</p></div>
                                            </a>
                                        </div>
                                        <div class="btn">
                                            <a href="#" class="d-flex  ">
                                                <div class="pic "><img src="./img_n/fb.png" alt=""></div>
                                                <div class="text"> <p>Facebook</p></div>
                                            </a>
                                        </div>
                                    
                                </div>
    
                                <div class="say d-flex pt-4 justify-content-center">
                                    <div class="left "> <p>等不及想見到園區的毛孩嗎？</p> </div>
                                    <div class="right"><a href="#"><p>立即註冊</p></a></div>
                                </div>
    
                            </div>
    
                        
                        </form>
                </div>
            </div>
            
        </div>
    </div>

</div> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"></script>
<script>
    function checkForm() {
        // TODO: 欄位檢查
        if (!$('#email').val()) {
            alert('請填寫帳號');
            return;
        }
        if (!$('#password').val()) {
            alert('請填寫密碼');
            return;
        }
        if (!$('#email1').val()) {
            alert('請填寫帳號');
            return;
        }
        if (!$('#password1').val()) {
            alert('請填寫密碼');
            return;
        }
        $.post(
            'login-api.php',
            $(document.form1).serialize(),
            function(data) {
                if(data.success){
                    location.href = './';
                } else {
                    alert(data.error);
                }
            },
            'json'
        );

    }
</script>
</body>

</html>