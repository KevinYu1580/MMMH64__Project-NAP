<?php
require __DIR__ . '/parts/connect_db.php';

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}
$member_id = $_SESSION['user']['id'];

// $sql = "SELECT * FROM `likes` WHERE `member_sid`=1 AND `like_type` = 1";
// $sql_t = "SELECT * FROM `likes` WHERE `member_sid`= 1";
$sql = "SELECT * FROM `event_order_detail` 
LEFT join event_order on event_order.sid = event_order_detail.event_order_sid 
LEFT join event_detail on event_detail.sid = event_order_detail.event_sid 
where member_sid=$member_id AND `order_status` = 0 ";


$rows = $pdo->query($sql)->fetchAll();

$sql_t = "SELECT * FROM `room_order_detail` 
LEFT join room_order on room_order.sid = room_order_detail.room_order_sid 
LEFT join room_info on room_info.sid = room_order_detail.room_sid 
where member_sid=$member_id AND `order_status` = 0 ";


$rowsA = $pdo->query($sql_t)->fetchAll();

$statusArray = ['已付款', '尚未付款'];
$payArray = ['信用卡', 'ATM'];

?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = '會員中心'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">


</head>

<?php include __DIR__ . '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav.css?version=&lt;?php echo time(); ?&gt;">

<link rel="stylesheet" href="./nap_css/list1.css?version=&lt;?php echo time(); ?&gt;">




<!------ menber-nav ------>
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
                <a href="./info-info.php" class="">基本資料</a>
            </li>
            <li class="bd">
                <a href="./member-pet.php" class="">毛孩資料</a>
            </li>
            <li class="bd bd-none">
                <a href="./list.php" class="inhere">訂單查詢</a>
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
        <a href="./list.php">
            <div class=" page1 ">

                <h5>正在進行</h5>
            </div>
        </a>
        <a href="./list-end.php">
            <div class=" page1 atpage">
                <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt=""><img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>歷史訂單</h5>
            </div>
        </a>


    </div>

</div>

<!------ content ------>

<div class="container" style="min-height:300px">

    <div class="container-pc m-auto">
        <ul>
            <li class="d-flex justify-content-between bd-none p top-li">
                <h3 class="">訂單編號</h3>
                <h3 class="">訂單成立時間</h3>
                <h3 class="">付款方式</h3>
                <h3 class="h3-sm">金額</h3>
                <h3 class="h3-sm">付款狀態</h3>
                <button class="btn btn-primary disabled" style="visibility:hidden">
                    <img src="./img/component/icon/arrow_down.svg" alt="">
                </button>

            </li>
            <?php foreach ($rows as $r) : ?>
                <li class="d-flex flex-column bd-none">
                    <div class="text d-flex justify-content-between ">
                        <h3><?= $r['event_order_id'] ?></h3>
                        <h3><?= $r['created_at'] ?></h3>
                        <h3><?= $statusArray[$r['payment_way']] ?></h3>
                        <h3 class="h3-sm pricered">NT$ <?= $r['event_order_price'] ?></h3>
                        <h3 class="h3-sm"><?= $statusArray[$r['order_status']] ?></h3>
                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $r['event_order_sid'] ?>" aria-expanded="false" aria-controls="collapseExample">
                            <img class="menu__icon--open" src="./img/component/icon/arrow_down.svg" alt="">
                            <img src="./img/component/icon/arrow_up.svg" alt="" class="menu__icon--close down "></button>
                    </div>

                    <div class="collapse" id="collapseExample<?= $r['event_order_sid'] ?>">
                        <div class="card card-body">
                            <div class="all-list d-flex justify-content-between">
                                <div class="info d-flex">
                                    <img src="./img/events/<?= $r['event_img'] ?>.jpg" alt="">
                                    <div class="buy-list my-auto ">
                                        <h4><?= $r['event_name'] ?></h4>
                                        <p><?= $r['event_date'] ?></p>
                                        <p>人數x<?= $r['quantity'] ?></p>
                                    </div>
                                </div>
                                <div class="price d-flex align-items-center">
                                    <h3>NT$ <?= $r['event_order_origin_price'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
            <?php foreach ($rowsA as $n) : ?>
                <li class="d-flex flex-column bd-none">
                    <div class="text d-flex justify-content-between ">
                        <h3><?= $n['room_order_id'] ?></h3>
                        <h3><?= $n['create_at'] ?> </h3>
                        <h3><?= $statusArray[$r['payment_way']] ?></h3>
                        <h3 class="h3-sm pricered">NT$ <?= $n['room_order_deposit'] ?></h3>
                        <h3 class="h3-sm"><?= $statusArray[$n['order_status']] ?></h3>
                        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $n['room_order_sid'] ?>" aria-expanded="false" aria-controls="collapseExample">
                            <img class="menu__icon--open" src="./img/component/icon/arrow_down.svg" alt="">
                            <img src="./img/component/icon/arrow_up.svg" alt="" class="menu__icon--close down "></button>
                    </div>

                    <div class="collapse" id="collapseExample<?= $n['room_order_sid'] ?>">
                        <div class="card card-body">
                            <div class="all-list d-flex justify-content-between">
                                <div class="info d-flex">
                                    <img src="./img/room_img/<?= $n['room_img'] ?>.jpg" alt="">
                                    <div class="buy-list my-auto ">
                                        <h4><?= $n['room_name'] ?></h4>
                                        <p><?= $n['check_in'] ?> ~ <?= $n['check_in'] ?> </p>
                                        <p>X <?= $n['stay_night'] ?>晚 X <?= $n['room_quantity'] ?>間</p>
                                    </div>
                                </div>
                                <div class="price d-flex align-items-center">
                                    <h3>NT$ <?= $n['room_order_origin_price'] ?></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            <?php endforeach ?>
            <h5 class="d-flex pt-5 justify-content-center" style="color:darkgray">
                尚無更多訂單
            </h5>
        </ul>
    </div>
    <div class="container-mb">
        <?php foreach ($rows as $r) : ?>
            <div class="part w-100 mb-4">
                <table class="d-flex justify-content-center w-100">
                    <tr>
                        <td>訂單編號</td>
                        <td><?= $r['event_order_id'] ?></td>
                    </tr>
                    <tr>
                        <td>訂單成立時間</td>
                        <td><?= $r['created_at'] ?></td>
                    </tr>
                    <tr>
                        <td>付款方式</td>
                        <td><?= $statusArray[$r['payment_way']] ?></td>
                    </tr>
                    <tr>
                        <td>金額</td>
                        <td class="pricered">NT$ <?= $r['event_order_price'] ?></td>
                    </tr>
                    <tr>
                        <td>付款狀態</td>
                        <td class="priceblod"><?= $statusArray[$r['order_status']] ?></td>
                    </tr>
                </table>
                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $r['event_order_sid'] ?>" aria-expanded="false" aria-controls="collapseExample">
                    <img class="menu__icon--open" src="./img/self/n/list/Vector-mb.svg" alt="">
                    <img src="./img/self/n/list/Vector-up-mb.svg" alt="" class="menu__icon--close down ">
                </button>
                <div class="collapse " id="collapseExample<?= $r['event_order_sid'] ?>">
                    <div class="card card-body d-flex justify-content-center">
                        <div class="all-list d-flex justify-content-center">
                            <div class="info d-flex">
                                <img src="./img/events/<?= $r['event_img'] ?>.jpg" alt="">
                                <div class="buy-list my-auto ">
                                    <h4><?= $r['event_name'] ?></h4>
                                    <p><?= $r['event_date'] ?></p>
                                    <p>人數x<?= $r['quantity'] ?></p>
                                    <div class="price d-flex justify-content-end">
                                        <h3>NT$ <?= $r['event_order_origin_price'] ?></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <?php foreach ($rowsA as $n) : ?>
            <div class="part w-100 mb-4">
                <table class="d-flex justify-content-center w-100">
                    <tr>
                        <td>訂單編號</td>
                        <td><?= $n['room_order_id'] ?></td>
                    </tr>
                    <tr>
                        <td>訂單成立時間</td>
                        <td><?= $n['create_at'] ?></td>
                    </tr>
                    <tr>
                        <td>付款方式</td>
                        <td><?= $statusArray[$r['payment_way']] ?></td>
                    </tr>
                    <tr>
                        <td>金額</td>
                        <td class="pricered">NT$ <?= $n['room_order_deposit'] ?></td>
                    </tr>
                    <tr>
                        <td>付款狀態</td>
                        <td class="priceblod"><?= $statusArray[$n['order_status']] ?></td>
                    </tr>
                </table>
                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample<?= $n['room_order_sid'] ?>" aria-expanded="false" aria-controls="collapseExample">
                    <img class="menu__icon--open" src="./img/self/n/list/Vector-mb.svg" alt="">
                    <img src="./img/self/n/list/Vector-up-mb.svg" alt="" class="menu__icon--close down ">
                </button>
                <div class="collapse " id="collapseExample<?= $n['room_order_sid'] ?>">
                    <div class="card card-body d-flex justify-content-center">
                        <div class="all-list d-flex justify-content-center">
                            <div class="info d-flex">
                                <img src="./img/room_img/<?= $n['room_img'] ?>.jpg" alt="">
                                <div class="buy-list my-auto ">
                                    <h4><?= $n['room_name'] ?></h4>
                                    <p><?= $n['check_in'] ?> ~ <?= $n['check_in'] ?> </p>
                                    <p>X <?= $n['stay_night'] ?>晚 X <?= $n['room_quantity'] ?>間</p>
                                    <div class="price d-flex justify-content-end">
                                        <h3>NT$ <?= $n['room_order_origin_price'] ?></h3>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach ?>
        <h5 class="d-flex pt-3 justify-content-center" style="color:darkgray">
                尚無更多訂單
            </h5>
    </div>




</div>




<!------ content ------>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>



<?php include __DIR__ . '/parts/html-foot.php'; ?>