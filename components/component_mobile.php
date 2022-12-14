<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./component_mobile.css">

    <!-- reset -->
    <link rel="stylesheet" href="../reset/reset.css">

    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">



</head>

<body>
    <!------ topNav 要跟menu一起複製------>
    <div class="topNav_mobile">
        <a class="logo" href="#">
            <img class='mb' src="../img/component/logo/logo-1.svg" alt="">
            <img class='pc' src="../img/component/logo/logo-2.svg" alt="">
        </a>
        <div class="icon_wrap">
            <div class="sec1">
                <a href="">
                    <img src="../img/component/icon/Cart.svg" alt="">
                </a>
                <a id="memberPic" href="">
                    <!-- 圖片在css的background-image -->
                </a>
            </div>
            <button class="menu sec2">
                <img src="../img/component/icon/hamburger.svg" alt="">
            </button>
        </div>

    </div>
    <!------ menu -------->
    <div class="menu_lightBox_pc">
    </div>
    <div class="nap_menu">

        <div class="content">

            <ul class="menu_link">
                <li>
                    <a href="#">首頁<span>Home Page</span></a>
                </li>
                <li>
                    園區介紹 <span>Field Info</span>
                    <ul class="layer2">
                        <li>
                            <a href="#">
                                園區地圖
                                <span>Field Guide</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                園區內的毛孩
                                <span>Our Furry Friends</span>
                            </a>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">活動檔期 <span>Events</span></a>
                </li>
                <li>
                    <a href="#">房型介紹
                        <span>Room Info</span></a>
                </li>
                <li>交流討論區 <span>ChatChat!</span>
                    <ul class="layer2">
                        <li>
                            <a href="#">
                                Q & A
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                活動討論
                                <span>Event Forum</span>
                            </a>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <div class="logout">
                        <a class="" href="#">登出<span>Logout</span></a>
                    </div>
                </li>
            </ul>
            <ul class="icon_link">
                <li>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 40 40" fill="none">
                            <g clip-path="url(#clip0_30_489)">
                                <path
                                    d="M14.609 33.7363C12.9197 33.7363 11.5491 35.1416 11.5491 36.8627C11.5491 38.5838 12.9197 39.9891 14.609 39.9891C16.2983 39.9891 17.6689 38.5838 17.6689 36.8627C17.6689 35.1416 16.2983 33.7363 14.609 33.7363V33.7363ZM30.0147 33.7363C28.3254 33.7363 26.9548 35.1416 26.9548 36.8627C26.9548 38.5838 28.3254 39.9891 30.0147 39.9891C31.7041 39.9891 33.0746 38.5838 33.0746 36.8627C33.0746 35.1416 31.7041 33.7363 30.0147 33.7363V33.7363Z"
                                    fill="#ffffff" />
                                <path
                                    d="M36.8888 5.95861H10.0084L9.11596 2.44009C8.86097 1.03486 7.64976 0 6.2473 0H1.85932C0.828724 0 0 0.849673 0 1.90632C0 2.96296 0.828724 3.81264 1.85932 3.81264H5.63107L10.6565 23.6601L8.6591 28.3769C8.41473 28.9651 8.46786 29.6405 8.80785 30.1852C9.14784 30.719 9.73219 31.0458 10.359 31.0458H33.7333C34.7639 31.0458 35.5926 30.1961 35.5926 29.1394C35.5926 28.0828 34.7639 27.2331 33.7333 27.2331H13.1958L14.322 24.5752C14.322 24.5752 14.3327 24.5098 14.3433 24.4771H33.6483C34.6364 24.4771 35.4864 23.78 35.7201 22.7996L38.9713 8.63834C39.29 7.26579 38.27 5.95861 36.8995 5.95861H36.8888ZM18.8375 18.0174C18.8375 18.7691 18.2425 19.3791 17.5094 19.3791C16.7763 19.3791 16.1814 18.7691 16.1814 18.0174V12.4183C16.1814 11.6667 16.7763 11.0566 17.5094 11.0566C18.2425 11.0566 18.8375 11.6667 18.8375 12.4183V18.0174ZM25.2123 18.0174C25.2123 18.7691 24.6173 19.3791 23.8842 19.3791C23.1511 19.3791 22.5562 18.7691 22.5562 18.0174V12.4183C22.5562 11.6667 23.1511 11.0566 23.8842 11.0566C24.6173 11.0566 25.2123 11.6667 25.2123 12.4183V18.0174ZM31.5871 18.0174C31.5871 18.7691 30.9921 19.3791 30.259 19.3791C29.5259 19.3791 28.931 18.7691 28.931 18.0174V12.4183C28.931 11.6667 29.5259 11.0566 30.259 11.0566C30.9921 11.0566 31.5871 11.6667 31.5871 12.4183V18.0174Z"
                                    fill="#ffffff" />
                            </g>
                            <defs>
                                <clipPath id="clip0_30_489">
                                    <rect width="40" height="40" fill="#ffffff" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
                <li>
                    <a href="">
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="31" viewBox="0 0 32 40" fill="none">
                            <g clip-path="url(#clip0_30_488)">
                                <path
                                    d="M19.9697 24.0026C25.2335 21.7179 27.7234 15.4187 25.5313 9.93294C23.3391 4.44714 17.295 1.85209 12.0313 4.13673C6.76757 6.42137 4.27758 12.7206 6.46972 18.2064C8.66187 23.6922 14.706 26.2872 19.9697 24.0026Z"
                                    fill="#ffffff" />
                                <path
                                    d="M16 28.7871C8.90206 28.7871 2.84445 31.7241 0.381897 35.8826C-0.671601 37.6805 0.579428 39.9862 2.60741 39.9862H29.3926C31.4206 39.9862 32.6716 37.6805 31.6181 35.8826C29.1687 31.7241 23.0979 28.7871 16 28.7871V28.7871Z"
                                    fill="#ffffff" />
                            </g>
                            <defs>
                                <clipPath id="clip0_30_488">
                                    <rect width="32" height="40" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </a>
                </li>
            </ul>


        </div>
    </div>

    <!-- 這個咚咚不用複製 -->
    <div class="block1" style="width: 100px; height: 200px;"></div>

    <!------ napBtn ------------->
    <!-- padding -->
    <a class="napBtn_padding_filled" href="#">
        <span>按鈕</span>
    </a>

    <br>

    <a class="napBtn_padding_outline" href="#">
        <span>按鈕</span>
    </a>

    <br>
    <!-- fixed 高/寬度需自行調整-->
    <a class="napBtn_fixed_filled" href="#">
        <span>按鈕</span>
    </a>

    <br>

    <a class="napBtn_fixed_outlined" href="#">
        <span>按鈕</span>
    </a>

    <br>

    <!-- likeBtn -->
    <!-- 寵物卡片 -->
    <button class="napBtn_likeBtn">
        <div class="svgs">
            <svg id='gray' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                <path
                    d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z"
                    fill="#CCCCCC" />
            </svg>
            <svg id='white' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 19 19" fill="none">
                <path
                    d="M0 7.08414V6.86891C0 4.27496 1.87477 2.0625 4.43086 1.63649C6.08965 1.35483 7.84492 1.90627 9.05469 3.11789L9.5 3.56246L9.91191 3.11789C11.1551 1.90627 12.877 1.35483 14.5691 1.63649C17.126 2.0625 19 4.27496 19 6.86891V7.08414C19 8.62418 18.3617 10.0974 17.2336 11.1476L10.5279 17.408C10.2496 17.6677 9.88223 17.8125 9.5 17.8125C9.11777 17.8125 8.75039 17.6677 8.47207 17.408L1.76604 11.1476C0.639395 10.0974 1.11328e-05 8.62418 1.11328e-05 7.08414H0Z"
                    fill="#FFFFFF" />
            </svg>
        </div>
        <span>關注</span>
    </button>


    <br>

    <!-- 留言區-->
    <button class="napBtn_likeBtn_comt">
        <div class="svgs">
            <img id="napDefault" src="../img/component/icon/red-Heart-outline.svg" alt="">
            <img id="napActivate" src="../img/component/icon/red-Heart-filled.svg" alt="">
        </div>
        <span>關注</span>
    </button>


    <br>

    <!------ switch -------->
    <!-- 兩格 -->
    <div class="napSwitch_two">
        <div class="backmask"></div>
        <div class="num1 sec">
            狗勾
        </div>
        <div class="num2 sec">
            貓貓
        </div>
    </div>

    <br>

    <!-- 三格 -->
    <div class="napSwitch_three">
        <div class="backmask"></div>
        <div class="num1 sec">
            幼年 (0~1)
        </div>
        <div class="num2 sec">
            成年 (1~8)
        </div>
        <div class="num3 sec">
            老年 (8+)
        </div>
    </div>


    <br>
    <!------ 留言區區塊選擇 -------->
    <div class="chat_bordSlec_PC">
        <button class="top napBtn" href="#">
            <span>閒聊Q&A</span>
        </button>
        <div class="line"></div>
        <button class="bot napBtn" href="#">
            <span>活動討論區</span>
        </button>
    </div>


    <br>
    <!------ 頁數選擇器 PC -------->

    <div class="page_slec">
        <button class="page_click">
            <img width="" src="../img/component/icon/arrow_lastpage.svg" alt="">
        </button>
        <!-- 頁碼 -->
        <div class="indic_wrap">
            <button class="page_indic">
                <span class="napPage">1</span>
            </button>
            <button class="page_indic">
                <span class="napPage">2</span>
            </button>
            <button class="page_indic">
                <span class="napPage">3</span>
            </button>
        </div>
        <!---->
        <button class="page_click">
            <img width="" src="../img/component/icon/arrow_nextpage.svg" alt="">
        </button>
    </div>


    <br>

    <!------ 留言卡片label ------>
    <div class="comtLabel">
        <span># 浪浪套裝活動</span>
    </div>




    <!-- 這個咚咚不用複製 -->
    <div class="block1" style="width: 100px; height: 1200px;"></div>

    <!------ footer-mobile ------>
    <div class="footer-mobile">
        <div class="top_sec">
            <div class="content">
                <p class="sec1">
                    聯絡資訊 <br>
                    地址： 313 新竹縣尖石鄉玉峰段900號<br>
                    電話： 03-456 0202<br>
                    傳真： 03-456 2266<br>
                    客服信箱： service@nap.com.tw<br>
                </p>
                <p class="sec2">
                    住宿服務：週日 ～ 週四　|　08:00 ～ 20:00
                    <br>
                    定期園區活動：週五 ～ 週六　|　08:00 ～ 18:00
                </p>
                <div class="logos">
                    <svg style="margin-right:16px;" xmlns="http://www.w3.org/2000/svg" width="30" height="30"
                        viewBox="0 0 40 40" fill="none">
                        <g clip-path="url(#clip0_178_4963)">
                            <path
                                d="M39.375 20C39.375 9.29688 30.7031 0.625 20 0.625C9.29688 0.625 0.625 9.29688 0.625 20C0.625 29.6703 7.71016 37.6859 16.9727 39.1406V25.6008H12.0508V20H16.9727V15.7312C16.9727 10.8758 19.8633 8.19375 24.2906 8.19375C26.4109 8.19375 28.6281 8.57188 28.6281 8.57188V13.3375H26.1844C23.7781 13.3375 23.0273 14.8312 23.0273 16.3633V20H28.4008L27.5414 25.6008H23.0273V39.1406C32.2898 37.6859 39.375 29.6703 39.375 20Z"
                                fill="#ffffff" />
                        </g>
                        <defs>
                            <clipPath id="clip0_178_4963">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                        <g clip-path="url(#clip0_602_28668)">
                            <path
                                d="M15.05 12.15C13.45 12.15 12.2 13.45 12.2 15C12.2 16.55 13.5 17.85 15.05 17.85C16.65 17.85 17.9 16.55 17.9 15C17.9 13.45 16.65 12.15 15.05 12.15Z"
                                fill="white" />
                            <path
                                d="M18.65 7.59998H11.35C9.29998 7.59998 7.59998 9.29998 7.59998 11.35V18.6C7.59998 20.65 9.29998 22.35 11.35 22.35H18.6C20.65 22.35 22.35 20.65 22.35 18.6V11.35C22.4 9.29998 20.7 7.59998 18.65 7.59998ZM15.05 19.5C12.6 19.5 10.55 17.5 10.55 15C10.55 12.55 12.55 10.5 15.05 10.5C17.5 10.5 19.55 12.5 19.55 15C19.55 17.45 17.55 19.5 15.05 19.5ZM19.8 11.3C19.2 11.3 18.75 10.8 18.75 10.25C18.75 9.64998 19.25 9.19998 19.8 9.19998C20.4 9.19998 20.85 9.69998 20.85 10.25C20.9 10.8 20.4 11.3 19.8 11.3Z"
                                fill="white" />
                            <path
                                d="M15 0C6.7 0 0 6.7 0 15C0 23.3 6.7 30 15 30C23.3 30 30 23.3 30 15C30 6.7 23.3 0 15 0ZM24.1 18.65C24.1 21.65 21.65 24.1 18.65 24.1H11.35C8.35 24.1 5.9 21.65 5.9 18.65V11.35C5.9 8.35 8.35 5.9 11.35 5.9H18.6C21.6 5.9 24.05 8.35 24.05 11.35V18.65H24.1Z"
                                fill="white" />
                        </g>
                        <defs>
                            <clipPath id="clip0_602_28668">
                                <rect width="30" height="30" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
            </div>

        </div>
        <div class="bot_sec">
            <span>
                Copyright © 2022 N.A.P. Guide CO.,LTD All rights reserved.
            </span>
        </div>
    </div>







    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="./component.js"></script>
    <!-- sweetalert cdn -->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</body>

</html>