<?php
require __DIR__ . '/parts/connect_db.php';


if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];

$sql = "SELECT * FROM `coupon` WHERE `member_sid`=$member_id AND `coupon_status` = 0";

$rows = $pdo->query($sql)->fetchAll();

$stateArray = ['可用', '已使用', '已過期'];

?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = '會員中心'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->


<!-- <link rel="stylesheet" href="./nap_css/component_mobile.css"> -->
<!-- <link rel="stylesheet" href="./nap_css/member-nav.css">
    <link rel="stylesheet" href="./nap_css/love3.css"> -->

</head>

<?php include __DIR__ . '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">


<link rel="stylesheet" href="./nap_css/gift1.css?version=&lt;?php echo time(); ?&gt;">





<!------ menber-nav ------>
<!-- <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
    <div class="titlebox ">
        <h2>會員中心</h2>
    </div>
    <div class="line"></div>

    <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center">
            <h2>會員中心</h2>
        </div>
    </div>
    <div class="container1 d-flex justify-content-center mt-4">
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
            <li class="bd">
                <a href="./info-info.php" class="">基本資料</a>
            </li>
            <li class="bd">
                <a href="./member-pet.php" class="">毛孩資料</a>
            </li>
            <li class="bd bd-none">
                <a href="./list.php" class="#">訂單查詢</a>
            </li>
            <li class=" bd">
                <a href="./post.php" class="#">歷史發佈</a>
            </li>
            <li class=" bd">
                <a href="./love-pet.php" class="">我的關注</a>
            </li>
            <li class="">
                <a href="./gift.php" class="inhere">優惠專區</a>
            </li>


        </ul>
    </div>

</div> -->
<div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
    <div class="titlebox ">
        <h2>會員中心</h2>
    </div>
    <div class="line"></div>

    <div class="partname-mb w-100">
        <div class="titlemb d-flex justify-content-center align-items-center">
            <h2>會員中心</h2>
        </div>
    </div>
    <div class="container1 d-flex justify-content-center mt-4">
        <ul class="nav col-12 col-lg-auto me-lg-auto justify-content-center">
            <li class="bd">
                <a href="./info-info.php" class="inhere">基本資料</a>
            </li>
            <li class="bd">
                <a href="./member-pet.php" class="">毛孩資料</a>
            </li>
            <li class="bd bd-none">
                <a href="./list.php" class="#">訂單查詢</a>
            </li>
            <li class=" bd">
                <a href="./post.php" class="#">歷史發佈</a>
            </li>
            <li class=" bd">
                <a href="./love-pet.php" class="">我的關注</a>
            </li>
            <li class="">
                <a href="./gift.php" class="">優惠專區</a>
            </li>


        </ul>
    </div>

</div>


<!------ menber-nav ------>
<!-- 分頁 -->
<div class="top-pages">
    <div class="top-page d-flex w-100 justify-content-center">
        <a href="./gift.php">
            <div class="page  atpage">
                <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt="">
                <img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>即將到期</h5>
            </div>
        </a>
        <a href="./gift-expired.php">
            <div class="page ">
                <h5>已過期</h5>
            </div>
        </a>
        <a href="./gift-used.php">
            <div class="page ">
                <h5>已使用</h5>
            </div>
        </a>

    </div>

</div>



<!------ content ------>

<div class="container " style="min-height:200px">
    <div class="row ">
        <?php foreach ($rows as $r) : ?>
            <div class="gift  mb-5 col-sm-6 col-md-6 col-xl-6 ">
                <p><?= $r['valid_time'] ?></p>
                <h3><?= $r['discount'] ?></h3>
                <!-- <div class="gift-expired">
                <h4></5></h4>
            </div> -->
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

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>