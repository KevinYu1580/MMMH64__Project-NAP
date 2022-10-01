<?php
require __DIR__ . '/parts/connect_db_nora.php';


$sql = "SELECT * FROM `event_order_detail` LEFT join event_order on event_order.sid = event_order_detail.event_order_sid LEFT join event_detail on event_detail.sid = event_order_detail.event_order_sid where member_sid=1 AND `order_status` = 1 AND `payment_way` = 1";


$rows = $pdo->query($sql)->fetchAll();

$sql_t = "SELECT * FROM `room_order_detail` 
LEFT join room_order on room_order.sid = room_order_detail.room_order_sid 
LEFT join room_info on room_info.sid = room_order_detail.room_sid 
where member_sid=1 AND `order_status` = 1 AND `payment_way` = 1";


$rowsA = $pdo->query($sql_t)->fetchAll();

$statusArray=['已付款','尚未付款'];
$payArray=['信用卡','ATM'];

?>

<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">

    
</head>

<?php include __DIR__. '/parts/navbar.php'; ?>

<link rel="stylesheet" href="./nap_css/member-nav2.css">

<link rel="stylesheet" href="./nap_css/list1.css">




 <!------ menber-nav ------>
 <div class="wrap d-flex flex-column justify-content-center align-items-center w-100">
     
         
     <div class="titlebox "><h2>會員中心</h2></div>
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
        <a href="./list.php" >
            <div class=" page1 atpage" >
                <img class="decorate-big" src="./img/self/n/member/triangle.svg" alt=""><img class="decorate-sm" src="./img/self/n/member/triangle-s.svg" alt="">
                <h5>正在進行</h5>
            </div>
        </a>
        <a href="./list-end.php">
            <div class=" page1" >
                <h5>歷史訂單</h5>
            </div>
        </a>
        
        
    </div>
    
</div>

 <!------ content ------>

<div class="container ">

<div class="container-pc ">
    <div class="ul ">
        <li class="d-flex justify-content-between bd-none p top-li">
            <h3 class="">訂單編號</h3>
            <h3 class="">繳費期限</h3>
            <h3 class="">虛擬帳號</h3>
            <h3 class="h3-sm">金額</h3>
            <h3 class="h3-sm">付款狀態</h3>
            <button class="btn btn-primary disabled" style="visibility:hidden" >
                <img src="./img/self/n/list/Vector.svg" alt="">
              </button>
            
        </li>
        <?php foreach($rows as $r): ?>
        <li class="d-flex flex-column bd-none">
            <div class="text d-flex justify-content-between ">
                <h3 ><?= $r['event_order_id'] ?></h3>
                <h3><?= $r['payment_deadline'] ?> 23:49:30</h3>
                <h3>2345-6789-0000-1234</h3>
                <h3 class="h3-sm pricered">NT$ <?= $r['event_order_price'] ?></h3>
                <h3 class="h3-sm"><?= $statusArray[$r['order_status']] ?></h3>
                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    <img class="menu__icon--open" src="./img/self/n/list/Vector.svg" alt="">
                    <img src="./img/self/n/list/Vector-up.svg" alt="" class="menu__icon--close down " ></button>
            </div>
              
              <div class="collapse" id="collapseExample1">
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
                      <div class="price d-flex align-items-center"><h3>NT$ <?= $r['event_order_origin_price'] ?></h3></div>
                  </div>
                </div>
              </div>
        </li>
        <?php endforeach ?>
        <?php foreach($rowsA as $n): ?>
        <li class="d-flex flex-column bd-none">
            <div class="text d-flex justify-content-between ">
                <h3 ><?= $n['room_order_id'] ?></h3>
                <h3><?= $n['payment_deadline'] ?> 23:49:30</h3>
                <h3>2345-6789-0000-1234</h3>
                <h3 class="h3-sm pricered">NT$ <?= $n['room_order_deposit'] ?></h3>
                <h3 class="h3-sm"><?= $statusArray[$n['order_status']] ?></h3>
                <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
                    <img class="menu__icon--open" src="./img/self/n/list/Vector.svg" alt="">
                    <img src="./img/self/n/list/Vector-up.svg" alt="" class="menu__icon--close down " ></button>
            </div>
              
              <div class="collapse" id="collapseExample3">
                <div class="card card-body">
                  <div class="all-list d-flex justify-content-between">
                      <div class="info d-flex">
                          <img src="./img/room_img/<?= $n['room_img'] ?>.jpg" alt="">
                          <div class="buy-list my-auto ">
                                <h4><?= $n['room_name'] ?></h4>
                                <p><?= $n['stay_date'] ?></p>
                                <p>X <?= $n['stay_night'] ?>晚   X <?= $n['room_quantity'] ?>間</p>
                          </div> 
                      </div>
                      <div class="price d-flex align-items-center"><h3>NT$ <?= $n['room_order_origin_price'] ?></h3></div>
                  </div>
                </div>
              </div>
        </li>
        <?php endforeach ?>

 </div>
</div>
<div class="container-mb">
<?php foreach($rows as $r): ?>
    <div class="part w-100 mb-4">
        <table class="d-flex justify-content-center w-100">
            <tr>
                <td >訂單編號</td>
                <td><?= $r['event_order_id'] ?></td>
            </tr>
            <tr>
                <td>繳費期限</td>
                <td><?= $r['payment_deadline'] ?> 23:49:30</td>
            </tr>
            <tr>
                <td>虛擬帳號</td>
                <td>2345-6789-0000-1234</td>
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
        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
            <img class="menu__icon--open" src="./img/self/n/list/Vector-mb.svg" alt="">
            <img src="./img/self/n/list/Vector-up-mb.svg" alt="" class="menu__icon--close down " >
        </button>
        <div class="collapse " id="collapseExample1">
            <div class="card card-body d-flex justify-content-center">
              <div class="all-list d-flex justify-content-center">
                  <div class="info d-flex">
                      <img src="./img/events/<?= $r['event_img'] ?>.jpg" alt="">
                      <div class="buy-list my-auto ">
                            <h4><?= $r['event_name'] ?></h4>
                            <p><?= $r['event_date'] ?></p>
                            <p>人數x<?= $r['quantity'] ?></p>
                            <div class="price d-flex justify-content-end"><h3>NT$ <?= $r['event_order_origin_price'] ?></h3></div>
                      </div>
                  </div>
                  
              </div>
            </div>
          </div>
    </div>
    <?php endforeach ?>
    <?php foreach($rowsA as $n): ?>
    <div class="part w-100 mb-4">
        <table class="d-flex justify-content-center w-100">
            <tr>
                <td >訂單編號</td>
                <td><?= $n['room_order_id'] ?></td>
            </tr>
            <tr>
                <td>繳費期限</td>
                <td><?= $n['payment_deadline'] ?> 23:49:30</td>
            </tr>
            <tr>
                <td>虛擬帳號</td>
                <td>2345-6789-0000-1234</td>
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
        <button class="btn " type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample">
            <img class="menu__icon--open" src="./img/self/n/list/Vector-mb.svg" alt="">
            <img src="./img/self/n/list/Vector-up-mb.svg" alt="" class="menu__icon--close down " >
        </button>
        <div class="collapse " id="collapseExample3">
            <div class="card card-body d-flex justify-content-center">
              <div class="all-list d-flex justify-content-center">
                  <div class="info d-flex">
                      <img src="./img/room_img/<?= $n['room_img'] ?>.jpg" alt="">
                      <div class="buy-list my-auto ">
                            <h4><?= $n['room_name'] ?></h4>
                            <p><?= $n['stay_date'] ?></p>
                            <p>X <?= $n['stay_night'] ?>晚   X <?= $n['room_quantity'] ?>間</p>
                            <div class="price d-flex justify-content-end"><h3>NT$ <?= $n['room_order_origin_price'] ?></h3></div>
                      </div>
                  </div>
                  
              </div>
            </div>
          </div>
    </div>
    <?php endforeach ?>
</div>



    
 </div>




<!------ content ------>


<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__. '/parts/nap-footer.php'; ?>
<?php include __DIR__. '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>


<?php include __DIR__. '/parts/html-foot.php'; ?>


