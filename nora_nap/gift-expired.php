<?php
require __DIR__ . '/parts/connect_db.php';


$sql = "SELECT * FROM `coupon` WHERE `member_sid`=1 AND `coupon_status` = 2";

$rows = $pdo->query($sql)->fetchAll();

$stateArray=['可用','已過期','已使用'];

?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__. '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


    <link rel="stylesheet" href="./nap_css/component_mobile2.css">
    <link rel="stylesheet" href="./nap_css/member-nav.css">
    <link rel="stylesheet" href="./nap_css/gift.css">
    
</head>
<?php include __DIR__. '/parts/navbar.php'; ?>



 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
     <div class="titlebox  "><h2>會員中心</h2></div>
     <div class="line"></div>
 
 <div class="partname-mb w-100">
    <div class="titlemb d-flex justify-content-center align-items-center"><h2>會員中心</h2></div>
</div>
 <div class="container1 d-flex justify-content-center mt-4">
    <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
        <li class="">
            <a href="./info-index.html" class="" >基本資料</a>  
        </li>
        <li class="">
            <a href="" class="">毛孩資料</a>  
        </li>
        <li class="bd-none1"">
            <a href="" class="#">訂單查詢</a>  
        </li>
        <li class="">
            <a href="" class="#">歷史發佈</a>  
        </li>
        <li class="">
            <a href="./gift.html" class="">我的關注</a>  
        </li>
        <li class="bd-none ">
            <a href="" class="inhere">優惠專區</a>  
        </li>
        

    </ul>
 </div>
 
</div>
<!-- 分頁 -->
<div class="top-pages">
<div class="top-page d-flex w-100 justify-content-center">
    <a href="./gift.html" >
        <div class="page  " >
            <h5>即將到期</h5>
        </div>
    </a>
    <a href="./gift-expired.html">
        <div class="page " >
            <h5>已過期</h5>
        </div>
    </a>
    <a href="./gift-used.html">
        <div class="page atpage" >
            <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt="">
            <img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt=""><h5>已使用</h5>
        </div>
    </a>
    
</div>

</div>



<!------ content ------>

<div class="container ">
<div class="row ">
    <?php foreach($rows as $r): ?>
        <div class="gift  mb-5 col-sm-6 col-md-6 col-xl-6 ">
            <p><?= $r['valid_time'] ?></p>
            <h3><?= $r['discount'] ?></h3>
            <div class="gift-expired">
                <h4><?= $stateArray[$r['coupon_status']] ?></5></h4>
            </div>
        </div>
    <?php endforeach ?>
        <!-- <div class="gift  mb-5 col-sm-6 col-md-6 col-xl-6 ">
            <p>2022/09/11 </p>
            <h3>100</h3>
            <div class="gift-expired">
                <h4>折價券已使用</5></h4>
            </div>
        </div>
        <div class="gift  mb-5 col-sm-6 col-md-6 col-xl-6 ">
            <p>2022/09/11 </p>
            <h3>100</h3>
            <div class="gift-expired">
                <h4>折價券已使用</5></h4>
            </div>
        </div>
        <div class="gift  mb-5 col-sm-6 col-md-6 col-xl-6 ">
            <p>2022/09/11 </p>
            <h3>100</h3>
            <div class="gift-expired">
                <h4>折價券已使用</5></h4>
            </div>
        </div> -->
        
        
    </div>
</div>

<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<?php include __DIR__. '/parts/html-foot.php'; ?>


