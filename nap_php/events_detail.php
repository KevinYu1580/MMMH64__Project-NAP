<?php
// require __DIR__ . '/parts/connect_db.php';
$pageName = 'home'; // 頁面名稱
?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

<!-- 加自己的css -->
<link rel="stylesheet" href="./nap_css/events_detail.css">



</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>



<!-- 活動詳細頁banner | events-detail -->
<section class="events-detail">
    <div class="events-detail-container">
        <div class="events-detail-row d-md-flex">
            <div class="events-detail-col col-md-6">
                <div class="detail-imgbox">
                    <img src="./img/events/eve-00.jpg" alt="">
                </div>
            </div>
            <div class="events-detail-col col-md-6">
                <div class="detail-textbox">
                    <div class="like-btn">
                        <svg id="outline" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M19.0625 6.56257L19.9297 7.50007L20.8672 6.56413C23.4844 4.01335 27.1094 2.85241 30.6719 3.44538C36.0547 4.34226 40 9.00007 40 14.461V14.9141C40 18.1563 38.6562 21.2579 36.2812 23.4688L22.1641 36.6485C21.5781 37.1954 20.8047 37.5001 20 37.5001C19.1953 37.5001 18.4219 37.1954 17.8359 36.6485L3.71797 23.4688C1.34609 21.2579 0 18.1563 0 14.9141V14.461C0 9.00007 3.94688 4.34226 9.32812 3.44538C12.8203 2.85241 16.5156 4.01335 19.0625 6.56257C18.9922 6.56257 19.0625 6.56335 19.0625 6.56257ZM19.9297 12.8048L16.4141 9.14851C14.7188 7.52194 12.3125 6.75007 9.94531 7.14382C6.37109 7.73991 3.75 10.836 3.75 14.461V14.9141C3.75 17.1173 4.66484 19.2266 6.27656 20.7266L20 33.5391L33.7266 20.7266C35.3359 19.2266 36.25 17.1173 36.25 14.9141V14.461C36.25 10.836 33.625 7.73991 30.0547 7.14382C27.6875 6.75007 25.2812 7.52194 23.5859 9.14851L19.9297 12.8048Z" fill="#7C8C38" />
                        </svg>
                        <svg id="cover" width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 14.9141V14.461C0 9.00006 3.94688 4.34225 9.32812 3.44537C12.8203 2.85241 16.5156 4.01334 19.0625 6.56412L20 7.50006L20.8672 6.56412C23.4844 4.01334 27.1094 2.85241 30.6719 3.44537C36.0547 4.34225 40 9.00006 40 14.461V14.9141C40 18.1563 38.6562 21.2579 36.2812 23.4688L22.1641 36.6485C21.5781 37.1954 20.8047 37.5001 20 37.5001C19.1953 37.5001 18.4219 37.1954 17.8359 36.6485L3.71797 23.4688C1.34609 21.2579 2.34375e-05 18.1563 2.34375e-05 14.9141H0Z" fill="#7C8C38" />
                        </svg>
                    </div>
                    <h3>10/08-10/09</h3>
                    <h2>汪汪大集合 | 兩日遊</h2>
                    <div class="detail-notice d-flex align-items-center">
                        <div class="icon-box">
                            <img src="./img/component/icon/Clock.svg" alt="">
                        </div>
                        <p><span>活動時間：</span>10/08上午09:00~10/09下午16:00</p>
                    </div>
                    <div class="detail-notice d-flex align-items-center">
                        <div class="icon-box ">
                            <img src="./img/component/icon/landmark.svg" alt="">
                        </div>
                        <p><span>集合地點：</span>園區入口集合報到</p>
                    </div>
                    <div class="detail-notice d-flex align-items-center">
                        <div class="icon-box">
                            <img src="./img/component/icon/People-1.svg" alt="">
                        </div>
                        <p><span>剩餘名額：</span>9 / 20人</p>
                    </div>
                    <div class="schedule d-md-flex justify-content-md-between">
                        <div class="day1 col-md-5">
                            <h5>10/08 | Day 1</h5>
                            <ul>
                                <li>相見說明會</li>
                                <li>動手做鮮食</li>
                                <li>歡樂瘋戲水</li>
                                <li>浪浪講學堂</li>
                                <li>一起說晚安</li>
                            </ul>
                        </div>
                        <div class="day2 col-md-5">
                            <h5>10/09 | Day 2</h5>
                            <ul>
                                <li>誰是小吃貨</li>
                                <li>路跑大作戰</li>
                                <li>放電跑一跑</li>
                                <li>幫浪浪洗澡</li>
                                <li>合照留紀念</li>
                            </ul>
                        </div>
                    </div>
                    <div class="price-joinbtn d-md-flex justify-content-md-between">
                        <div class="price d-flex justify-content-center align-items-center">
                            <p>NT$
                            <h6>2,999</h6> / 人</p>
                        </div>
                        <div class="join-btn">
                            <a href="#">手刀報名 GO</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 比外表重要的事 | important-thing -->
<section class="important-thing">
    <div class="important-thing-container">
        <div class="important-thing-textbox">
            <h3>｜不要再相信一見鐘情了｜</h3>
            <h2>比外表更重要的事</h2>
            <p class="mportant-thing-mb">無論養狗或是貓，牠們並不是有得吃、有地方上廁所和睡覺，需求就會被滿足。
                除了食、衣、住、行、育、樂需被滿足外，牠們還有「被陪伴」的重要需求，在還沒飼養之前，都需和牠一起持續不斷學習。</p>
            <p class="mportant-thing-pc">無論養狗或是貓，牠們並不是有得吃、有地方上廁和睡覺，需求就會被滿足。毛孩的食、衣、住、行、育、樂通通都需要，更重要的是，牠們還有「被陪伴」的重要需求，狗狗每天需要出門散步 2 到 3 次以上、貓咪則至少需要 1 - 2 小時的陪伴、玩耍時間；而在教育這個環節上，無論是時間或金錢都需要另外準備與規劃，在與毛孩一起生活的日子裡，甚至還沒飼養之前，都需和牠一起持續不斷學習。</p>
        </div>
        <div class="important-thing-imgbox-mb">
            <div class="run-light-box d-flex">
                <ul class="run-light-1 d-flex">
                    <li><img src="./img/component/illustration/illustration-79.png" alt=""></li>
                    <li><img src="./img/component//illustration/illustration-80.png" alt=""></li>
                    <li><img src="./img/component/illustration/illustration-81.png" alt=""></li>
                    <li><img src="./img/component/illustration/illustration-82.png" alt=""></li>
                </ul>
                <ul class="run-light-2 d-flex">
                    <li><img src="./img/component/illustration/illustration-79.png" alt=""></li>
                    <li><img src="./img/component/illustration/illustration-80.png" alt=""></li>
                    <li><img src="./img/component/illustration/illustration-81.png" alt=""></li>
                    <li><img src="./img/component/illustration/illustration-82.png" alt=""></li>
                </ul>
            </div>
        </div>

        <div class="important-thing-imgbox-pc">
            <img class="important-thing-imgbox1 front" src="./img/component/illustration/illustration-79.png" alt="">
            <img class="important-thing-imgbox2" src="./img/component/illustration/illustration-80.png" alt="">
            <img class="important-thing-imgbox3" src="./img/component/illustration/illustration-81.png" alt="">
            <img class="important-thing-imgbox4" src="./img/component/illustration/illustration-82.png" alt="">
        </div>

    </div>
</section>

<!-- 毛孩專家與合作夥伴 | expert-partner -->
<section class="expert-partner">
    <div class="expert-partner-container">
        <div class="expert-partner-textbox">
            <h2><span>我們集結多位</span>毛孩專家、合作夥伴<br>呈現多元觀點和意見</h2>
            <h3 class="expert-partner-mb">在飼養前先了解不同毛孩獨特的個性、照護方式、必要花費、可能的挑戰，經過全方位評估再選擇適合自己的毛孩，減少退養、棄養的發生。 </h3>
            <h3 class="expert-partner-pc">希望對即將成為新手爸媽的飼主有幫助，在飼養前先了解不同毛孩獨特的個性、照護方式、必要花費、可能的挑戰，經過全方位評估再選擇適合自己的毛孩，減少退養、棄養的發生。 </h3>
        </div>
        <div class="expert-partner-card-group d-md-flex">
            <div class="expert-partner-card ep-card-1 col-md-4">
                <div class="ep-card-imgbox">
                    <img src="./img/events/person-01.jpg" alt="">
                </div>
                <div class="ep-card-textbox">
                    <h6>台大獸醫師</h6>
                    <p>林筱慧</p>
                </div>
            </div>
            <div class="expert-partner-card ep-card-2 col-md-4">
                <div class="ep-card-imgbox">
                    <img src="./img/events/person-02.jpg" alt="">
                </div>
                <div class="ep-card-textbox">
                    <h6>寵物溝通師</h6>
                    <p>貓研社-葛宴</p>
                </div>
            </div>
            <div class="expert-partner-card ep-card-3 col-md-4">
                <div class="ep-card-imgbox">
                    <img src="./img/events/person-03.jpg" alt="">
                </div>
                <div class="ep-card-textbox">
                    <h6>超熱血志工</h6>
                    <p>游凱文</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 了解陪伴 | know-accompany -->
<section class="know-accompany">
    <div class="know-accompany-container">
        <div class="know-accompany-row d-md-flex">
            <div class="know-accompany-col col-md-6">
                <div class="know-accompany-textbox">
                    <h2>了解從相處陪伴開始</h2>
                    <p>N.A.P.園區將規劃兩天一夜的活動行程，透過活動中與浪浪一同進行互動，來了解自己與浪浪的適性度，同時也能一同留下美好的回憶。</p>
                    <div class="know-accompany-imgbox d-md-none">
                        <ul class="ka-train mb-train d-flex flex-shrink-0">
                            <li><img src="./img/events/intro-01.jpg" alt=""></li>
                            <li><img src="./img/events/intro-02.jpg" alt=""></li>
                            <li><img src="./img/events/intro-03.jpg" alt=""></li>
                            <li><img src="./img/events/intro-04.jpg" alt=""></li>
                            <li><img src="./img/events/intro-05.jpg" alt=""></li>
                            <li><img src="./img/events/intro-06.jpg" alt=""></li>
                            <li><img src="./img/events/intro-07.jpg" alt=""></li>
                            <li><img src="./img/events/intro-08.jpeg" alt=""></li>
                            <li><img src="./img/events/intro-09.jpg" alt=""></li>
                            <li><img src="./img/events/intro-10.jpg" alt=""></li>
                        </ul>
                    </div>
                    <div class="silder-dot-box d-md-none">
                        <div class="silder-dot-mb">
                            <div class="dot dot1 default"></div>
                            <div class="dot dot2"></div>
                            <div class="dot dot3"></div>
                            <div class="dot dot4"></div>
                            <div class="dot dot5"></div>
                            <div class="dot dot6"></div>
                            <div class="dot dot7"></div>
                            <div class="dot dot8"></div>
                            <div class="dot dot9"></div>
                            <div class="dot dot10"></div>
                        </div>
                    </div>
                    <h3>01 相見說明會</h3>
                    <p>與您尬意的浪浪相見，然後透過N.A.P.的說明，讓您了解領養流浪動物的各種須知，並且說明本次兩天一夜行程及注意事項。</p>
                </div>
            </div>
            <div class="know-accompany-col col-md-6">
                <div class="know-accompany-imgbox">
                    <ul class="ka-train pc-train d-md-flex">
                        <li class="pic pic1 slide-active"><img src="./img/events/intro-01.jpg" alt=""></li>
                        <li class="pic pic2 slide-next"><img src="./img/events/intro-02.jpg" alt=""></li>
                        <li class="pic pic3"><img src="./img/events/intro-03.jpg" alt=""></li>
                        <li class="pic pic4"><img src="./img/events/intro-04.jpg" alt=""></li>
                        <li class="pic pic5"><img src="./img/events/intro-05.jpg" alt=""></li>
                        <li class="pic pic6"><img src="./img/events/intro-06.jpg" alt=""></li>
                        <li class="pic pic7"><img src="./img/events/intro-07.jpg" alt=""></li>
                        <li class="pic pic8"><img src="./img/events/intro-08.jpeg" alt=""></li>
                        <li class="pic pic9"><img src="./img/events/intro-09.jpg" alt=""></li>
                        <li class="pic pic10"><img src="./img/events/intro-10.jpg" alt=""></li>
                    </ul>
                </div>
                <div class="silder-dot-pc">
                    <div class="dot dot1 default"></div>
                    <div class="dot dot2"></div>
                    <div class="dot dot3"></div>
                    <div class="dot dot4"></div>
                    <div class="dot dot5"></div>
                    <div class="dot dot6"></div>
                    <div class="dot dot7"></div>
                    <div class="dot dot8"></div>
                    <div class="dot dot9"></div>
                    <div class="dot dot10"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- 出發前五件事 | five-things -->
<div class="five-things-bg"></div>
<section class="five-things">
    <div class="five-things-container">
        <h2>出發前先確認最重要<br>的五件事</h2>
        <div class="five-things-card-group">
            <div class="five-things-card">
                <div class="ft-card-row d-md-flex align-items-center">
                    <div class="ft-card-col col-md-2">
                        <div class="ft-icon-box">
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_30_454)">
                                    <path d="M9.74725 18.142H8.21207C7.18862 18.142 6.36011 18.9705 6.36011 19.994C6.36011 21.0174 7.18862 21.8459 8.21207 21.8459H9.74725C10.7707 21.8459 11.5992 21.0174 11.5992 19.994C11.5992 18.9705 10.7707 18.142 9.74725 18.142ZM20.0062 11.587C21.0296 11.587 21.8581 10.7585 21.8581 9.73505V8.19986C21.8581 7.17641 21.0296 6.3479 20.0062 6.3479C18.9827 6.3479 18.1542 7.17641 18.1542 8.19986V9.73505C18.1542 10.7585 18.9827 11.587 20.0062 11.587ZM31.8003 18.142H30.2651C29.2416 18.142 28.4131 18.9705 28.4131 19.994C28.4131 21.0174 29.2416 21.8459 30.2651 21.8459H31.8003C32.8237 21.8459 33.6522 21.0174 33.6522 19.994C33.6522 18.9705 32.8237 18.142 31.8003 18.142ZM20.0062 33.64C21.0296 33.64 21.8581 32.8115 21.8581 31.788V30.2529C21.8581 29.2294 21.0296 28.4009 20.0062 28.4009C18.9827 28.4009 18.1542 29.2294 18.1542 30.2529V31.788C18.1542 32.8115 18.9827 33.64 20.0062 33.64Z" fill="#B18042" />
                                    <path d="M40 19.9939C40 8.95522 31.0448 0 19.9939 0C8.94304 0 0 8.95522 0 19.9939C0 31.0326 8.95522 39.9878 19.9939 39.9878C31.0326 39.9878 39.9878 31.0326 39.9878 19.9939H40ZM20.0061 35.5528C11.4286 35.5528 4.44715 28.5714 4.44715 19.9939C4.44715 11.4164 11.4164 4.44715 19.9939 4.44715C28.5714 4.44715 35.5528 11.4286 35.5528 20.0061C35.5528 28.5836 28.5714 35.565 19.9939 35.565L20.0061 35.5528ZM26.488 11.2214L20.2498 17.4596C20.1645 17.4596 20.0792 17.4353 19.9939 17.4353C19.799 17.4353 19.604 17.4596 19.4091 17.4962L14.5964 12.6835C13.8776 11.9647 12.6957 11.9647 11.9768 12.6835C11.258 13.4024 11.258 14.5842 11.9768 15.3031L16.9479 20.2741C16.9479 20.3594 16.9235 20.4447 16.9235 20.53C16.9235 22.2236 18.3003 23.6125 20.0061 23.6125C21.7118 23.6125 23.0886 22.2358 23.0886 20.53C23.0886 20.3351 23.0643 20.1401 23.0277 19.9452L29.1075 13.8654C29.8264 13.1465 29.8264 11.9647 29.1075 11.2458C28.3887 10.527 27.2068 10.527 26.488 11.2458V11.2214Z" fill="#B18042" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_30_454">
                                        <rect width="40" height="40" fill="#B18042" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>時間</h3>
                    </div>
                    <div class="ft-card-col col-md-8">
                        <p class="ft-card-p-mb">毛孩需要你的陪伴「被陪伴」<br>對毛孩而言是個重要的需求</p>
                        <p class="ft-card-p-pc">毛孩需要你的陪伴，「被陪伴」對毛孩而言是個重要的需求，一天24小時中，我們還有多少時間可以分給牠呢？</p>
                    </div>
                </div>
            </div>
            <div class="five-things-card">
                <div class="ft-card-row d-md-flex align-items-center justify-content-md-end">
                    <div class="ft-card-col col-md-2">
                        <div class="ft-icon-box">
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_30_472)">
                                    <path d="M27.7543 20.9373C32.4334 16.3116 38.9284 15.3951 39.061 6.30133C39.0742 4.8406 35.9725 5.44207 33.5999 5.44207C31.2272 5.44207 28.3111 4.13887 25.8456 1.67568C23.3802 -0.787509 16.0633 -0.243315 11.5433 1.50383C7.02332 3.25098 -0.0814236 12.7028 1.07177 14.8222C2.22497 16.9417 9.82016 21.7106 10.9468 21.9111C12.0735 22.1116 14.486 18.4884 13.1074 14.8079C11.9807 11.7719 11.7687 10.3541 12.047 8.90773C12.1 8.63563 12.3386 8.43514 12.5905 8.46378C12.8423 8.49242 13.0544 8.72155 13.0544 9.00797C13.0809 10.2969 13.3328 11.8578 14.0618 13.6193C16.1694 18.7318 13.0412 24.4316 11.9542 24.2024C11.1192 24.0306 8.57417 22.6271 7.40772 21.9684C7.26192 21.8824 7.10286 21.8824 6.95705 21.9684C6.81124 22.04 6.7052 22.1832 6.67869 22.355C6.26778 24.3456 4.95552 30.2029 2.91424 35.3011C7.38121 37.5495 18.8336 42.0606 29.7029 36.0601C28.0327 31.4918 25.8854 28.0404 25.9384 25.4483C25.9384 25.4197 25.9384 25.3911 25.9384 25.3624C26.2565 23.3432 26.8663 21.8395 27.7676 20.9516L27.7543 20.9373ZM24.0297 9.45192C23.1946 9.49488 22.4921 8.80748 22.4523 7.91959C22.4125 7.03169 23.0488 6.25836 23.8706 6.2154C24.6924 6.17244 25.4082 6.85984 25.448 7.74773C25.4877 8.63563 24.8515 9.40896 24.0297 9.45192Z" fill="#B18042" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_30_472">
                                        <rect width="40" height="40" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>個性</h3>
                    </div>
                    <div class="ft-card-col col-md-8">
                        <p class="ft-card-p-mb">了解自己的個性<br>「我」適合什麼樣的毛孩？</p>
                        <p class="ft-card-p-pc">了解自己的個性「我」適合什麼樣的毛孩？從了解自己開始，到底是一隻愛戶外活動的狗狗適合你？還是喜歡窩在你旁邊撒嬌的貓咪呢？</p>
                    </div>
                </div>
            </div>
            <div class="five-things-card">
                <div class="ft-card-row d-md-flex align-items-center">
                    <div class="ft-card-col col-md-2">
                        <div class="ft-icon-box">
                            <svg viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 14.9141V14.461C0 9.00006 3.94688 4.34225 9.32812 3.44537C12.8203 2.85241 16.5156 4.01334 19.0625 6.56412L20 7.50006L20.8672 6.56412C23.4844 4.01334 27.1094 2.85241 30.6719 3.44537C36.0547 4.34225 40 9.00006 40 14.461V14.9141C40 18.1563 38.6562 21.2579 36.2812 23.4688L22.1641 36.6485C21.5781 37.1954 20.8047 37.5001 20 37.5001C19.1953 37.5001 18.4219 37.1954 17.8359 36.6485L3.71797 23.4688C1.34609 21.2579 2.34375e-05 18.1563 2.34375e-05 14.9141H0Z" fill="#B18042" />
                            </svg>
                        </div>
                        <h3>緣份</h3>
                    </div>
                    <div class="ft-card-col col-md-8">
                        <p class="ft-card-p-mb">神秘的緣份多到現場和毛孩互動，那些想像中喜歡的條件，都將不再重要！</p>
                        <p class="ft-card-p-pc">神秘的緣份多到現場和毛孩互動，在認識「你」的毛孩之後，那些想像中喜歡的品種、花色、長相、性別，可能都不再是最重要的考量了！</p>
                    </div>
                </div>
            </div>
            <div class="five-things-card">
                <div class="ft-card-row d-md-flex align-items-center justify-content-md-end">
                    <div class="ft-card-col col-md-2">
                        <div class="ft-icon-box">
                            <svg viewBox="0 0 45 43" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_593_27238)">
                                    <path d="M44.0058 18.4097L24.455 0.723199C23.3284 -0.263039 21.6715 -0.263039 20.5449 0.723199L0.927796 18.4097C-0.265135 19.4617 -0.331409 21.3027 0.728974 22.4862C1.32544 23.0779 2.12073 23.4067 2.84974 23.4067C3.57875 23.4067 4.24149 23.1437 4.83796 22.6834L22.4668 6.77213L40.0957 22.6834C41.2886 23.7354 43.1443 23.6697 44.2047 22.4862C45.2651 21.3027 45.1988 19.4617 44.0058 18.4097ZM6.95872 23.4067V41.422C6.95872 42.0795 7.42264 42.5397 7.75401 42.737C8.15165 42.9342 8.5493 43.0657 9.01322 43.0657C18.888 43.0657 26.0456 43.0657 35.9204 43.0657C36.3843 43.0657 36.782 43 37.1796 42.737C37.5773 42.5397 37.9749 42.0795 37.9749 41.422V23.4067L22.4668 9.4021L6.95872 23.4067ZM16.1045 21.9602H28.8291V30.7706H16.1045V21.9602ZM4.04267 2.30118L15.972 2.69568L4.77168 13.3471L4.04267 2.30118Z" fill="#B18042" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_593_27238">
                                        <rect width="45" height="43" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>生活</h3>
                    </div>
                    <div class="ft-card-col col-md-8">
                        <p class="ft-card-p-mb">生活和家庭需求會依毛孩個體品種而有不同，需了解自己的生活型態和時間彈性</p>
                        <p class="ft-card-p-pc">我的生活型態和 家庭成員 對人需求的程度會依照毛孩個體品種差異而有所不同，好好檢視自己的生活型態和時間的彈性，以及未來可能的改變。</p>
                    </div>
                </div>
            </div>
            <div class="five-things-card">
                <div class="ft-card-row d-md-flex align-items-center">
                    <div class="ft-card-col col-md-2">
                        <div class="ft-icon-box">
                            <svg viewBox="0 0 40 36" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <g clip-path="url(#clip0_30_450)">
                                    <path d="M26.8729 21.658C26.4734 21.4051 26.1038 20.8867 25.6745 20.2944C24.5893 18.795 23.1106 16.7402 19.5093 16.7402C15.9079 16.7402 14.4292 18.795 13.3441 20.2944C12.9148 20.8867 12.5451 21.3989 12.1516 21.658C8.78875 23.8239 7.15503 26.3969 7.15503 29.5315C7.15503 32.3575 9.83218 35.128 12.563 35.128C15.5204 35.128 16.8262 34.1716 17.7802 33.4744C18.3943 33.0239 18.7997 32.7278 19.5152 32.7278C20.2307 32.7278 20.6362 33.0239 21.2503 33.4744C22.2043 34.1716 23.5041 35.128 26.4675 35.128C29.1983 35.128 31.8754 32.3575 31.8754 29.5315C31.8754 26.3969 30.2417 23.8239 26.8789 21.658H26.8729Z" fill="#B18042" />
                                    <path d="M8.55618 17.598C7.60219 13.9204 5.05025 11.5325 2.7547 12.1742C1.58605 12.5012 0.703607 13.5317 0.274308 15.0804C-0.113252 16.4873 -0.0894025 18.1903 0.345858 19.8748C0.781119 21.5594 1.58009 23.0464 2.59967 24.0646C3.47616 24.9469 4.44208 25.4035 5.38415 25.4035C5.64053 25.4035 5.89692 25.3665 6.14735 25.2986C8.44886 24.6631 9.50422 21.2755 8.55022 17.598H8.55618Z" fill="#B18042" />
                                    <path d="M13.0399 15.9382C15.8064 15.9382 17.9708 12.4395 17.9708 7.96599C17.9708 3.49245 15.8005 0 13.0399 0C10.2792 0 8.10889 3.49862 8.10889 7.97216C8.10889 12.4457 10.2733 15.9443 13.0399 15.9443V15.9382Z" fill="#B18042" />
                                    <path d="M25.9844 15.9382C28.751 15.9382 30.9154 12.4395 30.9154 7.96599C30.9154 3.49245 28.751 0 25.9844 0C23.2178 0 21.0535 3.49862 21.0535 7.97216C21.0535 12.4457 23.2178 15.9443 25.9844 15.9443V15.9382Z" fill="#B18042" />
                                    <path d="M36.2698 12.1743C35.1012 11.8473 33.8371 12.2915 32.7222 13.4084C31.7085 14.4265 30.9036 15.9136 30.4683 17.5981C30.0331 19.2826 30.0033 20.9856 30.3968 22.3925C30.8261 23.9413 31.7026 24.9779 32.8772 25.2987C33.1276 25.3666 33.384 25.4036 33.6344 25.4036C35.7153 25.4036 37.832 23.1576 38.6787 19.875C39.6327 16.1974 38.5773 12.8098 36.2758 12.1743H36.2698Z" fill="#B18042" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_30_450">
                                        <rect width="40" height="36" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </div>
                        <h3>獨特性</h3>
                    </div>
                    <div class="ft-card-col col-md-8">
                        <p class="ft-card-p-mb">了解每隻毛孩的個性會因為品種、<br>個體而有所差異</p>
                        <p class="ft-card-p-pc">了解每隻毛孩的獨特個性毛孩的個性會因為品種、個體而有所差異，除了認識品種特性外，還有什麼方式可以多了解毛孩嗎？</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="five-things-btn">
            <a href="../chiyin/event-enroll-notice.html">手刀報名GO</a>
        </div>
        <div class="five-things-notic">
            <p>《注意事項》</p>
            <ul>
                <li>1. 興趣領養者，當天會有領養遞交表，N.A.P審查員會依照兩日活動表現，審核是否適合領養，如適合者會再通知後續領養程序申請處理，若經審查員審核後，多方考量判定不適合領養者，將不另行通知後續審查結果。
                </li>
                <li>2. 為保障參加者及浪浪們的安全，請不要隨意接觸園區內的浪浪們，需在園區人員的安排下再與浪浪們接觸。</li>
                <li>3. 為參加者及浪浪們的安全，請時刻保障並消毒公德。
                </li>
                <li>4. 請時刻遵從園區人員的指示，以確保參加者及狗狗安全。</li>
            </ul>
        </div>
    </div>
</section>




<?php include __DIR__ . '/parts/nap-footer.php'; ?>
<!-- bootstrap擇一使用 -->
<!-- <script src="./nap_js/bootstrap-4.2.1-dist/js/bootstrap.bundle.min.js"></script> -->
<script src="./nap_js/bootstrap-5.1.1-dist/js/bootstrap.bundle.min.js"></script>
<script src="./nap_js/component.js"></script>
<script src="./nap_js/events_detail.js"></script>
<?php include __DIR__ . '/parts/scripts.php'; ?>

<!-- 自己的js放在這 -->


<?php include __DIR__ . '/parts/html-foot.php'; ?>