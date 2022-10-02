<?php
require __DIR__ . '/parts/connect_db_nora.php';

if(empty($_SESSION['user'])){
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];
$sql = "SELECT * FROM `member01` WHERE `id`=$member_id";
// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";

$rows = $pdo->query($sql)->fetchAll();

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
 <?php foreach($rows as $r): ?>
 <div class="info-content info-content-1 d-flex flex-column flex-sm-row">
    <div class="control d-flex flex-column justify-content-center align-items-center">
        <div class="person d-flex flex-sm-column flex-row justify-content-center align-items-center">
            <div class="imgbox">
                <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="" class="old-avatar">
            </div>
            
            <div class="name"><?= $r['name'] ?></div>
        </div>
        <ul class="d-flex flex-sm-column flex-row justify-content-center ">
            <li class="bdr"> <a href="info-edit.php?id=<?= $member_id ?>">資料修改</a> </li>
            <li > <a href="./info-pw.php?id=<?= $member_id ?>">修改密碼</a> </li>
        </ul>
    </div>
    <div class="list ">
        <form class="form needs-validation" name="form1" method="post" onsubmit="checkForm(); return false;">
            <div class="up-part d-flex flex-column align-items-center ">
                <div class="name-box inlong mb-3 ">
                    <label for="name" class="form-label">姓名</label>
                    <input type="name" class="form-control" id="name" name="name" value="<?= $r['name'] ?>  " disabled="disabled">
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                </div>
                <div class="email-box inlong mb-3 ">
                <label for="email" class="form-label">帳號 (email)</label>
                <input type="email "  class="form-control "  id="email" name="email" value="<?= $r['email'] ?> "disabled="disabled">
                <div class="invalid-feedback">
                    此處不可空值
                </div>


                    
                </div>
                <div class="mobile-box inlong mb-3">
                    <label for="mobile" class="form-label">手機</label>
                    <input type="mobile" class="form-control" id="mobile" name="mobile" value="<?= $r['mobile'] ?> "disabled="disabled">
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                    
                </div>
                <div class="birthdate-box inlong mb-3 ">
                    <label for="birthdate" class="form-label">生日</label>
                    <input type="date" class="form-control" id="birthdate" name="birthdate" value="<?= $r['birthdate'] ?>" disabled="disabled">
                    <div class="invalid-feedback">
                    此處不可空值或格式錯誤
                    </div>
                    
                </div>
                
            </div>
          </form> 
    </div>
    
 </div>
 <?php endforeach ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script>
//         const msgc = $('#msgContainer');

// function genAlert(msg, type='danger') {
//     const a = $(`
//     <div class="alert alert-${type}" role="alert">
//         ${msg}
//     </div>
//     `);

//     msgc.append(a);
//     setTimeout(()=>{
//         a.fadeOut(400, function(){
//             a.remove();
//         });
        
//     }, 2000);
// }




<?php include __DIR__. '/parts/html-foot.php'; ?>


