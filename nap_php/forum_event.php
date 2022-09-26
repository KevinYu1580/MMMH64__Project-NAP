<?php
require __DIR__ . '/parts/connect_db_kevin.php';
$pageName = 'Forum-events'; // 頁面名稱


$perPage = 12;  // 每頁最多有幾筆
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;

// ---------------貼文----------------
// 取得資料的總筆數
$t_sql = "SELECT COUNT(1) FROM chat LEFT JOIN member01 on member01.id = chat.po_sid WHERE tag = 0 OR tag = 1";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];

// 計算總頁數
$totalPages = ceil($totalRows / $perPage);

$rows = [];  // 預設值
// 有資料才執行
if ($totalRows > 0) {
    if ($page < 1) {
        header('Location: ?page=1');
        exit;
    }
    if ($page > $totalPages) {
        header('Location: ?page=' . $totalPages);
        exit;
    }
    // 取得該頁面的資料
    $sql = sprintf("SELECT * FROM chat LEFT JOIN member01 on member01.id = chat.po_sid WHERE tag = 0 OR tag = 1 ORDER BY `date` DESC LIMIT %s, %s", ($page - 1) * $perPage, $perPage);
    $rows = $pdo->query($sql)->fetchAll();
}

$event = ['# 特別活動', '# 浪浪套裝活動'];

// ---------------貼文裡的留言----------------









?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- kevin的css -->
<link rel="stylesheet" href="./nap_css/forum-event.css">

<!------ coverPic ------>
<div class="coverPic"></div>
<!-- selector_wrap -->
<div class="contentWrap">
    <button class="postBtn_pc napBtn_padding_filled">
        <span>我要發文</span>
    </button>
    <div class="selector_and_search_wrap_forPC">
        <div class="selector_wrap">
            <h2>交流討論區<br>
                <span>ChatChat!</span>
            </h2>
            <div class="secSelec">
                <button id="num1">閒聊Q&A</button>
                <div class="line"></div>
                <button id="num2">活動討論區</button>
            </div>
            <div class="napSwitch_three forum_switch">
                <div class="backmask"></div>
                <div class="num1 sec">
                    狗勾
                </div>
                <div class="num2 sec">
                    貓貓
                </div>
                <div class="num3 sec">
                    不限
                </div>
            </div>
        </div>
        <form class="d-flex napSearchBar searchBar_pc_anchor">
            <input class="form-control me-2" type="search" placeholder="搜尋文章" aria-label="Search">
            <button class="btn btn-outline-success searchIcon" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40" fill="none">
                    <g clip-path="url(#clip0_30_474)">
                        <path d="M31.7476 9.53829C30.2523 7.97405 28.2736 7.11548 26.1599 7.11548C24.0462 7.11548 22.0674 7.97405 20.5721 9.53829C20.0212 10.1146 20.0212 11.0437 20.5721 11.62C21.123 12.1963 22.0112 12.1963 22.5621 11.62C23.5178 10.6086 24.7995 10.0558 26.1599 10.0558C27.5203 10.0558 28.802 10.6086 29.7576 11.62C30.0275 11.9023 30.3872 12.0552 30.747 12.0552C31.1068 12.0552 31.4666 11.9141 31.7364 11.62C32.2873 11.0437 32.2873 10.1146 31.7364 9.53829H31.7476Z" fill="#ffffff" />
                        <path d="M35.8852 4.30462C33.1419 1.43487 29.5441 0 25.9464 0C22.3486 0 18.7509 1.43487 16.0076 4.30462C11.1956 9.33843 10.5997 17.1009 14.2199 22.8051L11.6341 25.5101L11.2406 25.0985C11.0157 24.8633 10.6672 24.8633 10.4423 25.0985L1.30176 34.6604C0.863281 35.1191 0.863281 35.86 1.30176 36.3187L4.48352 39.6472C4.922 40.1059 5.63031 40.1059 6.06878 39.6472L15.2093 30.0853C15.4342 29.85 15.4342 29.4855 15.2093 29.2502L14.8158 28.8386L17.278 26.2629C19.8189 28.3446 22.877 29.4031 25.9464 29.4031C29.5441 29.4031 33.1419 27.9682 35.8852 25.0985C41.3717 19.359 41.3717 10.0441 35.8852 4.30462V4.30462ZM32.7034 21.7701C30.8933 23.6636 28.4985 24.6986 25.9464 24.6986C23.3942 24.6986 20.9995 23.6636 19.1893 21.7701C17.3792 19.8765 16.3898 17.3714 16.3898 14.7016C16.3898 12.0318 17.3792 9.52661 19.1893 7.63305C20.9995 5.73949 23.3942 4.7045 25.9464 4.7045C28.4985 4.7045 30.8933 5.73949 32.7034 7.63305C34.5135 9.52661 35.5029 12.0318 35.5029 14.7016C35.5029 17.3714 34.5135 19.8765 32.7034 21.7701Z" fill="#ffffff" />
                    </g>
                    <defs>
                        <clipPath id="clip0_30_474">
                            <rect width="40" height="40" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </button>
        </form>
    </div>

    <!-- search bar_mb -->
    <form class="d-flex napSearchBar searchBar_mb_anchor">
        <input class="form-control me-2" type="search" placeholder="搜尋文章" aria-label="Search">
        <button class="btn btn-outline-success searchIcon" type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 40 40" fill="none">
                <g clip-path="url(#clip0_30_474)">
                    <path d="M31.7476 9.53829C30.2523 7.97405 28.2736 7.11548 26.1599 7.11548C24.0462 7.11548 22.0674 7.97405 20.5721 9.53829C20.0212 10.1146 20.0212 11.0437 20.5721 11.62C21.123 12.1963 22.0112 12.1963 22.5621 11.62C23.5178 10.6086 24.7995 10.0558 26.1599 10.0558C27.5203 10.0558 28.802 10.6086 29.7576 11.62C30.0275 11.9023 30.3872 12.0552 30.747 12.0552C31.1068 12.0552 31.4666 11.9141 31.7364 11.62C32.2873 11.0437 32.2873 10.1146 31.7364 9.53829H31.7476Z" fill="#ffffff" />
                    <path d="M35.8852 4.30462C33.1419 1.43487 29.5441 0 25.9464 0C22.3486 0 18.7509 1.43487 16.0076 4.30462C11.1956 9.33843 10.5997 17.1009 14.2199 22.8051L11.6341 25.5101L11.2406 25.0985C11.0157 24.8633 10.6672 24.8633 10.4423 25.0985L1.30176 34.6604C0.863281 35.1191 0.863281 35.86 1.30176 36.3187L4.48352 39.6472C4.922 40.1059 5.63031 40.1059 6.06878 39.6472L15.2093 30.0853C15.4342 29.85 15.4342 29.4855 15.2093 29.2502L14.8158 28.8386L17.278 26.2629C19.8189 28.3446 22.877 29.4031 25.9464 29.4031C29.5441 29.4031 33.1419 27.9682 35.8852 25.0985C41.3717 19.359 41.3717 10.0441 35.8852 4.30462V4.30462ZM32.7034 21.7701C30.8933 23.6636 28.4985 24.6986 25.9464 24.6986C23.3942 24.6986 20.9995 23.6636 19.1893 21.7701C17.3792 19.8765 16.3898 17.3714 16.3898 14.7016C16.3898 12.0318 17.3792 9.52661 19.1893 7.63305C20.9995 5.73949 23.3942 4.7045 25.9464 4.7045C28.4985 4.7045 30.8933 5.73949 32.7034 7.63305C34.5135 9.52661 35.5029 12.0318 35.5029 14.7016C35.5029 17.3714 34.5135 19.8765 32.7034 21.7701Z" fill="#ffffff" />
                </g>
                <defs>
                    <clipPath id="clip0_30_474">
                        <rect width="40" height="40" fill="white" />
                    </clipPath>
                </defs>
            </svg>
        </button>
    </form>

    <!-- comtCard -->
    <div class="d-flex gap-5">
        <div class="chat_bordSlec_PC">
            <button class="top napBtn" href="#">
                <span>閒聊Q&A</span>
            </button>
            <div class="line"></div>
            <button class="bot napBtn" href="#">
                <span>活動討論區</span>
            </button>
        </div>
        <div class="comtCard_wrap">
            <?php foreach ($rows as $r) : ?>
                <div id='comtCard' class="comtCard" name='comtCard' type='submit'>
                    <div class="content_wrap">
                        <div class="member_info">
                            <div class="member_pic">
                                <img src="./img/member/profile-image/<?= $r['avatar'] ?>" alt="">
                            </div>
                            <span><?= $r['name'] ?></span>
                            <span id='post_sid' class="d-none"><?= $r['sid'] ?></span>
                        </div>
                        <div class="napTitle">
                            <span>
                                <?= $r['title'] ?>
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="comtLabel">
                                <span><?= $event[$r['tag']] ?></span>
                            </div>
                            <span class="date"><?= $r['date'] ?></span>
                        </div>
                        <p class="contentText"><?= $r['content'] ?></p>
                        <div class="iconIndic">
                            <button class="napBtn_likeBtn_comt">
                                <div class="svgs">
                                    <img id="napDefault" src="./img/component/icon/red-Heart-outline.svg" alt="">
                                    <img id="napActivate" src="./img/component/icon/red-Heart-filled.svg" alt="">
                                </div>
                                <span>關注</span>
                            </button>
                            <div class="napComt">
                                <img src="./img/component/icon/Comment-brown.svg" alt="">
                                <span>12則留言</span>
                            </div>
                        </div>

                    </div>
                    <div style="background-image: url(./img/chatchat/event/<?php
                                                                            $picAry = explode(',', $r['articlePic_id']);
                                                                            print_r($picAry[0]);
                                                                            ?>)" class="card_smPic">

                    </div>
                    <button class="pointMenu">
                        <img src="./img/component/icon/Small Menu.svg" alt="">
                    </button>
                    <div class="lightBox_mb">
                        <button class="cardDelete">
                            <div class="deleteIcon">
                                <img width="28px" src="./img/component/icon/Trash can.svg" alt="">
                            </div>
                            <span>刪除</span>
                        </button>
                        <button class="cardEdit">
                            <div class="editIcon">
                                <img width="28px" src="./img/component/icon/Pencil.svg" alt="">
                            </div>
                            <span>編輯</span>
                        </button>
                    </div>
                    <div class="lightBox_pc">
                        <button class="cardDelete">
                            <div class="deleteIcon">
                                <img width="28px" src="./img/component/icon/Trash can.svg" alt="">
                            </div>
                            <span>刪除</span>
                        </button>
                        <button class="cardEdit">
                            <div class="editIcon">
                                <img width="28px" src="./img/component/icon/Pencil.svg" alt="">
                            </div>
                            <span>編輯</span>
                        </button>
                    </div>
                    <div class="lightBox_comtCard">
                        <button class="close_lightBox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3731 7.29289C21.7636 7.68342 21.7636 8.31658 21.3731 8.70711L14.0802 16L21.3731 23.2929C21.7636 23.6834 21.7636 24.3166 21.3731 24.7071C20.9826 25.0976 20.3494 25.0976 19.9589 24.7071L11.9589 16.7071C11.5684 16.3166 11.5684 15.6834 11.9589 15.2929L19.9589 7.29289C20.3494 6.90237 20.9826 6.90237 21.3731 7.29289Z" fill="#2D2D2D" />
                            </svg>
                        </button>
                        <div class="content_wrap">
                            <div class="member_info">
                                <div class="member_pic"></div>
                                <span class="member_name">
                                    <?= $r['name'] ?>
                                </span>
                            </div>
                            <article>
                                <div class="content">
                                    <h3> <?= $r['title'] ?></h3>
                                    <div class="others_wrap d-flex align-bottom justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="comtLabel">
                                                <span> <?= $event[$r['tag']] ?></span>
                                            </div>
                                            <span class="date"> <?= $r['date'] ?></span>
                                        </div>
                                        <button class="napBtn_likeBtn_comt">
                                            <div class="svgs">
                                                <img id="napDefault" src="./img/component/icon/red-Heart-outline.svg" alt="">
                                                <img id="napActivate" src="./img/component/icon/red-Heart-filled.svg" alt="">
                                            </div>
                                            <span>關注</span>
                                        </button>
                                    </div>
                                    <p class="comtCard_lightBox_p">
                                        <?= $r['content'] ?>
                                    </p>
                                    <div class="comtCard_lightBox_pic">
                                        <!-- 顯示多張圖片 -->
                                        <?php
                                        $picAry = [];
                                        if (!empty($r['articlePic_id'])) {
                                            $picAry = explode(',', $r['articlePic_id']);
                                        }
                                        foreach ($picAry as $p) {
                                            echo "<img src='./img/chatchat/event/{$p}' alt=''>";
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="comtSection">
                                    <div class="numIndic d-flex align-items-end">
                                        <img src="./img/component/icon/Comment-brown.svg" alt="">
                                        <span>12則留言</span>
                                    </div>
                                    <div class="messageLev d-flex align-items-center">
                                        <div class="memberPic">
                                        </div>
                                        <input class="message_input" type="text" placeholder="我要留言">
                                    </div>
                                    <div class="message_pack">
                                        
                                            <!-- <div id="messageCard" class="messageCard d-flex">
                                                <div style="background-image: url(./img/member/profile-image/);" class="memberPic"></div>
                                                <div class="content_wrap d-flex">
                                                    <span class="poster">
                                                       
                                                    </span>
                                                    <span class="date">
                                                        
                                                    </span>
                                                    <p class="message_text">
                                                        
                                                    </p>
                                                </div>
                                            </div> -->
                                        
                                    </div>
                                    <span class="botHint">尚無更多留言</span>
                                </div>



                            </article>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
    <!-- 手機板的留言卡片menu 光箱背景遮罩(透明黑)) -->
    <div class="lightBox_mb_mask"></div>
    <!--  -->
    <!-- 留言卡片展開的光箱 -->

    <div class="lightBox_comtCard_mask"></div>
    <!--  -->
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


    <!-- 右下發文提示 -->
    <button class="postBtn_mb">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 38 38" fill="none">
            <g clip-path="url(#clip0_795_38865)">
                <path d="M34.8333 22.1667H3.16667C1.39333 22.1667 0 20.7734 0 19C0 17.2267 1.39333 15.8334 3.16667 15.8334H34.8333C36.6067 15.8334 38 17.2267 38 19C38 20.7734 36.6067 22.1667 34.8333 22.1667Z" fill="#ffffff" />
                <path d="M18.9999 38C17.2266 38 15.8333 36.6067 15.8333 34.8333V3.16667C15.8333 1.39333 17.2266 0 18.9999 0C20.7733 0 22.1666 1.39333 22.1666 3.16667V34.8333C22.1666 36.6067 20.7733 38 18.9999 38Z" fill="#ffffff" />
            </g>
            <defs>
                <clipPath id="clip0_795_38865">
                    <rect width="38" height="38" fill="white" />
                </clipPath>
            </defs>
        </svg>
    </button>
    <div class="lightBox_post">
        <button class="close_lightBox">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3731 7.29289C21.7636 7.68342 21.7636 8.31658 21.3731 8.70711L14.0802 16L21.3731 23.2929C21.7636 23.6834 21.7636 24.3166 21.3731 24.7071C20.9826 25.0976 20.3494 25.0976 19.9589 24.7071L11.9589 16.7071C11.5684 16.3166 11.5684 15.6834 11.9589 15.2929L19.9589 7.29289C20.3494 6.90237 20.9826 6.90237 21.3731 7.29289Z" fill="#2D2D2D" />
            </svg>
        </button>
        <div class="member_info">
            <div class="member_pic"></div>
            <div class="member_name">
                <span>翁同學</span>
            </div>
        </div>
        <div class="petSelec_wrap d-flex align-items-center">
            <div class="secIndic">
                寵物類別:
            </div>
            <div class="petSelec d-flex justify-content-between align-items-center">
                <button class="iconWrap d-flex align-items-center">
                    <img id='default' class="" src="./img/self/k/post_dogIcon_default.svg" alt="">
                    <img id='activated' src="./img/self/k/post_dogIcon_activated.svg" alt="">
                </button>
                <div class="line"></div>
                <button class="iconWrap d-flex align-items-center">
                    <img id='default' class="" src="./img/self/k/post_catIcon_default.svg" alt="">
                    <img id='activated' src="./img/self/k/post_catIcon_activated.svg" alt="">
                </button>
                <div class="line"></div>
                <button class="iconWrap slectAll">
                    <span>不限</span>
                </button>
            </div>
        </div>
        <div class="boardSelec_wrap d-flex align-items-center ">
            <div class="secIndic">
                選擇看板:
            </div>
            <div class="boardSelec d-flex justify-content-between align-items-center">
                <button id="qa" class="selec">
                    閒聊 Q&A
                </button>
                <div class="line"></div>
                <button id="event" class="selec">
                    活動討論區
                </button>
            </div>
        </div>
        <div class="eventSelec_wrap d-flex align-items-center ">
            <div class="secIndic">
                活動類別:
            </div>
            <div class="eventSelec d-flex align-items-center">
                <button id="num1" class="comtLabel">
                    <span># 浪浪套裝活動</span>
                </button>
                <button id="num2" class="comtLabel">
                    <span># 每月特別活動</span>
                </button>
            </div>
        </div>
        <form id="inputArea" class="inputArea" runat="server" name="postForm_summit">

            <textarea class="napHeadline textArea" placeholder="請輸入標題" name="headline" id=""></textarea>

            <textarea class="napContent textArea" placeholder="請輸入內容" name="content" id=""></textarea>
            <div class="imgInsert"></div>

            <!-- 上傳圖片 -->
            <input name="picture" class="" accept="image/*" type='file' id="imgInp" />


            <button class="summitBtn napBtn_padding_filled" href="#">
                <span>發佈貼文</span>
            </button>

        </form>


    </div>
    <div class="lightBox_post_mask">
    </div>

</div>





<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>
<script src="./nap_js/component.js"></script>
<!-- 自己的js放在這 -->
<script src="./nap_js/forum-event.js"></script>
<script>



    $('.comtCard').click(function() {

        const post_sid = $(this).find('#post_sid').html()
        // console.log(post_sid)
        $.get(
            'getMessageId-api.php',
            {sid: post_sid},
            'json'
        )
        .done((result)=>{
            $('.lightBox_comtCard .comtSection .message_pack').html(result)
        })
        
    })





</script>



<?php include __DIR__ . '/parts/html-foot.php'; ?>