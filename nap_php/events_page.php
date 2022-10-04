<?php
require __DIR__ . '/parts/connect_db.php';

$pageName = '活動檔期'; // 頁面名稱


// 每頁顯示幾筆活動資料
$perPage = 5;

// 顯示在url: page=?
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? (int)$_GET['page'] : 1;




$where ='WHERE event_status=1';

// $where = ' WHERE 1 ';  // 起頭

// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM event_detail $where ";
$total_events = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數用無條件進位
$totalPages = ceil($total_events / $perPage);


$events = [];
//有資料才執行
if ($total_events > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }

    // 取得該頁面的資料
    $sql = sprintf(
        "SELECT * FROM `event_detail` %s ORDER BY `sid` ASC LIMIT %s, %s",
        $where,
        ($page - 1) * $perPage,
        $perPage
    );
    $events = $pdo->query($sql)->fetchAll();
}

?>

<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->

<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

<!-- 加自己的css -->



</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">


<link rel="stylesheet" href="./nap_css/events_page1.css?version=&lt;?php echo time(); ?&gt;">


<!-- 活動頁面banner | events-banner -->
<section class="events-banner">
    <div class="events-banner-row-mb">
        <div class="events-banner-col col-lg-6">
            <div class="events-banner-package">
                <div class="events-banner-package-textbox">
                    <h3>PACKAGE EVENTS</h3>
                    <h2>浪浪套裝活動</h2>
                    <p>歡迎你來到N.A.P.園區，尋找你命定的另一「伴」！<span> N.A.P.透過各種活動與知識課程，</span>讓你與浪浪們在兩日的相處下能透過活動更加的了解彼此。</p>
                    <div class="events-banner-package-btn">
                        <a href="#package-switch" onclick="getData({cate:0,page:1})">查看活動</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="events-banner-col col-lg-6">
            <div class="events-banner-special">
                <div class="events-banner-special-textbox">
                    <h3>SPECIAL EVENTS</h3>
                    <h2>每月特別活動</h2>
                    <p>每月有配合節慶的活動外，還有專業動物醫學講師開班舉辦講座課程，快帶家中毛孩來參加並留下美好回憶吧！</p>
                    <div class="events-banner-special-btn">
                        <a href="#special-switch" onclick="getData({cate:1,page:1})">查看活動</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="events-banner-ai01-imgbox">
            <img src="./img/component/illustration/illustration-66.png" alt="">
        </div>
    </div>
    <div class="events-banner-row-pc">

        <div class="banner-special-pc">
            <div class="events-banner-special-textbox">
                <h3>SPECIAL EVENTS</h3>
                <h2>每月特別活動</h2>
                <p>N.A.P.精心準備的主題活動，不僅有配合節慶的每月活動外，還有專業動物醫學講師開班舉辦講座課程，快與您的毛孩子一同參加並留下美好回憶吧！</p>
                <div class="events-banner-special-btn">
                    <a href="#special-switch" onclick="getData({cate:1,page:1})">查看活動</a>
                </div>
            </div>
        </div>

        <div class="banner-package-pc-box">
            <div class="banner-package-pc">
                <div class="events-banner-package-textbox">
                    <h3>PACKAGE EVENTS</h3>
                    <h2>浪浪套裝活動</h2>
                    <p>歡迎你來到N.A.P.園區，尋找你命定的另一「伴」！<span> N.A.P.透過各種活動與知識課程，</span>讓你與浪浪們在兩日的相處下能透過活動更加的了解彼此。</p>
                    <div class="events-banner-package-btn">
                        <a href="#package-switch" onclick="getData({cate:0,page:1})">查看活動</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="events-banner-ai01-imgbox">
            <img src="./img/component/illustration/illustration-66.png" alt="">
        </div>
    </div>
</section>

<!-- 選擇器 | events-switch -->
<section class="events-switch">
    <div class="events-switch-frame my-option cate" data-val="0">
        <a id="package-switch" class="package-switch d-flex justify-content-center align-items-center" onclick="getData({cate:0,page:1})">
            浪浪套裝活動
        </a>
        <a id="special-switch" class="special-switch d-flex justify-content-center align-items-center" onclick="getData({cate:1,page:1})">
            每月特別活動
        </a>
    </div>
</section>

<!-- 活動卡片 | events-card -->
<section class="events-card">
    <div class="events-card-container">
        <div class="evnets-card-group-mb">
            <div class="events-card-row-mb d-flex d-md-block" id="eventCard">

                <!-- 卡片在這裡 -->
            </div>
        </div>

    </div>
</section>

<!------ 頁數選擇器 PC -------->
<div class="page_slec">
    <nav aria-label="Page navigation example">
        <ul class="pagination">
            <li class="page-item <?= $page == 1 ? 'disabled' : '' ?>">
                <a class="page-link" href="?<?php $qsp['page'] = $page - 1;
                                            echo http_build_query($qsp); ?>">
                    <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow" d="M61.4 16.68V18.18H69.62V16.68H61.4ZM53.02 26.16V27.66H70.98V26.16H53.02ZM60.54 10.5V26.96H62.12V10.5H60.54ZM72.88 18.38V20.02H91.18V18.38H72.88ZM97.08 18.62H107.18V20.46H97.08V18.62ZM97.08 21.62H107.18V23.46H97.08V21.62ZM97.08 15.66H107.18V17.46H97.08V15.66ZM95.52 14.46V24.66H108.78V14.46H95.52ZM103.48 25.98C105.82 26.78 108.2 27.84 109.62 28.62L111.02 27.6C109.46 26.82 106.9 25.78 104.54 25L103.48 25.98ZM93.62 11.24V12.62H110.32V11.24H93.62ZM101.24 11.82C101.12 12.74 100.82 14.08 100.54 14.96L101.96 15.22C102.28 14.4 102.66 13.18 103 12.04L101.24 11.82ZM99.18 24.9C97.8 25.82 95.06 26.86 92.9 27.44C93.24 27.76 93.7 28.28 93.94 28.6C96.08 28 98.8 26.94 100.54 25.88L99.18 24.9Z" fill="#4C4C4C" />
                        <path class="arrow" d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7C8C38" />
                        <path d="M8.33075 18.6072C8.33075 18.6072 8.28695 18.6598 8.26943 18.6861C8.24315 18.7123 8.22562 18.7474 8.19934 18.7824C8.18182 18.8175 8.15554 18.8525 8.13802 18.8788C8.1205 18.9051 8.10298 18.9314 8.08546 18.9664C8.06794 19.0014 8.05042 19.0365 8.0329 19.0715C8.01538 19.0978 8.00661 19.1328 7.98909 19.1591C7.97157 19.1942 7.96281 19.2292 7.95405 19.2642C7.94529 19.2993 7.92777 19.3256 7.91901 19.3606C7.91025 19.3957 7.90149 19.4307 7.89273 19.4657C7.89273 19.5008 7.87521 19.5358 7.86645 19.5621C7.86645 19.6059 7.84893 19.6497 7.84893 19.6935C7.84893 19.7198 7.84017 19.7461 7.84017 19.7724C7.82265 19.9213 7.82265 20.0614 7.84017 20.2104C7.84017 20.2367 7.84017 20.2629 7.84893 20.2892C7.84893 20.333 7.85769 20.3768 7.86645 20.4206C7.86645 20.4557 7.88397 20.4907 7.89273 20.517C7.90149 20.552 7.91025 20.5871 7.91901 20.6221C7.92777 20.6572 7.94529 20.6834 7.95405 20.7185C7.96281 20.7535 7.98033 20.7886 7.98909 20.8236C7.99785 20.8586 8.01538 20.8849 8.0329 20.9112C8.05042 20.9462 8.06794 20.9813 8.08546 21.0163C8.10298 21.0426 8.1205 21.0689 8.13802 21.1039C8.15554 21.139 8.17306 21.174 8.19934 21.2003C8.21686 21.2353 8.24315 21.2616 8.26943 21.2967C8.28695 21.3229 8.30447 21.3492 8.33075 21.3755C8.37455 21.4281 8.42711 21.4894 8.47968 21.5332L15.4792 28.5328C16.3378 29.3913 17.7307 29.3913 18.5892 28.5328C19.4477 27.6742 19.4477 26.2813 18.5892 25.4228L15.3478 22.1815H29.9689C31.1866 22.1815 32.1678 21.1915 32.1678 19.9826C32.1678 18.7737 31.1779 17.7837 29.9689 17.7837H15.3478L18.5892 14.5424C19.4477 13.6839 19.4477 12.291 18.5892 11.4324C18.1599 11.0032 17.5993 10.7842 17.0298 10.7842C16.4604 10.7842 15.8997 11.0032 15.4705 11.4324L8.47092 18.432C8.41835 18.4846 8.37455 18.5371 8.32199 18.5897L8.33075 18.6072Z" fill="white" />
                    </svg>
                </a>
            </li>
            <?php for ($i = $page - 6; $i <= $page + 6; $i++) :
                if ($i >= 1 and $i <= $totalPages) :
                    $qsp['page'] = $i;
            ?>
                    <li class="page-item <?= $page == $i ? 'active' : '' ?>">
                        <a class="page-link" href="?<?= http_build_query($qsp); ?>"><?= $i ?></a>
                    </li>
            <?php endif;
            endfor; ?>
            <li class="page-item <?= $page == $totalPages ? 'disabled' : '' ?>">
                <a class="page-link" href="?<?php $qsp['page'] = $page + 1;
                                            echo http_build_query($qsp); ?>">
                    <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow" d="M1.1 11.68V13.2H18.9V11.68H1.1ZM8.8 12.88V28.58H10.38V12.88H8.8ZM9.68 17.62C12.1 18.86 15.22 20.76 16.76 22L17.82 20.64C16.22 19.44 13.06 17.62 10.66 16.46L9.68 17.62ZM20.88 18.38V20.02H39.18V18.38H20.88ZM45.08 18.62H55.18V20.46H45.08V18.62ZM45.08 21.62H55.18V23.46H45.08V21.62ZM45.08 15.66H55.18V17.46H45.08V15.66ZM43.52 14.46V24.66H56.78V14.46H43.52ZM51.48 25.98C53.82 26.78 56.2 27.84 57.62 28.62L59.02 27.6C57.46 26.82 54.9 25.78 52.54 25L51.48 25.98ZM41.62 11.24V12.62H58.32V11.24H41.62ZM49.24 11.82C49.12 12.74 48.82 14.08 48.54 14.96L49.96 15.22C50.28 14.4 50.66 13.18 51 12.04L49.24 11.82ZM47.18 24.9C45.8 25.82 43.06 26.86 40.9 27.44C41.24 27.76 41.7 28.28 41.94 28.6C44.08 28 46.8 26.94 48.54 25.88L47.18 24.9Z" fill="#4C4C4C" />
                        <path class="arrow" d="M92 40C80.9543 40 72 31.0457 72 20C72 8.9543 80.9543 0 92 0C103.046 0 112 8.9543 112 20C112 31.0457 103.046 40 92 40Z" fill="#7C8C38" />
                        <path d="M103.669 18.6072C103.669 18.6072 103.713 18.6598 103.73 18.6861C103.757 18.7123 103.774 18.7474 103.801 18.7824C103.818 18.8175 103.844 18.8525 103.862 18.8788C103.879 18.9051 103.897 18.9314 103.914 18.9664C103.932 19.0014 103.949 19.0365 103.967 19.0715C103.985 19.0978 103.993 19.1328 104.011 19.1591C104.028 19.1942 104.037 19.2292 104.046 19.2642C104.055 19.2993 104.072 19.3256 104.081 19.3606C104.09 19.3957 104.098 19.4307 104.107 19.4657C104.107 19.5008 104.125 19.5358 104.133 19.5621C104.133 19.6059 104.151 19.6497 104.151 19.6935C104.151 19.7198 104.16 19.7461 104.16 19.7724C104.177 19.9213 104.177 20.0614 104.16 20.2104C104.16 20.2367 104.16 20.2629 104.151 20.2892C104.151 20.333 104.142 20.3768 104.133 20.4206C104.133 20.4557 104.116 20.4907 104.107 20.517C104.098 20.552 104.09 20.5871 104.081 20.6221C104.072 20.6572 104.055 20.6834 104.046 20.7185C104.037 20.7535 104.02 20.7886 104.011 20.8236C104.002 20.8586 103.985 20.8849 103.967 20.9112C103.949 20.9462 103.932 20.9813 103.914 21.0163C103.897 21.0426 103.879 21.0689 103.862 21.1039C103.844 21.139 103.827 21.174 103.801 21.2003C103.783 21.2353 103.757 21.2616 103.73 21.2967C103.713 21.3229 103.695 21.3492 103.669 21.3755C103.625 21.4281 103.573 21.4894 103.52 21.5332L96.5206 28.5328C95.6621 29.3913 94.2692 29.3913 93.4107 28.5328C92.5522 27.6742 92.5522 26.2813 93.4107 25.4228L96.652 22.1815H82.0309C80.8132 22.1815 79.8321 21.1915 79.8321 19.9826C79.8321 18.7737 80.822 17.7837 82.0309 17.7837H96.652L93.4107 14.5424C92.5522 13.6839 92.5522 12.291 93.4107 11.4324C93.84 11.0032 94.4006 10.7842 94.97 10.7842C95.5395 10.7842 96.1001 11.0032 96.5294 11.4324L103.529 18.432C103.582 18.4846 103.625 18.5371 103.678 18.5897L103.669 18.6072Z" fill="white" />
                    </svg>

                </a>
            </li>
        </ul>
    </nav>
</div>



<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->

<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="./nap_js/component.js"></script>
<script src="./nap_js/events_page.js"></script>
<script>
    const eventCard = $('#eventCard');
    $(function() {
        cutTextInto44();
    });

    //----------控制畫面呈現字數----------
    function cutTextInto44() {
        var len = 44; // 超過44個字以"..."取代
        $(".card-textbox-mb p").each(function(i) {
            if ($(this).text().length > len) {
                $(this).attr("title", $(this).text());
                var text = $(this).text().substring(0, len - 1) + "...";
                $(this).text(text);
            }
        });
    }

    const card_tpl_func = ({
        sid,
        event_img,
        event_name,
        event_date,
        event_outline,
        event_remain,
        event_quota,
        member_id
    }) => {
        return `<div class="events-card-col-mb flex-shrink-0">
                    <div class="events-card-mb d-md-flex">
                        <div class="card-imgbox-mb">
                            <img src="./img/events/${event_img}.jpg">
                        </div>
                        <div class="card-textbox-mb">
                            <h4>${event_date}</h4>
                            <h3>${event_name}</h3>
                            <p>${event_outline}</p>
                            <div class="people-cardBtn d-md-flex justify-content-md-between ">
                                <h5>剩餘名額：<span class="remain">${event_remain}</span> / ${event_quota}</h5>

                                <div class="card-btn">
                                    <a href="events_detail.php?sid=${sid}" class="event">查看活動</a>
                                </div>
                            </div>
                        </div>
                        <div class="card-like d-flex justify-content-center align-items-center ">
                            <button name="sentLike" type="submit" onclick="sentLike(event)" data-id="${sid}">
                                <img id="outline" src="./img/component/icon/red-Heart-outline.svg" alt="">
                                <img id="cover" class="cover" src="./img/component/icon/red-Heart-filled.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>`;
    };

    //判斷remain人數少於10換色
    function changeColor() {
        $(".remain").each(function(i) {
            if ($(this).text() < 10) {
                $(this).css({
                    color: "#B14F42",
                });
            }
        });
    };
    changeColor();

    // 收藏按鈕顯示開關
    function sentLike(event) {
        const btn = $(event.currentTarget);
        const sid = btn.attr('data-id');
        $.get(
            `event-like-api.php?like_type=2&item_sid=${sid}`,
            function(data) {
                if (btn.hasClass('show')) {
                    btn.removeClass('show');
                } else {
                    btn.addClass('show');
                }
            }, 'json');
    }

    // default selections
    $('.my-option').each(function() {
        const val = +$(this).attr('data-val');
        $(this).find('a').eq(val).click();
    });


    let defaultVals = {
        cate: <?= isset($_GET['cate']) ? (int)$_GET['cate'] : 0;  ?>, // 浪浪套裝活動
        page: <?= isset($_GET['page']) ? (int)$_GET['page'] : 1;  ?>
    }

    function getData(obj) {
        try {
            if (typeof defaultVals === 'undefined') {
                return;
            }
        } catch (ex) {
            return;
        }


        if (obj.cate !== undefined) {
            defaultVals.cate = obj.cate;
        }

        if (obj.page !== undefined) {
            defaultVals.page = obj.page;
        }

        $.get('events_page_api.php', defaultVals, function(data) {
            console.log('data', data);

            let str = '';

            if (data.events && data.events.length) {
                data.events.forEach(function(obj) {
                    str += card_tpl_func(obj);
                });
            }
            eventCard.html(str);

            // 收藏按鈕，判斷顯示已收藏過的
            for (let i of data.myLikes) {
                const event_sid = i.event_sid;
                const selectedBtn = $(`button[data-id=${event_sid}]`);
                if (selectedBtn.length) {
                    selectedBtn.addClass('show');
                }

            }

            const perPage = <?= $perPage ?>;
            const totalPage = Math.ceil(+data.total_events / perPage);
            let pageStr = `<li class="page-item ">
                <a class="page-link" href="?page=1">
                    <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow" d="M61.4 16.68V18.18H69.62V16.68H61.4ZM53.02 26.16V27.66H70.98V26.16H53.02ZM60.54 10.5V26.96H62.12V10.5H60.54ZM72.88 18.38V20.02H91.18V18.38H72.88ZM97.08 18.62H107.18V20.46H97.08V18.62ZM97.08 21.62H107.18V23.46H97.08V21.62ZM97.08 15.66H107.18V17.46H97.08V15.66ZM95.52 14.46V24.66H108.78V14.46H95.52ZM103.48 25.98C105.82 26.78 108.2 27.84 109.62 28.62L111.02 27.6C109.46 26.82 106.9 25.78 104.54 25L103.48 25.98ZM93.62 11.24V12.62H110.32V11.24H93.62ZM101.24 11.82C101.12 12.74 100.82 14.08 100.54 14.96L101.96 15.22C102.28 14.4 102.66 13.18 103 12.04L101.24 11.82ZM99.18 24.9C97.8 25.82 95.06 26.86 92.9 27.44C93.24 27.76 93.7 28.28 93.94 28.6C96.08 28 98.8 26.94 100.54 25.88L99.18 24.9Z" fill="#4C4C4C"></path>
                        <path class="arrow" d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7C8C38"></path>
                        <path d="M8.33075 18.6072C8.33075 18.6072 8.28695 18.6598 8.26943 18.6861C8.24315 18.7123 8.22562 18.7474 8.19934 18.7824C8.18182 18.8175 8.15554 18.8525 8.13802 18.8788C8.1205 18.9051 8.10298 18.9314 8.08546 18.9664C8.06794 19.0014 8.05042 19.0365 8.0329 19.0715C8.01538 19.0978 8.00661 19.1328 7.98909 19.1591C7.97157 19.1942 7.96281 19.2292 7.95405 19.2642C7.94529 19.2993 7.92777 19.3256 7.91901 19.3606C7.91025 19.3957 7.90149 19.4307 7.89273 19.4657C7.89273 19.5008 7.87521 19.5358 7.86645 19.5621C7.86645 19.6059 7.84893 19.6497 7.84893 19.6935C7.84893 19.7198 7.84017 19.7461 7.84017 19.7724C7.82265 19.9213 7.82265 20.0614 7.84017 20.2104C7.84017 20.2367 7.84017 20.2629 7.84893 20.2892C7.84893 20.333 7.85769 20.3768 7.86645 20.4206C7.86645 20.4557 7.88397 20.4907 7.89273 20.517C7.90149 20.552 7.91025 20.5871 7.91901 20.6221C7.92777 20.6572 7.94529 20.6834 7.95405 20.7185C7.96281 20.7535 7.98033 20.7886 7.98909 20.8236C7.99785 20.8586 8.01538 20.8849 8.0329 20.9112C8.05042 20.9462 8.06794 20.9813 8.08546 21.0163C8.10298 21.0426 8.1205 21.0689 8.13802 21.1039C8.15554 21.139 8.17306 21.174 8.19934 21.2003C8.21686 21.2353 8.24315 21.2616 8.26943 21.2967C8.28695 21.3229 8.30447 21.3492 8.33075 21.3755C8.37455 21.4281 8.42711 21.4894 8.47968 21.5332L15.4792 28.5328C16.3378 29.3913 17.7307 29.3913 18.5892 28.5328C19.4477 27.6742 19.4477 26.2813 18.5892 25.4228L15.3478 22.1815H29.9689C31.1866 22.1815 32.1678 21.1915 32.1678 19.9826C32.1678 18.7737 31.1779 17.7837 29.9689 17.7837H15.3478L18.5892 14.5424C19.4477 13.6839 19.4477 12.291 18.5892 11.4324C18.1599 11.0032 17.5993 10.7842 17.0298 10.7842C16.4604 10.7842 15.8997 11.0032 15.4705 11.4324L8.47092 18.432C8.41835 18.4846 8.37455 18.5371 8.32199 18.5897L8.33075 18.6072Z" fill="white"></path>
                    </svg>
                </a>
            </li>`;
            for (let i = 0; i < totalPage; i++) {
                pageStr += `<li class="page-item ${ (i+1 === defaultVals.page)? 'active' : '' }">
                        <a class="page-link" href="?page=${i+1}&cate=${defaultVals.cate}" > ${i+1} </a> 
                    </li>`
            }

            pageStr += `<li class="page-item ">
                <a class="page-link" href="?page=3">
                    <svg width="112" height="40" viewBox="0 0 112 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="arrow" d="M1.1 11.68V13.2H18.9V11.68H1.1ZM8.8 12.88V28.58H10.38V12.88H8.8ZM9.68 17.62C12.1 18.86 15.22 20.76 16.76 22L17.82 20.64C16.22 19.44 13.06 17.62 10.66 16.46L9.68 17.62ZM20.88 18.38V20.02H39.18V18.38H20.88ZM45.08 18.62H55.18V20.46H45.08V18.62ZM45.08 21.62H55.18V23.46H45.08V21.62ZM45.08 15.66H55.18V17.46H45.08V15.66ZM43.52 14.46V24.66H56.78V14.46H43.52ZM51.48 25.98C53.82 26.78 56.2 27.84 57.62 28.62L59.02 27.6C57.46 26.82 54.9 25.78 52.54 25L51.48 25.98ZM41.62 11.24V12.62H58.32V11.24H41.62ZM49.24 11.82C49.12 12.74 48.82 14.08 48.54 14.96L49.96 15.22C50.28 14.4 50.66 13.18 51 12.04L49.24 11.82ZM47.18 24.9C45.8 25.82 43.06 26.86 40.9 27.44C41.24 27.76 41.7 28.28 41.94 28.6C44.08 28 46.8 26.94 48.54 25.88L47.18 24.9Z" fill="#4C4C4C"></path>
                        <path class="arrow" d="M92 40C80.9543 40 72 31.0457 72 20C72 8.9543 80.9543 0 92 0C103.046 0 112 8.9543 112 20C112 31.0457 103.046 40 92 40Z" fill="#7C8C38"></path>
                        <path d="M103.669 18.6072C103.669 18.6072 103.713 18.6598 103.73 18.6861C103.757 18.7123 103.774 18.7474 103.801 18.7824C103.818 18.8175 103.844 18.8525 103.862 18.8788C103.879 18.9051 103.897 18.9314 103.914 18.9664C103.932 19.0014 103.949 19.0365 103.967 19.0715C103.985 19.0978 103.993 19.1328 104.011 19.1591C104.028 19.1942 104.037 19.2292 104.046 19.2642C104.055 19.2993 104.072 19.3256 104.081 19.3606C104.09 19.3957 104.098 19.4307 104.107 19.4657C104.107 19.5008 104.125 19.5358 104.133 19.5621C104.133 19.6059 104.151 19.6497 104.151 19.6935C104.151 19.7198 104.16 19.7461 104.16 19.7724C104.177 19.9213 104.177 20.0614 104.16 20.2104C104.16 20.2367 104.16 20.2629 104.151 20.2892C104.151 20.333 104.142 20.3768 104.133 20.4206C104.133 20.4557 104.116 20.4907 104.107 20.517C104.098 20.552 104.09 20.5871 104.081 20.6221C104.072 20.6572 104.055 20.6834 104.046 20.7185C104.037 20.7535 104.02 20.7886 104.011 20.8236C104.002 20.8586 103.985 20.8849 103.967 20.9112C103.949 20.9462 103.932 20.9813 103.914 21.0163C103.897 21.0426 103.879 21.0689 103.862 21.1039C103.844 21.139 103.827 21.174 103.801 21.2003C103.783 21.2353 103.757 21.2616 103.73 21.2967C103.713 21.3229 103.695 21.3492 103.669 21.3755C103.625 21.4281 103.573 21.4894 103.52 21.5332L96.5206 28.5328C95.6621 29.3913 94.2692 29.3913 93.4107 28.5328C92.5522 27.6742 92.5522 26.2813 93.4107 25.4228L96.652 22.1815H82.0309C80.8132 22.1815 79.8321 21.1915 79.8321 19.9826C79.8321 18.7737 80.822 17.7837 82.0309 17.7837H96.652L93.4107 14.5424C92.5522 13.6839 92.5522 12.291 93.4107 11.4324C93.84 11.0032 94.4006 10.7842 94.97 10.7842C95.5395 10.7842 96.1001 11.0032 96.5294 11.4324L103.529 18.432C103.582 18.4846 103.625 18.5371 103.678 18.5897L103.669 18.6072Z" fill="white"></path>
                    </svg>

                </a>
            </li>`

            $('.pagination').html(pageStr);


            if (data.cate === 1) {
                spacialBtnEvent();
            }

            cutTextInto44();
            changeColor();

        }, 'json');

    }
    getData({}); // first get data


    <?php if ((isset($_GET['cate']) ? intval($_GET['cate']) : 0) === 1) : ?>
        spacialBtnEvent();
    <?php endif; ?>
</script>


<?php include __DIR__ . '/parts/html-foot.php'; ?>