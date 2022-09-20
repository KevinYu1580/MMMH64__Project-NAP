<style>
        @font-face {
    font-family: custom-font;
    src: url('https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap') format("opentype");
    unicode-range: U+4E00-9FFF;
}
@font-face {
    font-family: custom-font;
    src: local(Arial), url('./font/Arial.ttf') format("truetype");
    unicode-range: U+00-024F;
}
:root {
    --primaryColor_default: #BFBD4A;
    --primaryColor_dark: #7C8C38;
    --primaryColor_light: #D6D48A;
    --primaryColor_tint: #E8E7D1;
    --secondaryColor_default: #B18042;
    --secondaryColor_light: #EDDCCE;
    --subColor_bgc: #F7F5F0;
    --subColor_yellow: #FFE266;
    --subColor_lightRed: #F67557;
    --subColor_highLightRed: #B14F42;
    --subColor_text: #4C4C4C;
    
    --black_core: #000000;
    --black_900: #2D2D2D;
    --black_800: #4B4B4B;
    --black_600: #909090;
    --black_500: #CCCCCC;
    --black_400: #ECECEC;
    --black_200: #F6F6F6;
    --white: #ffffff;

    --headline_50px:80px;
    --headline_60px:60px;
    --headline_40px:40px;
    --headline_32px:32px;
    --headline_28px:28px;
    --headline_24px:24px;
    --headline_20px:20px;
    --subtitle_18px:18px;
    --subtitle_16px:16px;
    --p_16px: 16px;
    --p_14px: 14px;
    --p_12px: 12px;
    --p_10px: 10px;

    --border-radious: 20px;
    --btn-radius: 1200px;
    --box-shadow: 15px 15px 0px rgba(0, 0, 0, 0.15);
}

* {
    font-family: 'Noto Sans TC', sans-serif !important;
}

/* ---- topNav-mobile ----*/
.topNav_mobile{
    padding: 16px 0px;
    display: flex;
    justify-content:space-between;
    background: rgba(255, 255, 255, 0.85);
    position: fixed;
    width: 100%;
    z-index: 999;
    top: 0;
    backdrop-filter: blur(3px);
}
.topNav_mobile .logo{
    text-decoration: none;
    height: 36px;
    margin-left: 16px;
}
.topNav_mobile .logo .mb{
    height: 36px;
}
.topNav_mobile .logo .pc{
    display: none;
    height: 44px;
}
.topNav_mobile .menu {
    border: none;
    align-items: center;
    background-color: rgba(255, 255, 255, 0);
    margin-right: 16px;
    cursor: pointer;
}

.topNav_mobile .menu img{
    width: 24px;
}
@media screen and (min-width: 992px){
    .topNav_mobile{
        background: rgba(255, 255, 255, 0.85);
        backdrop-filter: none;
    }
    .topNav_mobile{
        padding: 14px 0px;
    }
    .topNav_mobile .logo{
        text-decoration: none;
        height: fit-content;
        margin-left: 40px;
    }
    .topNav_mobile .logo .mb{
        display: none;
    }
    .topNav_mobile .logo .pc{
        display: block;
    }
    .topNav_mobile .menu img{
        width: 32px;
    }
    .topNav_mobile .menu {
        margin-right: 40px;
    }
}

/* ---- menu ----*/
.nap_menu  {
    position: fixed;
    overflow: hidden;
    width: 100%;
    height: calc(100vh - 68px);
    top: 68px;
    z-index: 99999;
    transform: translateX(100%);
    transition: 0.8s;
    
}
@media screen and (min-width: 992px){
    .nap_menu  {
        max-width: 60%;
        height: 100vh;
        right: 0;
        top: 0;
    }
}
@media screen and (min-width: 1200px){
    .nap_menu  {
        max-width: 40%;
        height: 100vh;
        right: 0;
        top: 0;
    }
}
.topNav_mobile .icon_wrap {
    display: flex;
    gap: 28px;
}
.topNav_mobile .icon_wrap .sec1{
    gap: 16px;
    display: none;
}
@media screen and (min-width: 992px){
    .topNav_mobile .icon_wrap .sec1{
        display: flex;
        align-items: center;
    }
}
.topNav_mobile .icon_wrap .sec1 > a{
width: 40px;
height: 40px;
}
.topNav_mobile .icon_wrap #memberPic {
    border: 4px solid var(--primaryColor_dark);
    border-radius: 50%;
    width: 38px;
    height: 38px;
    background-image: url(./img/component/icon/circle-people.svg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 50% 50%;
    background-color: var(--primaryColor_dark);
}


/* 選單內容 */
.nap_menu .content {
    background-color:var(--primaryColor_dark);
    height: 100%;
    width: 100%;
    padding-top: 40px;
    box-shadow: 0px 0px 60px #00000000;
}
@media screen and (min-width: 992px){
    .nap_menu .content {
        padding-top: 0px;
        display: flex;
        justify-content: center;
        align-items: center;
    }
}
.nap_menu_open {
    transform: none !important;
    opacity: 1 !important;
    display: block !important;
    pointer-events: auto !important;
}


/* li */
.nap_menu, .nap_menu a {
    color: var(--white);
    text-decoration: none;
}
.nap_menu .menu_link {
    margin: auto;
    width: 263px;
}
@media screen and (min-width: 992px){
    .nap_menu .menu_link {
        margin: auto auto auto 12%;
        width: 360px;
    }
}
.nap_menu .menu_link > li {
    margin-bottom: 36px;
}
@media screen and (min-width: 992px){
    .nap_menu .menu_link > li {
        margin-bottom: 42px;
    }
}
.nap_menu .menu_link a:hover {
    color: var(--subColor_yellow);
}

.nap_menu .menu_link, .menu_link a   {
    font-size: 22px;
}
.nap_menu .menu_link span {
    font-size: 16px;
    margin-left: 8px;
}
.nap_menu .menu_link .layer2 {
    margin-top: 16px;
    font-weight: 100;
    border-top: 1px solid #fff;
}
.nap_menu .menu_link .layer2 a{
    font-size: 18px;
    border-left: 4px solid #fff ;
    padding-left: 12px;
}
.nap_menu .menu_link .layer2 li{
    margin-top: 16px;
}
.nap_menu .menu_link .layer2 span{
    font-size: 14px;
}
@media screen and (min-width: 992px){

    .nap_menu .menu_link, .menu_link a   {
        font-size: 28px;
    }
    .nap_menu .menu_link span {
        font-size: 20px;
        margin-left: 8px;
    }
    .nap_menu .menu_link .layer2 {
        margin-top: 16px;
        font-weight: 100;
        border-top: 1px solid #fff;
    }
    .nap_menu .menu_link .layer2 a{
        font-size: 22px;
        border-left: 4px solid rgb(255, 255, 255);
        padding-left: 14px;
    }
    .nap_menu .menu_link .layer2 li{
        margin-top: 16px;
    }
    .nap_menu .menu_link .layer2 span{
        font-size: 16px;
    }
    
}
/* logout */
.nap_menu .logout {
    font-size: 24px;
    margin: 70px 0 0 auto;
    width: fit-content;
}

@media screen and (min-width: 992px){
    .nap_menu .logout {
        position: absolute;
        bottom: 32px;
        right: 12%;   
    }
}
/* lightBox */
.menu_lightBox_pc{
    position: fixed;
    width: 100%;
    height: 100vh;
    left: 0;
    top: 0;
    background-color: rgba(0, 0, 0, 0.8);
    backdrop-filter: blur(2px);
    opacity: 0;
    transition: 0.8s;
    z-index: 9999;
    pointer-events: none;
    /* display: none; */
}
@media screen and (max-width: 991px){
    .menu_lightBox_pc{
    display: none !important;
    opacity: 0 !important;
    pointer-events: none !important;
    }
}
/* icon_links */
.nap_menu .icon_link {
    position: absolute;
    display: flex;
    left: calc((100% - 263px)/2 );
    top: 543px;
    transform: translateX(-32px);
}
@media screen and (min-width: 992px){
    .nap_menu .icon_link {
        display: none;
    }
}
.nap_menu .icon_link li {
    margin-left: 32px;

}

/* ------ napBtn ------*/

/* padding_filled */

.napBtn_padding_filled {
    display: block;
    text-decoration: none;
    padding: 12px 32px;
    background-color:var(--primaryColor_dark);
    border-radius: 200px;
    width: fit-content;
    transition: 0.3s;
    color: var(--white);
    font-size: 18px;
    font-weight: 400 ;
}
.napBtn_padding_filled:hover {
    background-color:var(--primaryColor_light);
    color: var(--white);
}


/* padding_outline */

.napBtn_padding_outline {
    display: block;
    text-decoration: none;
    padding: 12px 32px;
    /* background-color:var(--white); */
    border-radius: 200px;
    width: fit-content;
    transition: 0.3s;
    outline: 2px solid var(--primaryColor_dark);
    color: var(--primaryColor_dark);
    font-size: 18px;
    font-weight: 400 ;
}
.napBtn_padding_outline:hover {
    background-color:var(--primaryColor_light);
    outline: 2px solid var(--primaryColor_light);
    color:var(--white);
}

/* fixed_filled */

.napBtn_fixed_filled {
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 218px;
    height: 42px;
    background-color:var(--primaryColor_dark);
    border-radius: 200px;
    transition: 0.3s;
    color: var(--white);
    font-size: 18px;
    font-weight: 400 ;
}
.napBtn_fixed_filled:hover {
    background-color:var(--primaryColor_light);
    color: var(--white);
}

/* fixed_outlined*/

.napBtn_fixed_outlined {
    text-decoration: none;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 218px;
    height: 42px;
    /* background-color:var(--white); */
    outline: 2px solid var(--primaryColor_dark);
    border-radius: 200px;
    transition: 0.3s;
    color: var(--primaryColor_dark);
    font-size: 18px;
    font-weight: 400 ;
}
.napBtn_fixed_outlined:hover {
    background-color:var(--primaryColor_light);
    outline: 2px solid var(--primaryColor_light);
    color: var(--white);
}

/* --- like_Btn ---*/
/* 寵物卡片 */
.napBtn_likeBtn {
    display: flex;
    justify-content: center;
    gap: 6px;
    align-items: center;
    background-color: #fff;
    border-radius: 200px;
    border: 1px solid var(--primaryColor_dark);
    color: var(--primaryColor_dark);
    font-size: 16px;
    padding: 6px 12px;
    cursor: pointer;
}
.likeBtn_activated {
    background-color: var(--subColor_lightRed);
    color: var(--white);
    border: 1px solid var(--subColor_lightRed);
}
.napBtn_likeBtn .svgs{
    display: flex;
    position: relative;
}
.napBtn_likeBtn #white{
    position: absolute;
    left: 0;
    display: none;
}
/* 寵物卡片 */
.napBtn_likeBtn_comt{
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 6px;
    border: none;
    background-color: transparent;
    cursor: pointer;
}

.napBtn_likeBtn_comt .svgs{
    position: relative;
    width: 20px;
    aspect-ratio: 1 / 1;
    font-size: 14px;
}
.napBtn_likeBtn_comt span{
    font-size: 14px;
    color: #8A7171;
}
.napBtn_likeBtn_comt .svgs img{
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    aspect-ratio: 1 / 1;
}
.napBtn_likeBtn_comt #napActivate {
    display: none;
}





/* ------ napSwtich ------*/

/* 兩格 */
.napSwitch_two {
    background-color:var(--white);
    display: flex;
    width: fit-content;
    justify-content: center;
    align-items: center;
    position: relative;
    border: 2px solid var(--secondaryColor_default);
    border-radius: 500px;
    z-index: 0;
    font-size: 18px;
}
.napSwitch_two .sec {
    padding: 8px 24px;
    cursor: pointer;
    color: var(--black_600);
    transition: 0.3s;
}
.napSwitch_two .num1 {
    color: var(--white);
}
.napSwitch_two .backmask {
    transform: translateX(-1px);
    width: calc(50% + 2px);
    height: calc(100% + 2px);
    position: absolute;
    left: 0%;
    background-color:var(--secondaryColor_default);
    border-radius: 500px;
    z-index: -50;
    transition: 0.3s;
}

/* 三格 */
.napSwitch_three {
    background-color:var(--white);
    display: flex;
    width: fit-content;
    justify-content: center;
    align-items: center;
    position: relative;
    border: 2px solid var(--secondaryColor_default);
    border-radius: 500px;
    z-index: 0;
    font-size: 16px;
}
.napSwitch_three .sec {
    padding: 9px 16px;
    cursor: pointer;
    color: var(--black_600);
    transition: 0.3s;
}
.napSwitch_three .num1 {
    color: var(--white);
}
.napSwitch_three .backmask {
    transform: translateX(-1px);
    width: calc(33.333333% + 2px);
    height: calc(100% + 2px);
    position: absolute;
    left: 0%;
    background-color:var(--secondaryColor_default);
    border-radius: 500px;
    z-index: -50;
    transition: 0.3s;
}


/* ------ 留言區區塊選擇 ------*/

.chat_bordSlec_PC {
    background-color: var(--primaryColor_tint);
    width: fit-content;
    border-radius: var(--border-radious);
    position: relative;
    width: 200px;
    height: 128px;
    display: flex;
    flex-direction: column;
    justify-content:space-evenly;
    align-items: center;
}
.chat_bordSlec_PC .top, .chat_bordSlec_PC .bot {
    text-decoration: none;
    color: #8A7171;

}
.chat_bordSlec_PC .top {
    font-weight: bold;
}

.chat_bordSlec_PC .napBtn {
    border: none;
    border-radius: var(--border-radious);
    background-color: var(--primaryColor_tint);
    font-size: 20px;
    width: fit-content;
    height: fit-content;
    cursor: pointer;
}
.chat_bordSlec_PC .line {
    width: 80%;
    height: 1px;
    background-color: #8a71714d;
}


/* ------ 頁數選擇器  ------*/
.page_slec{
    width: fit-content;
    display: flex;
    justify-content: center;
    align-items: center;
    margin: auto;
}
.page_slec .indic_wrap {
    display: flex;
    display: none;
}
@media screen and (min-width: 992px){
    .page_slec .indic_wrap {
        display:contents;
    }
}
.page_slec .page_click {
    background-color: rgba(255, 255, 255, 0);
    border: none;
    height: fit-content;
    padding: 0;
    margin: 0px 50px;
    cursor: pointer;
}
@media screen and (max-width: 991px){
    .page_slec .page_click {
        width: 92px;
        margin: 0px 20px;
    }
}
.page_slec .page_click img{
    width: 100%;
    height: 100%;
}
.page_slec .page_indic{
    background-color: rgba(255, 255, 255, 0);
    display: flex;
    justify-content: center;
    align-items: center;
    border: none;
    padding: 0;
    width: 38px;
    height: 38px;
    border: 1px solid var(--primaryColor_dark);
    border-radius: 50%;
    margin: 0px 14px;
    cursor: pointer;
 }
 .page_slec .napPage{
    font-size: 26px;
    color: var(--primaryColor_dark);
    margin-bottom: 5px;
 }


/* ---- 留言卡片label ----*/

.comtLabel {
    display: flex;
    justify-content: center;
    align-items: center;
    border-radius: 100px;
    width: 106px;
    height: 20px;
    background-color: var(--primaryColor_tint);
}
.comtLabel span {
    font-size: 12px;
    color: var(--primaryColor_dark);
    font-weight: 300;
}

    </style>

<body>
<div class="topNav_mobile">
    <a class="logo" href="#">
        <img class='mb' src="./img/component/logo/logo-1.svg" alt="">
        <img class='pc' src="./img/component/logo/logo-2.svg" alt="">
    </a>
    <div class="icon_wrap">
        <div class="sec1">
            <a href="">
                <img src="./img/component/icon/Cart.svg" alt="">
            </a>
            <a id="memberPic" href=""></a>
        </div>
        <button class="menu sec2">
            <img src="./img/component/icon/hamburger.svg" alt="">
        </button>
    </div>

</div>

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
                            <path d="M14.609 33.7363C12.9197 33.7363 11.5491 35.1416 11.5491 36.8627C11.5491 38.5838 12.9197 39.9891 14.609 39.9891C16.2983 39.9891 17.6689 38.5838 17.6689 36.8627C17.6689 35.1416 16.2983 33.7363 14.609 33.7363V33.7363ZM30.0147 33.7363C28.3254 33.7363 26.9548 35.1416 26.9548 36.8627C26.9548 38.5838 28.3254 39.9891 30.0147 39.9891C31.7041 39.9891 33.0746 38.5838 33.0746 36.8627C33.0746 35.1416 31.7041 33.7363 30.0147 33.7363V33.7363Z" fill="#ffffff" />
                            <path d="M36.8888 5.95861H10.0084L9.11596 2.44009C8.86097 1.03486 7.64976 0 6.2473 0H1.85932C0.828724 0 0 0.849673 0 1.90632C0 2.96296 0.828724 3.81264 1.85932 3.81264H5.63107L10.6565 23.6601L8.6591 28.3769C8.41473 28.9651 8.46786 29.6405 8.80785 30.1852C9.14784 30.719 9.73219 31.0458 10.359 31.0458H33.7333C34.7639 31.0458 35.5926 30.1961 35.5926 29.1394C35.5926 28.0828 34.7639 27.2331 33.7333 27.2331H13.1958L14.322 24.5752C14.322 24.5752 14.3327 24.5098 14.3433 24.4771H33.6483C34.6364 24.4771 35.4864 23.78 35.7201 22.7996L38.9713 8.63834C39.29 7.26579 38.27 5.95861 36.8995 5.95861H36.8888ZM18.8375 18.0174C18.8375 18.7691 18.2425 19.3791 17.5094 19.3791C16.7763 19.3791 16.1814 18.7691 16.1814 18.0174V12.4183C16.1814 11.6667 16.7763 11.0566 17.5094 11.0566C18.2425 11.0566 18.8375 11.6667 18.8375 12.4183V18.0174ZM25.2123 18.0174C25.2123 18.7691 24.6173 19.3791 23.8842 19.3791C23.1511 19.3791 22.5562 18.7691 22.5562 18.0174V12.4183C22.5562 11.6667 23.1511 11.0566 23.8842 11.0566C24.6173 11.0566 25.2123 11.6667 25.2123 12.4183V18.0174ZM31.5871 18.0174C31.5871 18.7691 30.9921 19.3791 30.259 19.3791C29.5259 19.3791 28.931 18.7691 28.931 18.0174V12.4183C28.931 11.6667 29.5259 11.0566 30.259 11.0566C30.9921 11.0566 31.5871 11.6667 31.5871 12.4183V18.0174Z" fill="#ffffff" />
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
                            <path d="M19.9697 24.0026C25.2335 21.7179 27.7234 15.4187 25.5313 9.93294C23.3391 4.44714 17.295 1.85209 12.0313 4.13673C6.76757 6.42137 4.27758 12.7206 6.46972 18.2064C8.66187 23.6922 14.706 26.2872 19.9697 24.0026Z" fill="#ffffff" />
                            <path d="M16 28.7871C8.90206 28.7871 2.84445 31.7241 0.381897 35.8826C-0.671601 37.6805 0.579428 39.9862 2.60741 39.9862H29.3926C31.4206 39.9862 32.6716 37.6805 31.6181 35.8826C29.1687 31.7241 23.0979 28.7871 16 28.7871V28.7871Z" fill="#ffffff" />
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