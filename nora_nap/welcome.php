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



<link rel="stylesheet" href="./nap_css/welcome.css">
    
    <title><?= $title ?></title>
</head>

<body>




<div class="wrap">
    <div class="login-pc d-flex justify-content-end">
        <div class="textbox d-flex  align-items-center justify-content-center">
            <div class="close"><img src="./img/self/n/close.png" alt=""></div>
            
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
                        
                       <img src="./img/self/n/check.png" alt="">
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
<!-- <?php include __DIR__. '/parts/html-foot.php'; ?> -->


