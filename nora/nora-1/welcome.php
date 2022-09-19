<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}

?>
<?php include __DIR__ . '/parts/html-head.php'; ?>
<link rel="stylesheet" href="./css_n/register.css">
    
    <title><?= $title ?></title>
</head>

<body>

<div class="wrap">
    <div class="login-pc d-flex justify-content-end">
        <div class="textbox d-flex  align-items-center justify-content-center">
            <div class="close"><img src="./img_n/close.png" alt=""></div>
            
            <div class="content content4 d-flex flex-column align-items-center  w-100">
                <div class="part w-100 ">
                    
                    <div class="title d-flex justify-content-center "><h3>STEP1</h3></div>
                    <div class="stepbox mx-5 d-flex justify-content-center">
                        <div class="stepline"></div>
                        <div class="steps d-flex justify-content-between">
                            
                            <div class="step step1 d-flex flex-column align-items-center">
                                <div class="dot"></div>
                                <div class="text">輸入密碼</div>
                            </div>
                            <div class="step step2 d-flex flex-column align-items-center">
                                <div class="dot"></div>
                                <div class="text">填寫資料</div>
                            </div>
                            <div class="step step3 d-flex flex-column align-items-center">
                                <div class="dot"></div>
                                <div class="text">完成註冊</div>
                            </div>
                        </div>
                        
                    </div>


                </div>
                <form class="form needs-validation d-flex flex-column align-items-center" >
                    <div class="up-part d-flex flex-column align-items-center   w-100">
                        
                       <img src="./img_n/check.png" alt="">
                       <p>完成註冊</p>

                        </div>
                        
                        <div class="btn-box d-flex flex-column  ">
                            
                            <button type="button" class="btn btn-primary"
                            onclick="location.href='./register-2.php'"><p>確認</p> </button>
                            
                        </div>
                </div>
                
                
                </form>
            </div>
        
        
                    
                
                
    </div>
    

</div>


<?php include __DIR__ . './parts/scripts.php'; ?>

<script>







</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>