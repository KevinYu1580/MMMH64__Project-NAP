
<?php
session_start();
// 如果已經登入會員
if (!empty($_SESSION['user'])) {
    header('Location: ./');
    exit;
}
?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


    <!-- <link rel="stylesheet" href="./nap_css/component_mobile2.css"> -->

    <link rel="stylesheet" href="./nap_css/reset.css">

<link rel="stylesheet" href="./nap_css/login5.css">
    
    <title><?= $title ?></title>
</head>

<body>




<div class="wrap">
    
    <!-- <div class="outcut"> -->
        <div class="login-pc d-flex justify-content-end">
        <div class="textbox d-flex flex-column align-items-center justify-content-center">
            <div class="play-people">
                <img src="./img/self/n/member/bg/man.png" alt="" class="people-man ">
                <img src="./img/self/n/member/bg/ball.png" alt=""class="people-ball">
                <img src="./img/self/n/member/bg/girl1.png" alt=""class="people-girl1">
                <img src="./img/self/n/member/bg/girl2.png" alt=""class="people-girl2">
                <img src="./img/self/n/member/bg/dog.png" alt=""class="people-dog">
                <img src="./img/self/n/member/bg/logo-white.png" alt=""class="people-logo">
            </div>
            <div class="close"><img src="./img/self/n/close.png" alt=""></div>
            <div class="content d-flex flex-column align-items-center">
                <div class="part">
                    <div class="logo d-flex justify-content-center mb-2"><img src="./img/self/n/logo.png" alt=""></div>
                    <div class="title d-flex justify-content-center mx-5 mb-4"><h3>登入</h3></div>
                </div>
                <form class="form needs-validation  "name="form1" method="post" onsubmit="checkForm(); return false;">
                    <div class="up-part d-flex flex-column align-items-center mx-4">
                        <div class="email-box w-100 mb-3  ">
                        <label for="email" class="form-label">帳號 (email)</label>
                        <input type="email" class="form-control " id="email" name="email" placeholder="請輸入帳號" required>
                        <div class="invalid-feedback">
                            此處不可空值
                        </div>


                            
                        </div>
                        <div class="password-box w-100">
                            <label for="password" class="form-label">密碼</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                            <div class="invalid-feedback">
                            此處不可空值或格式錯誤
                        </div>
                        </div>
                        <div class="btn-box d-flex flex-column  ">
                            <button type="submit" class="btn btn-primary">登入</button>
                            
                        </div>
                        
                    </div>
                    
                        <div class="line mx-4">
                        <div class="title-sm d-flex flex-column align-items-center"><p>快速登入</p></div>
                        </div>
                        <div class="community d-flex flex
                        justify-content-center align-items-center">
                            
                                <div class="btn">
                                    <a href="#" class="d-flex  ">
                                        <div class="pic"><img src="./img/self/n/google.png" alt=""></div>
                                        <div class="text"><p>Google</p></div>
                                    </a>
                                </div>
                                <div class="btn">
                                    <a href="#" class="d-flex  ">
                                        <div class="pic "><img src="./img/self/n/fb.png" alt=""></div>
                                        <div class="text"> <p>Facebook</p></div>
                                    </a>
                                </div>
                            
                        </div>

                        <div class="say d-flex pt-4 justify-content-center">
                            <div class="left "> <p>等不及想見到園區的毛孩嗎？</p> </div>
                            <div class="right"><a href="./register.php"><p>立即註冊</p></a></div>
                        </div>

                    </div>

                
                </form>
        </div>
        
                    
                
                
    </div></div>
</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>


<?php include __DIR__. '/parts/scripts.php'; ?>
<!-- <script src="./nap_js/component.js"></script> -->
<script>

// Example starter JavaScript for disabling form submissions if there are invalid fields
(function () {
  'use strict'

  // Fetch all the forms we want to apply custom Bootstrap validation styles to
  var forms = document.querySelectorAll('.needs-validation')

  // Loop over them and prevent submission
  Array.prototype.slice.call(forms)
    .forEach(function (form) {
      form.addEventListener('submit', function (event) {
        if (!form.checkValidity()) {
          event.preventDefault()
          event.stopPropagation()
        }

        form.classList.add('was-validated')
      }, false)
    })
})()






// -----------------------
    function checkForm() {
        // TODO: 欄位檢查
        // if (!$('#email').val()) {
        //     form.classList.add('was-validated')
        //     return;
        // }
        // if (!$('#password').val()) {
        //     $("#myAlert").alert();
        //     return;
        // }
        // if (!$('#email1').val()) {
        //     form.classList.add('was-validated')
        //     return;
        // }
        // if (!$('#password1').val()) {
        //     $("#myAlert").alert();
        //     return;
        // }
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
<?php include __DIR__. '/parts/html-foot.php'; ?>


