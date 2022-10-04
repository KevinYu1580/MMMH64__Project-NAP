<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = '活動報名注意事項'; // 頁面名稱


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
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/event-enroll-notice.css">




<div class="all-container">
    <!------ 活動 notice 這裡開始 ------>
    <div class="mobile-backpage">
        <svg width="40" height="23" viewBox="0 0 40 23" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M17.8787 0.87868C19.0503 -0.292893 20.9497 -0.292893 22.1213 0.87868L39.1213 17.8787C40.2929 19.0503 40.2929 20.9497 39.1213 22.1213C37.9497 23.2929 36.0502 23.2929 34.8787 22.1213L20 7.24264L5.12132 22.1213C3.94975 23.2929 2.05025 23.2929 0.87868 22.1213C-0.292893 20.9497 -0.292893 19.0503 0.87868 17.8787L17.8787 0.87868Z" fill="#FFFFFF" />
        </svg>
        <a href="#">套裝活動報名須知</a>
    </div>

    <div class="all-container">
        <div class="backpage">
            <!-- <img src="./img/component/icon/Exclude.svg" alt=""> -->
            <a href="events_detail.php?page=event&sid=<?= $event['sid'] ?>"><img src="./img/component/icon/Exclude.svg" alt=""></a>
            <a href="events_detail.php?page=event&sid=<?= $event['sid'] ?>">返回</a>
        </div>
        <div class="notice row col-10">
            <div class="notice-title">
                <h4>給即將報名認養套裝活動的您需要知道的大小事！</h4>
            </div>
            <div class="notice-content">
                <div class="triangle">
                    <img src="./img/component/icon/down-triangle.svg" alt="">
                </div>
                <ul>
                    <li>身分證字號為活動保險需求，請務必正確填寫！</li>
                    <li>一次報名活動僅限四人，大於四人之需求請分次報名。</li>
                    <li>若會員為活動參與者請於新增參與人資料處勾選加入會員資料。</li>
                    <li><span>套裝活動住宿房型依照人數分配，無法選擇</span>；本園區共有三種人數房型（單人、雙人、四人），如報名人數為四人，將優先以雙人房加床形式提供，歡迎大家揪團參加！</li>
                    <li>點選報名即視為清楚了解以上資訊，接下來快點手刀報名吧！</li>
                </ul>
                <div class="notice-btn">
                    <a href="event-enroll-data.php?sid=<?= $event['sid'] ?>">手刀報名 GO</a>
                </div>
            </div>
        </div>
        <div class="deco-img">
            <img src="./img/component/illustration/illustration-68.png" alt="">
        </div>
    </div>
</div>





<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<!-- 自己的js放在這 -->


<?php include __DIR__ . '/parts/html-foot.php'; ?>