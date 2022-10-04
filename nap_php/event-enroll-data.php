<?php
require __DIR__ . '/parts/connect_db.php';

$pageName = '活動報名'; // 頁面名稱

$where = ' WHERE 1 ';  // 起頭

if (empty($_SESSION['user'])) {
    header('Location: login.php');
    exit;
}

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM event_detail $where ";
$total_events = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];


// 確認在 url 中顯示對應 id
if (isset($_GET['sid'])) {

    $stmt = $pdo->prepare('SELECT * FROM event_detail WHERE `sid` = ?');
    $stmt->execute([$_GET['sid']]);

    // 在 MySQL 中取得活動資料(fetch)並存入陣列
    $event = $stmt->fetch(PDO::FETCH_ASSOC);

    // 檢查是否有活動存在 （陣列中非空值）
    if (!$event) {
        // 如果陣列中沒有活動顯示錯誤訊息
        exit('您所選擇的活動不存在！');
    }
} else {
    // 如果找不到對應id顯示錯誤訊息
    exit('您所選擇的活動不存在！');
}


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->




</head>
<link rel="stylesheet" href="./nap_css/event-enroll-data.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>




<div class="all-container">
    <!------ 活動 notice 這裡開始 ------>
    <div class="mobile-backpage">
        <a href="enroll-event-notice.php?page=event&sid=<?= $event['sid'] ?>"><svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8787 0.87868C19.0503 -0.292893 20.9497 -0.292893 22.1213 0.87868L39.1213 17.8787C40.2929 19.0503 40.2929 20.9497 39.1213 22.1213C37.9497 23.2929 36.0502 23.2929 34.8787 22.1213L20 7.24264L5.12132 22.1213C3.94975 23.2929 2.05025 23.2929 0.87868 22.1213C-0.292893 20.9497 -0.292893 19.0503 0.87868 17.8787L17.8787 0.87868Z" fill="#FFFFFF" />
            </svg></a>

        <a href="enroll-event-notice.php?sid=<?= $event['sid'] ?>">活動報名</a>
    </div>

    <!------ 上方返回 ------>
    <div class="backpage">
        <a href="enroll-event-notice.php?sid=<?= $event['sid'] ?>"><img src="./img/component/icon/Exclude.svg" alt=""></a>
        <a href="enroll-event-notice.php?sid=<?= $event['sid'] ?>">返回</a>
    </div>

    <!------ 活動報名表頭 ------>
    <div class="enroll-data-title">
        活動報名
    </div>

    <!------ 套裝下方內容 ------>
    <div class="data-content">
        <div class="slider">
            <div class="enroll-detail-card col-md-5">
                <div class="card-deco">
                    <div class="card-title">訂單明細</div>
                    <div class="event-name"><?= $event['event_name'] ?></div>
                    <div class="event-date"><?= $event['event_date'] ?></div>
                    <div class="perevent-price row">
                        <div class="per col-6">NT$ <span><?= $event['event_price'] ?></span></div>
                        <div class="col enroll-num">0</div>
                        <div class="col-2">人</div>
                    </div>
                    <div class="payable row">
                        <div class="col-6">應付總金額</div>
                        <div class="col-2">NT$</div>
                        <div class="col-4 total-price">0</div>
                    </div>
                    <div class="price-info">
                        ・套裝活動費用含住宿、保險及兩日餐食(Day1 午晚餐及 Day2 早午餐）
                    </div>
                    <div class="enroll-card-btn">

                        <div class="add-to-cart-btn">
                            <button class="napBtn_fixed_filled" name="add-to-cart" form="enroll-list" type="submit" data-sid="<?= $event['sid'] ?>" onclick="goPay(event)">
                                <span>前往結帳</span>
                            </button>
                        </div>
                        <div class="check-bill-btn">
                            <button class="napBtn_fixed_outlined" name="add-to-cart" form="enroll-list" type="submit" data-sid="<?= $event['sid'] ?>" onclick="addToCart(event)">
                                <span>加入購物車</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="enroll-data-left col-md-6 order-first">
            <div class="add-member-btn">
                <a class="napBtn_fixed_filled" href="javascript:" type="button">
                    <span>+ 新增參與人資料</span>
                </a>
            </div>
            <div class="enroll">
                <div class="enroll-title">
                    <h4>參與人資料</h4>
                    <div class="triangle">
                        <img src="./img/component/icon/down-triangle.svg" alt="">
                    </div>

                </div>
                <div class="enroll-content-null">
                    <p>目前無參與人資料，請點選『新增參與人資料』加入！</p>
                </div>


                <form action="enroll-data-api.php" method="POST" id="enroll-list">
                    <!-- 
                        <div class="enroll-content-form">
                        <div class="delete-btn">
                            <a class="delete" href="javascript:" type="button">
                                <img src="./img/component/icon/xmark.svg" alt="">
                            </a>
                        </div>
                        <div class="count-num"></div>
                        <div class="enroll-other">
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" name="add-member-data">
                                <label class="form-check-label" for="exampleCheck1">加入會員資料（會員為活動參與者）</label>
                            </div>
                            <div class="mb-3">
                                <label for="name" class="form-label">姓名</label>
                                <input type="text" class="form-control" id="name" name="name[]" required>
                            </div>
                            <div class="mb-3">
                                <label for="phone" class="form-label">手機</label>
                                <input type="text" class="form-control" id="mobile" name="mobile[]" maxlength="10" required>
                            </div>
                            <div class="mb-3">
                                <label for="birthdate" class="form-label">生日</label>
                                <input type="date" class="form-control" id="birthdate" name="birthdate[]" required>
                            </div>
                            <div class="mb-3">
                                <label for="id-num" class="form-label">身分證字號</label>
                                <input type="text" class="form-control" id="id-num" name="id-num[]" maxlength="10" required>
                            </div>
                            <div class="mb-3">
                                <label for="id-num" class="form-label">飲食習慣</label>
                                <fieldset>
                                    <div class="mb-3">
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio1" name="eating-habit" value="葷">
                                            <label class="form-check-label" for="inlineRadio1">葷</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio2" name="eating-habit" value="全素">
                                            <label class="form-check-label" for="inlineRadio2">全素</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input class="form-check-input" type="radio" id="inlineRadio3" name="eating-habit" value="奶蛋素">
                                            <label class="form-check-label" for="inlineRadio3">奶蛋素</label>
                                        </div>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div> 
                -->


                    <div id="enroll-area">

                    </div>
                </form>


                <div class="enroll-content-bottom"></div>
            </div>
        </div>
    </div>
</div>




<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>

<script src="./nap_js/event-enroll-data.js?version=&lt;?php echo time(); ?&gt;"></script>
<script>
    function goPay(event) {
        const btn = $(event.currentTarget);
        const qty = getEnrollContentFormNum();
        //qty 數量這裡是用$('.enroll-content-form').length算人數


        // const qty = btn.closest('.card-body').find('select').val();
        const sid = btn.attr('data-sid');
        //在送出btn上下屬性

        console.log({
            sid,
            qty
        });
        $.get(
            'handle-event-cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                showCartCount(data);
            },
            'json');
        window.location.replace("event-cart.php");

    }

    function addToCart(event) {
        Swal.fire({
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })

        const btn = $(event.currentTarget);
        const qty = getEnrollContentFormNum();
        //qty 數量這裡是用$('.enroll-content-form').length算人數


        // const qty = btn.closest('.card-body').find('select').val();
        const sid = btn.attr('data-sid');
        //在送出btn上下屬性

        console.log({
            sid,
            qty
        });
        $.get(
            'handle-event-cart.php', {
                sid,
                qty
            },
            function(data) {
                console.log(data);
                showCartCount(data);
            },
            'json');


        window.location.replace("events_page.php");
    }
</script>
<?php include __DIR__ . '/parts/html-foot.php'; ?>