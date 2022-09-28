<?php

require __DIR__ . '/parts/connect_db_cy.php';
// require __DIR__ . '/parts/connect_db_penny.php';
$pageName = '訂房'; // 頁面名稱


// 在 MySQL 中取得房間的資料表，並抓取(fetch)全部資料表的欄位
$rooms = $pdo->query("SELECT * FROM `room_info` ORDER BY `sid`")->fetchAll();


?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->



</head>
<link rel="stylesheet" href="https://tainan.chamcham.com.tw/public/js/jqueryui/datepicker/datepicker.css">
<!-- <link rel="stylesheet" href="./nap_css/reset.css"> -->
<link rel="stylesheet" href="./nap_css/room_booking.css">
<?php include __DIR__ . '/parts/navbar.php'; ?>

<!-- 加自己的css -->



<!-- 日期搜尋 | date-search -->
<section class="date-search">
    <div class="date-search-container">
        <div class="date-search-row col-md-9">
            <div class="choose-box d-flex col-6 col-md-4 justify-content-center">
                <div class="choose-textbox">
                    <p>Check-In</p>
                    <h6>
                        <!-- 放日期 -->
                    </h6>
                    <p>
                        <!-- 月份/年分 -->
                    </p>
                    <input type="text" id="datepicker-in" class="checkIndate"></p>
                </div>
            </div>
            <div class="choose-box d-flex col-6 col-md-4 justify-content-center">
                <div class="choose-textbox">
                    <p>Check-Out</p>
                    <h6>
                        <!-- 放日期 -->
                    </h6>
                    <p>
                        <!-- 月份/年分 -->
                    </p>
                    <input type="text" id="datepicker-out" class="checkOutdate"></p>
                </div>
            </div>
            <div class="choose-box d-flex col-12 col-md-4 justify-content-center">
                <div class="choose-textbox selectRoom">
                    <p>Select</p>
                    <h6>0</h6>
                    <p>Room</p>
                    <div class="customSelect-box">
                        <ul class="customSelect d-flex">
                            <li class="select-li">1</li>
                            <li class="select-li">2</li>
                            <li class="select-li">3</li>
                            <li class="select-li">4</li>
                            <li class="select-li">5</li>
                            <li class="select-li">6</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="booking-box col-md-3 d-flex justify-content-center align-items-center">
            <p>查詢空房 <br>Search Room</p>
        </div>
    </div>
</section>

<!-- 房間搜尋結果 | room-result -->
<section class="room-result">
    <div class="room-result-container">
        <div class="room-result-row d-md-flex">
            <!-- 左邊-房間選擇 -->
            <div class="room-result-col col-md-7">
                <div class="room-null">
                    <div class="room-null-imgbox">
                        <img src="./img/component/icon/Search.svg" alt="">
                    </div>
                    <div class="room-null-text">請選擇預入住的日期與間數</div>
                </div>
                <div class="room-card-group">
                    <div class="room-card d-md-flex align-items-center">
                        <div class="card-imgbox col-md-4">
                            <img src="./img/nap-intro/roomInfo/single-room/single-02.jpg" alt="">
                        </div>
                        <div class="card-textbox col-md-8">
                            <h2><?= $rooms[0]['room_name'] ?></h2>
                            <div class="room-bed d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/Bed.svg" alt="">
                                </div>
                                <p>加大單人床 * 1</p>
                            </div>
                            <div class="room-limit d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/People.svg" alt="">
                                </div>
                                <p>上限 1 人 | 此房間不提供加人服務</p>
                            </div>
                            <div class="price-cr-group d-md-flex" data-id="<?= $rooms[0]['sid'] ?>">
                                <div class="price singleprice">NT$ <span><?= $rooms[0]['room_price'] ?></span> 元 / 晚</div>
                                <div class="choose-room d-flex justify-content-center align-items-center">
                                    <div id="single-minus" class="minus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                        </svg>

                                    </div>
                                    <input type="text" value="0" class="singleNum">間
                                    <div id="single-plus" class="plus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33C18.3431 33 17 31.6569 17 30L17 10C17 8.34315 18.3431 7 20 7C21.6569 7 23 8.34315 23 10L23 30C23 31.6569 21.6569 33 20 33Z" fill="white" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-card d-md-flex align-items-center">
                        <div class="card-imgbox col-md-4">
                            <img src="../nap_php/img/nap-intro/roomInfo/double-room/double-04.jpg" alt="">
                        </div>
                        <div class="card-textbox col-md-8">
                            <h2><?= $rooms[1]['room_name'] ?></h2>
                            <div class="room-bed d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/Bed.svg" alt="">
                                </div>
                                <p>加大單人床 * 2</p>
                            </div>
                            <div class="room-limit d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/People.svg" alt="">
                                </div>
                                <p>上限 2 人 | 此房間不提供加人服務</p>
                            </div>
                            <div class="price-cr-group d-md-flex" data-id="<?= $rooms[1]['sid'] ?>">
                                <div class="price doubleprice">NT$ <span><?= $rooms[1]['room_price'] ?></span> 元 / 晚</div>
                                <div class="choose-room d-flex justify-content-center align-items-center">
                                    <div id="double-minus" class="minus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                        </svg>

                                    </div>
                                    <input type="text" value="0" class="doubleNum">間
                                    <div id="double-plus" class="plus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33C18.3431 33 17 31.6569 17 30L17 10C17 8.34315 18.3431 7 20 7C21.6569 7 23 8.34315 23 10L23 30C23 31.6569 21.6569 33 20 33Z" fill="white" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="room-card d-md-flex align-items-center">
                        <div class="card-imgbox col-md-4">
                            <img src="../nap_php/img/nap-intro/roomInfo/quadra-room/quadra-05.jpg" alt="">
                        </div>
                        <div class="card-textbox col-md-8">
                            <h2><?= $rooms[2]['room_name'] ?></h2>
                            <div class="room-bed d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/Bed.svg" alt="">
                                </div>
                                <p>加大雙人床 * 2</p>
                            </div>
                            <div class="room-limit d-flex justify-content-center align-items-center justify-content-md-start">
                                <div class="icon-imgbox">
                                    <img src="../nap_php/img/component/icon/People.svg" alt="">
                                </div>
                                <p>上限 4 人 | 此房間不提供加人服務</p>
                            </div>
                            <div class="price-cr-group d-md-flex" data-id="<?= $rooms[2]['sid'] ?>">
                                <div class="price quadraprice">NT$ <span><?= $rooms[2]['room_price'] ?></span> 元 / 晚</div>
                                <div class="choose-room d-flex justify-content-center align-items-center">
                                    <div id="quadra-minus" class="minus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                        </svg>

                                    </div>
                                    <input type="text" value="0" class="quadraNum">間
                                    <div id="quadra-plus" class="plus-btn">
                                        <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="20" cy="20" r="20" fill="#7C8C38" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7 20C7 18.3431 8.34315 17 10 17H30C31.6569 17 33 18.3431 33 20C33 21.6569 31.6569 23 30 23H10C8.34315 23 7 21.6569 7 20Z" fill="white" />
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 33C18.3431 33 17 31.6569 17 30L17 10C17 8.34315 18.3431 7 20 7C21.6569 7 23 8.34315 23 10L23 30C23 31.6569 21.6569 33 20 33Z" fill="white" />
                                        </svg>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 右邊-訂房明細 -->
            <div class="room-result-col col-md-5">
                <div class="booking-detail-card">
                    <div class="left-content">
                        <div class="booking-date">
                            <div class="date-icon">
                                <img src="../nap_php/img/component/icon/calender.svg" alt="">
                            </div>
                            <div class="date-num">
                                <span class="checkInDate">
                                    <!-- 帶入checkIn的日期 -->
                                </span>
                                -
                                <span class="checkOutDate">
                                    <!-- 帶入checkOut的日期 -->
                                </span>
                                <span>(</span>
                                <span>
                                    <!-- 算出共幾晚 -->
                                </span>
                                <span>晚 )</span>
                            </div>
                        </div>
                        <div class="booking-room">
                            <div class="room-icon">
                                <img src="./img/component/icon/room.svg" alt="">
                            </div>
                            <div class="room-num">
                                <p><span class="totalRoom">0</span> 間房間</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="booking-detail-combine">
                    <div id="single-detail" class="booking-detail-content" data-id="<?= $rooms[0]['sid'] ?>">
                        <div class="name-cancel-btn d-flex justify-content-between align-items-center">
                            <div class="room-name">單人房 呼嚕嚕</div>
                            <div class="cancle-btn single-cancle">
                                <img src="../nap_php/img/component/icon/xmark.svg" alt="">
                            </div>
                        </div>
                        <div class="room-count">
                            <div class="per-room-night">
                                <p>x<span>1</span> 晚</p>
                            </div>
                            <div class="per-room-num single-room-num">
                                <p>x<span>1</span> 間</p>
                            </div>
                        </div>
                        <div class="room-detail-num">
                            <div class="room-detail-text">總價NT$</div>
                            <div class="room-detail-price single-price"><span>0</span></div>
                        </div>
                        <div class="price-include">
                            <p>(房價已包含稅金及其他費用)</p>
                        </div>
                    </div>
                    <div id="double-detail" class="booking-detail-content" data-id="<?= $rooms[1]['sid'] ?>">
                        <div class="name-cancel-btn d-flex justify-content-between align-items-center">
                            <div class="room-name">雙人房 皺皺鼻</div>
                            <div class="cancle-btn double-cancle">
                                <img src="../nap_php/img/component/icon/xmark.svg" alt="">
                            </div>
                        </div>
                        <div class="room-count">
                            <div class="per-room-night">
                                <p>x<span>1</span> 晚</p>
                            </div>
                            <div class="per-room-num double-room-num">
                                <p>x<span>1</span> 間</p>
                            </div>
                        </div>
                        <div class="room-detail-num">
                            <div class="room-detail-text">總價NT$</div>
                            <div class="room-detail-price double-price"><span>0</span></div>
                        </div>
                        <div class="price-include">
                            <p>(房價已包含稅金及其他費用)</p>
                        </div>
                    </div>
                    <div id="quadra-detail" class="booking-detail-content" data-id="<?= $rooms[2]['sid'] ?>">
                        <div class="name-cancel-btn d-flex justify-content-between align-items-center">
                            <div class="room-name">四人房 撓癢癢</div>
                            <div class="cancle-btn quadra-cancle">
                                <img src="../nap_php/img/component/icon/xmark.svg" alt="">
                            </div>
                        </div>
                        <div class="room-count">
                            <div class="per-room-night">
                                <p>x<span>1</span> 晚</p>
                            </div>
                            <div class="per-room-num quadra-room-num">
                                <p>x<span>1</span> 間</p>
                            </div>
                        </div>
                        <div class="room-detail-num">
                            <div class="room-detail-text">總價NT$</div>
                            <div class="room-detail-price quadra-price"><span>0</span></div>
                        </div>
                        <div class="price-include">
                            <p>(房價已包含稅金及其他費用)</p>
                        </div>
                    </div>
                    <div class="booking-detail-content-final">
                        <div class="total-count">
                            <div class="total-price">
                                <p>總價</p>
                            </div>
                            <div class="total-num">
                                <p>NT$ <span>0</span></p>
                            </div>
                        </div>
                        <div class="deposit-count">
                            <div class="deposit-price">應付訂金金額</div>
                            <div class="deposit-num">NT$ <span>0</span></div>
                        </div>
                        <div class="rest-count">
                            <div class="rest-price">剩餘尾款</div>
                            <div class="rest-num">NT$ <span>0</span></div>
                        </div>
                        <div class="rest-pay-notice">
                            <p>(請於現場付清)</p>
                        </div>
                    </div>
                    <div class="booking-btn">
                        <a href="room-booking-data(test-cy).php">填寫訂房資料</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>




<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->

<script src="./nap_js/room_booking.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>

<script>
    // function oopsAlert(){
    //     swal("汪汪汪汪!", "翻譯蒟蒻：您尚未選擇房間喔~", "warning");
    // };

    // $('.booking-btn a').click(function(){
    // if(+$('.total-num span').text() === 0){
    //     $('.booking-btn a').attr('href','./room_booking.php')
    // }
    // }); 
    // oopsAlert();



    const rooms = <?= json_encode($rooms, JSON_UNESCAPED_UNICODE) ?>;
    const rooms_dict = {};
    // price-cr-group

    for (let i of rooms) {
        rooms_dict[i.sid] = i;
    }

    const handleRoomNum = function(e) {
        const booking_detail_content = $(e.currentTarget).closest('.booking-detail-content');
        const price_cr_group = $(e.currentTarget).closest('.price-cr-group');
        const room_id = price_cr_group.attr('data-id') || booking_detail_content.attr('data-id');
        const num = +(price_cr_group.find('input').val() ? price_cr_group.find('input').val() : 0);
        // console.log('hi num', num);

        const day1 = new Date($('.date-num span').eq(0).text());
        const day2 = new Date($('.date-num span').eq(1).text());
        const singlePrice = $('.single-price span').text();
        const doublePrice = $('.double-price span').text();
        const quadraPrice = $('.quadra-price span').text();
        const totalNum = $('.totalRoom').text()

        // console.log('checkin:', day1);
        // console.log('checkout:', day2);

        const difference = Math.abs(day2 - day1);
        const days = difference / (1000 * 3600 * 24)
        // console.log('hi', days);
        // console.log('rooms_dict', rooms_dict);
        // console.log('data', {
        //     room_id,
        //     num
        // });

        rooms_dict[room_id].days = days;
        rooms_dict[room_id].num = num;
        // rooms_dict[room_id].singlePrice = singlePrice;
        // rooms_dict[room_id].doublePrice = doublePrice;
        // rooms_dict[room_id].quadraPrice = quadraPrice;
        // console.log(rooms_dict);

        const detailDate = $('.date-num').text();

        // localStorage.setItem('rooms_order', JSON.stringify(rooms_dict));


        $.get(
            'handle-room-order.php', {
                day1: dayjs(day1).format('YYYY/MM/DD'), 
                day2: dayjs(day2).format('YYYY/MM/DD'), 
                totalNum,
                room_id,
                num,
                days,
                // detailDate,
            },
            function(data) {
                console.log('RETURN DATA:', data);
                // showCartCount(data);
            },
            'json');

    };





    // $('.minus-btn').on('click', handleRoomNum);
    // $('.plus-btn').on('click', handleRoomNum);
</script>
<script src="./nap_js/room_booking.js"></script>

<?php include __DIR__ . '/parts/html-foot.php'; ?>