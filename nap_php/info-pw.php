<?php
require __DIR__ . '/parts/connect_db_nora.php';

// if(! isset($_GET['id'])){
//     header('Location: info-info.php');
//     exit;
// }




// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";



$id = $_SESSION['user']['id'];
// echo json_encode([
//     '$id'=>$id,
// ]);
$sql = "SELECT * FROM member01 WHERE id=$id";
$r = $pdo->query($sql)->fetch();

//如果沒有拿到資料
if(empty($r)){
    header('Location: info-info.php');
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

    
</head>

<?php include __DIR__. '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav2.css">

<link rel="stylesheet" href="./nap_css/info4.css">




 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
         <div class="titlebox pb-2 "><h2>會員中心</h2></div>
         <div class="line"></div>
     
     <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center"><h2>會員中心</h2></div>
    </div>
     <div class="container1 d-flex justify-content-center mt-4">
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
            <li class="">
                <a href="./info-info.php" class="inhere" >基本資料</a>  
            </li>
            <li class="">
                <a href="./member-pet.php" class="">毛孩資料</a>  
            </li>
            <li class="bd-none1">
                <a href="./list.php" class="#">訂單查詢</a>  
            </li>
            <li class="">
                <a href="./post.php" class="#">歷史發佈</a>  
            </li>
            <li class="">
                <a href="./love-pet.php" class="#">我的關注</a>  
            </li>
            <li class="bd-none">
                <a href="./gift.php" class="">優惠專區</a>  
            </li>
            

        </ul>
     </div>
     
 </div>
 <!------ content ------>

 <div class="info-content info-content-2 d-flex flex-column flex-sm-row">
 <div id="msgContainer" class="" style=" position: absolute; z-index: 900;top: 50%; left: 50%; transform: translate(-50%, -50%); display:none; width: 100%; height: 100vh; background-color: #4C4C4C; ">
        <!-- <div class="alert " role="alert" style=" width: 100%; height: 100vh;" >
            <p style=" position: absolute; z-index: 22;top: 56%;left: 51%; transform: translate(-50%, -50%); width: 100px;">新增成功
            </p> 
            <img id="myimg1" src="./img/member/profile-image/fix.gif" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div> -->
    </div>
    <div class="control d-flex flex-column justify-content-center align-items-center">
        <div class="person d-flex flex-sm-column flex-row justify-content-center align-items-center">
        
            <div class="imgbox">
                <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="" class="old-avatar">
            </div>
            <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm1(); return false;">
            <input type="hidden" name="id" value="<?= $id ?>">
            <div class="name"><?=$r['name'] ?></div>
        </div>
        <ul class="d-flex flex-sm-column flex-row justify-content-center ">
            <li class="bdr"> <a href="./info-info.php">返回上頁</a> </li>
            <li > <a href="./info-edit.php">修改資料</a> </li>
        </ul>
    </div>
    <div class="list mt-auto mb-auto">
        
            <div class="up-part d-flex flex-column align-items-center ">
                <div class="name-box inlong mb-3 ">
                    <label for="password" class="form-label">舊密碼</label>
                    <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="請輸入舊密碼"value=""required>
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                </div>
                <div class="password-box inlong   mb-3 ">
                            <label for="password" class="form-label">新密碼</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="請輸入密碼" required>
                            <div class="invalid-feedback">
                            此處不可空值或格式錯誤
                        </div>

                        </div>
                        <div class="password-box inlong  ">
                            <label for="password1" class="form-label">再次確認新密碼</label>
                            <input type="password" class="form-control" id="password_check" name="password_check" placeholder="請再次輸入密碼" required>
                            <div class="invalid-feedback">
                            此處不可空值或格式錯誤
                        </div>
                        </div>
                
                <div id="msgContainer">
            <!--
                <div class="alert alert-danger" role="alert">
                     新增成功
                </div>
                -->
            </div>
                
                <div class="btn-box d-flex flex-column  ">
                    <button type="submit" class="btn btn-primary">修改</button>
                    
                </div>
                
            </div>
            
          </form> 
    </div>
    
 </div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
    const msgc = $('#msgContainer');

function genAlert(msg,ccc) {

    $('.info-content #msgContainer').css('display','block');

    const a = $(`
    <div class="alert " role="alert" style=" width: 100%; height: 100vh;" >
            <p style=" position: absolute; z-index: 22;top: 56%;left: 51%; transform: translate(-50%, -50%); width: 100px;">${msg}
            </p> 
            <img id="myimg1" src="${ccc}" alt="" width="300" style=" position: absolute; z-index: 21;top: 50%;left: 50%; transform: translate(-50%, -50%);">
        </div>

    `);
    msgc.append(a);
    setTimeout(()=>{
        a.fadeOut(400, function(){
            a.remove();
        });
        
    }, 2000);
    msgc.append(msgc);
    setTimeout(()=>{
        msgc.fadeOut(400, function(){
            $('.info-content #msgContainer').css('display','none');
        });
        
    }, 2000);
}


function checkForm1() {
    // TODO: 檢查欄位資料格式是不是符合

    let isPass = true; // 預設表單的資料是沒問題的
        const x = document.forms["form1"]["password"].value;
        const y = document.forms["form1"]["password_check"].value;
            if(x.length<6){

                alert("密碼長度不足");
                
                

                return false;
            }
            if (x != y) {
                alert("請確認密碼");
                
                return false;
            }

    if (isPass) {
        // 送出表單資料

        $.post(
            'info-pw-api.php',
            $(document.form1).serialize(),
            function(data) {
                console.log(data);
                if(data.success){
                    genAlert('修改完成', './img/self/n/fix.gif');
                } else {
                    genAlert('尚未修改', './img/self/n/none.gif');
                }


            }, 'json');
    }
}
</script>
<?php include __DIR__. '/parts/html-foot.php'; ?>


