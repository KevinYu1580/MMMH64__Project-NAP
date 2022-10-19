<?php
require __DIR__ . '/parts/connect_db.php';
$pageName = '閒聊Q&A'; // 頁面名稱


?>
<?php include __DIR__ . '/parts/html-head.php'; ?>

<!-- bootstrap擇一使用 -->
<link rel="stylesheet" href="./nap_js/bootstrap-5.1.1-dist/css/bootstrap.css">
<!-- <link rel="stylesheet" href="./nap_js/bootstrap-4.2.1-dist/css/bootstrap.css"> -->

</head>
<?php include __DIR__ . '/parts/navbar.php'; ?>
<!-- kevin的css -->
<link rel="stylesheet" href="./nap_css/forum.css?version=&lt;?php echo time(); ?&gt;">

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
                <a style="color: #b18042 ; font-weight: 600 " href="./forum_qa.php" id="num1">閒聊Q&A</a>
                <div class="line"></div>
                <a style=" color: #909090 ; font-weight: 400" href="./forum_event.php" id="num2">活動討論區</a>
            </div>
            <div class="napSwitch_three forum_switch">
                <div class="backmask"></div>
                <a class="num1 sec" onclick="getData({type:1})">
                    狗勾
                </a>
                <a class="num2 sec" onclick="getData({type:0})">
                    貓貓
                </a>
                <a class="num3 sec" onclick="getData({type:2})">
                    不限
                </a>
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
            <button class="top napBtn " href="#">
                <a href="./forum_qa.php" style="color: #b18042 ; font-weight: 600 ">閒聊Q&A</a>
            </button>
            <div class="line"></div>
            <button class="bot napBtn" href="#">
                <a href="./forum_event.php" style=" color: #909090 ; font-weight: 400 ">活動討論區</a>
            </button>
        </div>
        <div id='comtCard_wrap' class="comtCard_wrap">


        </div>
    </div>
    <!-- 手機板的留言卡片menu 光箱背景遮罩(透明黑)) -->
    <div class="lightBox_mb_mask"></div>
    <!--  -->
    <!-- 留言卡片展開的光箱 -->

    <div class="lightBox_comtCard_mask"></div>





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
        <form name="form_postInsert" id='form_postInsert' onsubmit="sendPost();return false" enctype="multipart/form-data">
            <div class="member_info">
                <div class="member_pic" style="background-image: url(./img/member/profile-image/<?php echo $_SESSION['user']['userPic'] ?>)"></div>
                <div class="member_name">
                    <span><?php echo $_SESSION['user']['userName'] ?></span>
                </div>
            </div>

            <div class="petSelec_wrap d-flex align-items-center">
                <div class="secIndic">
                    寵物類別:
                </div>
                <div class="petSelec d-flex justify-content-between align-items-center">
                    <label class="iconWrap d-flex align-items-center">
                        <img id='default' class="" src="./img/self/k/post_dogIcon_default.svg" alt="">
                        <img id='activated' src="./img/self/k/post_dogIcon_activated.svg" alt="">
                        <input class='d-none' type="radio" name="petSelec" value="petSelec1">
                        <!-- onclick="getSelectType({petType:'1'})" -->
                    </label>
                    <div class="line"></div>
                    <label class="iconWrap d-flex align-items-center">
                        <img id='default' class="" src="./img/self/k/post_catIcon_default.svg" alt="">
                        <img id='activated' src="./img/self/k/post_catIcon_activated.svg" alt="">
                        <input class='d-none' type="radio" name="petSelec" value="petSelec0">
                    </label>
                    <div class="line"></div>
                    <label class="iconWrap slectAll">
                        <span>不限</span>
                        <input class='d-none' type="radio" name="petSelec" value="petSelec2">
                    </label>
                </div>
            </div>
            <div class="boardSelec_wrap d-flex align-items-center ">
                <div class="secIndic">
                    選擇看板:
                </div>
                <div class="boardSelec d-flex justify-content-between align-items-center">
                    <label id="qa" class="selec">
                        <span>閒聊 Q&A</span>
                        <input class='d-none' type="radio" name="boardSelec" value="boardSelec2">
                    </label>
                    <div class="line"></div>
                    <label id="event" class="selec">
                        <span>活動討論區</span>
                    </label>
                </div>
            </div>
            <div class="eventSelec_wrap d-flex align-items-center ">
                <div class="secIndic">
                    活動類別:
                </div>
                <div class="eventSelec d-flex align-items-center">
                    <label id="num1" class="comtLabel">
                        <span># 浪浪套裝活動</span>
                        <input class='d-none' type="radio" name="boardSelec" value="boardSelec1">
                    </label>
                    <label id="num2" class="comtLabel">
                        <span># 每月特別活動</span>
                        <input class='d-none' type="radio" name="boardSelec" value="boardSelec0">
                    </label>
                </div>
            </div>
            <div class="inputArea">
                <textarea class="napHeadline textArea" placeholder="請輸入標題" name="headline" id=""></textarea>

                <textarea class="napContent textArea" placeholder="請輸入內容" name="content" id=""></textarea>

                <div class="imgInsert"></div>
            </div>
            <!-- 上傳圖片 -->
            <input name="picture" class="imgInp" type='file' id="imgInp" />
            <button type="submit" class="summitBtn napBtn_padding_filled" form="form_postInsert">
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
<script src="./nap_js/forum.js?version=&lt;?php echo time(); ?&gt;"></script>
<script src="./nap_js/component.js?version=&lt;?php echo time(); ?&gt;"></script>
<!-- 自己的js放在這 -->

<script>
    // ---------貼文中留言數量
    $('.comtCard_wrap').on('click', '.comtCard', (function() {
        const post_sid = $(this).find('#post_sid').html()

        $.get(
                './nap_api/getMessageId-api.php', {
                    sid: post_sid
                },
                'json'
            )
            .done((result) => {
                $('.lightBox_comtCard .comtSection .message_pack').html(result);


            })
    }))

    // 呈現貼文內容(尚未開啟光箱)


    const post_tpl_func = ({
        sid,
        po_sid,
        avatar,
        name,
        title,
        tag,
        date,
        content,
        thunmNail,
        picInPost,
        num
    }) => {

        return `
        <div id='comtCard' class="comtCard" name='comtCard' type='submit'>
                    <div class="content_wrap">
                        <div class="member_info" >
                            <div class="member_pic">
                                <img src="./img/member/profile-image/${avatar}" alt="">
                            </div>
                            <span>${name== null ? '' : name}</span>
                            <span id='post_sid' class="d-none">${sid}</span>
                        </div>
                        <div class="napTitle">
                            <span>
                                ${title}
                            </span>
                        </div>
                        <div class="d-flex align-items-center">
                        <span class="date">${date}</span>

                        </div>
                        <p class="contentText">${content}</p>
                        <div class="iconIndic">
                            <button class="napBtn_likeBtn_comt" name="sentLike" data-id="${sid}">
                                <div class="svgs">
                                    <img id="napDefault" src="./img/component/icon/red-Heart-outline.svg" alt="">
                                    <img style="display: none" id="napActivate" src="./img/component/icon/red-Heart-filled.svg" alt="">
                                </div>
                                <span>關注</span>
                            </button>
                            <div class="napComt">
                                <img src="./img/component/icon/Comment-brown.svg" alt="">
                                <span class='messageQty'>${num? num:0}則留言</span>
                            </div>
                        </div>

                    </div>
                    
                    ${thunmNail}
                    
                    <div class="lightBox_comtCard">
                        <button class="close_lightBox">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M21.3731 7.29289C21.7636 7.68342 21.7636 8.31658 21.3731 8.70711L14.0802 16L21.3731 23.2929C21.7636 23.6834 21.7636 24.3166 21.3731 24.7071C20.9826 25.0976 20.3494 25.0976 19.9589 24.7071L11.9589 16.7071C11.5684 16.3166 11.5684 15.6834 11.9589 15.2929L19.9589 7.29289C20.3494 6.90237 20.9826 6.90237 21.3731 7.29289Z" fill="#2D2D2D" />
                            </svg>
                        </button>
                        <div class="content_wrap">
                            <a class="member_info" href="member-pet-share.php?id=${po_sid}">
                                <div class="member_pic" style="background-image: url(./img/member/profile-image/${avatar})"></div>
                                <span class="member_name">
                                    ${name}
                                </span>
                            </a>
                            <article>
                                <div class="content">
                                    <h3> ${title}</h3>
                                    <div class="others_wrap d-flex align-bottom justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <div class="comtLabel">
                                                <span> ${tag==1 ? '# 浪浪套裝活動' : '# 特別活動' }</span>
                                            </div>
                                            <span class="date"> ${date}</span>
                                        </div>
                                        <button class="napBtn_likeBtn_comt" data-id="${sid}">
                                            <div class="svgs">
                                                <img id="napDefault" src="./img/component/icon/red-Heart-outline.svg" alt="">
                                                <img id="napActivate" style="display:none" src="./img/component/icon/red-Heart-filled.svg" alt="">
                                            </div>
                                            <span>關注</span>
                                        </button>
                                    </div>
                                    <p class="comtCard_lightBox_p">
                                        ${content}
                                    </p>
                                    <div class="comtCard_lightBox_pic">
                                    <!-- 顯示多張圖片 -->
                                    
                                    ${picInPost}
                                    
                                    </div>
                                </div>
                                <div class="comtSection">
                                    <div class="numIndic d-flex align-items-end">
                                        <img src="./img/component/icon/Comment-brown.svg" alt="">
                                        <span class='messageQty'>${num? num:0}則留言</span>
                                    </div>
                                    <form id='form_sendMessage${sid}' name='form_sendMessage${sid}' class="messageLev d-flex align-items-center" onsubmit='return false'>
                                        <div class="memberInfo_wrap d-flex align-items-center col-10 gap-3">
                                        <div class="memberPic" style="background-image: url(./img/member/profile-image/<?php echo !empty($_SESSION['user']) ? $_SESSION['user']['userPic'] : 'pi000.jpg'; ?>)">
                                        </div>
                                        <input name="message" class="message_input" type="text" placeholder="我要留言">
                                        </div>
                                        
                                        <button type='submit' class="sendMessageBtn" onclick="">
                                        送出
                                        </button>   
                                    </form>
                                    <div class="message_pack">
                                        <!-- 用jqeury的.get新增留言 -->
                                    </div>
                                    <span class="botHint">尚無更多留言</span>
                                </div>



                            </article>
                        </div>
                    </div>
                </div>`

    };


    // ---------貼文內容(含留言)
    const comtCardWrap = $('#comtCard_wrap')

    let defaultVals = {
        type: 1, // dog
    }

    function getData(obj) {
        try {
            if (typeof defaultVals === 'undefined') {
                return;
            }
        } catch (ex) {
            return;
        }

        if (obj.type !== undefined) {
            defaultVals.type = obj.type;
        }
        $.get('./nap_api/forum_selector_qa-api.php', defaultVals, function(data) {

            let str = '';
            if (data.rows && data.rows.length) {
                data.rows.forEach(function(obj) {
                    // 圖片
                    obj.thunmNail = ``;
                    obj.picInPost = '';
                    if (obj.articlePic_id) {

                        obj.articlePics = obj.articlePic_id.split(',');

                        obj.thunmNail = `<div style="background-image: url(./img/chatchat/event/${obj.articlePics[0]})" class="card_smPic"></div>`;

                        obj.picInPost = obj.articlePics.map(f => `<img src='./img/chatchat/event/${f}' alt=''>`).join('');

                        // 發文時如果沒有上傳圖片，在交流版不會顯示出來，但在會員中心會顯示預設圖片
                        if (obj.thunmNail == `<div style="background-image: url(./img/chatchat/event/paw_defaultBG.svg)" class="card_smPic"></div>`) {
                            obj.thunmNail = ``;
                            obj.picInPost = '';

                        }
                    }

                    str += post_tpl_func(obj);


                });
            }
            comtCardWrap.html(str);


            for (let i of data.myLikes) {
                const post_sid = i.post_sid;
                const selectedBtn = $(`button[data-id=${post_sid}]`);
                if (selectedBtn.length) {
                    selectedBtn.find('#napActivate').addClass('d-block');
                }

            }

        }, 'json');

    }
    getData({})

    // 開啟光箱 

    $('.postBtn_pc , .postBtn_mb').click(function() {
        let notLogined = <?php echo !empty($_SESSION['user']) ? 'false' : 'true' ?>;
        if (notLogined) {
            Swal.fire({
                icon: 'warning',
                title: '尚未登入會員',
                timer: 1500,
                showConfirmButton: false,
            })
            return;
        }
        $('.lightBox_post').show()
        $('.lightBox_post_mask').css({
            'opacity': '1',
            'pointer-events': 'auto',
        })
        // document.body.style.overflow = 'hidden'
    })


    // ---------表格提交
    // 貼文
    function sendPost(obj) {
        let file_data = $('#imgInp').prop('files')[0];
        let form_data = new FormData(document.form_postInsert);

        let petSelect = $('input[name = petSelec]:checked').val() ? 1 : 0;
        let boardSelect = $('input[name = boardSelec]:checked').val() ? 1 : 0;
        let contentHeadline = $(document.form_postInsert.headline).val() ? 1 : 0;
        let contentText = $(document.form_postInsert.content).val() ? 1 : 0;

        // 值為0時代表表單是空的
        let formSum = petSelect + boardSelect + contentHeadline + contentText;


        // ----------上傳圖片功能&驗證

        if (formSum != 4) {
            Swal.fire({
                icon: 'warning',
                title: '請填寫必要欄位!',
                timer: 1500,
                showConfirmButton: false,
            })
        } else {
            fetch('./nap_api/forum_postInsert-api.php', {
                    method: 'POST',
                    body: form_data,
                }).then(r => r.json())
                .then(result => {
                    Swal.fire({
                        icon: 'success',
                        title: '已成功發佈',
                        timer: 1500,
                        showConfirmButton: false,
                    }).then(() => {
                        window.location.reload()
                    })
                })
        }
    }

    // ------發文光箱  
    // 上傳圖片功能  預覽&新增div

    let picNum = 0
    imgInp.onchange = evt => {
        // 前端預覽圖片
        picNum += 1

        const [file] = imgInp.files


        if (file) {

            $('.lightBox_post .inputArea .imgInsert').append(`<img id="postPic${picNum}" src="" alt="" />`);

            document.getElementById(`postPic${picNum}`).src = URL.createObjectURL(file)
        }

    }


    // --------留言
    $('.comtCard_wrap').on('click', '.sendMessageBtn', (function() {

        const post_sid = $(this).parents('#comtCard').find('#post_sid').html()
        const contentVal = $(this).siblings('.memberInfo_wrap').find('.message_input').val()
        const noUser = <?= empty($_SESSION['user']) ? 'true' : 'false' ?>;
        if (noUser) {
            loginNotice();
        } else {
            // $(`#form_sendMessage${post_sid}`).serialize()
            if ($.post(
                    './nap_api/forum_MessageInsert-api.php', {
                        post_sid: post_sid,
                        member_sid: '',
                        message: contentVal
                    }
                )) {
                Swal.fire({
                    icon: 'success',
                    title: '留言成功!',
                    timer: 1500,
                    showConfirmButton: false,
                    // 以下為框框消失後執行的功能(可不加)
                }).then(function() {
                    $('.comtCard_wrap .message_input').val("");
                    $('.sendMessageBtn').css({
                        'background-color': 'var(--black_400)',
                        'pointer-events': 'none',
                    })
                })

            }
        }
    }))

    // 未登入收藏按鈕提醒
    function loginNotice() {
        Swal.fire({
            title: '尚未登入會員',
            text: "快帶我去登入，我想要收藏這則貼文(✪ω✪)",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#bfbd4a',
            cancelButtonColor: '#7C8C38',
            confirmButtonText: '立馬快速登入',
            cancelButtonText: '先去註冊會員',
            reverseButtons: true,
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "register.php"
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                window.location.href = "login.php"
            }
        })
    }
    // 按鈕顏色判斷&可點擊
    $('.comtCard_wrap').on('input', '.message_input', function() {

        let sendBtn = $(this).parents('.memberInfo_wrap').siblings('.sendMessageBtn')

        let thisContent = $(this).val()

        if (thisContent) {
            sendBtn.css({
                'background-color': 'var(--primaryColor_default)',
                'pointer-events': 'auto',
            })
        } else {
            sendBtn.css({
                'background-color': 'var(--black_400)',
                'pointer-events': 'none',
            })
        }
    })


    // ----------刪除貼文功能
    $('.comtCard_wrap').on('click', '.lightBox_pc', (function(e) {
        // 防止光箱以下物件冒泡
        e.stopPropagation();
    }))

    $('.comtCard_wrap').on('click', '.cardDelete', (function(e) {
        const post_sid = $(this).parents('#comtCard').find('#post_sid').html()

        Swal.fire({
            title: '確認刪除貼文?',
            text: "刪除後將無法復原",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#f67557',
            cancelButtonColor: '#bfbd4a',
            confirmButtonText: '刪除貼文!'
        }).then((result) => {
            if (result.isConfirmed) {
                // 點選確認後執行以下功能(範例是post功能)
                $.post(
                    './nap_api/forum_delete-api.php', {
                        post_sid: post_sid
                    }
                )
                // 以下為執行成功框框
                Swal.fire({
                    icon: 'success',
                    title: '已成功刪除',
                    showConfirmButton: false,
                    timer: 1500
                }).then((result) => {
                    window.location.reload();
                });

            }
        })





    }))

    // ---------收藏貼文功能


    $('.comtCard_wrap').on('click', '.napBtn_likeBtn_comt', function(e) {
        e.stopPropagation()
        const btn = $(this);
        const lightBox = btn.parents('.comtCard').find('.lightBox_comtCard')
        const sid = btn.attr('data-id');
        $.get(
            './nap_api/forum_likes-api.php', {
                like_type: 3,
                item_sid: sid
            },
            function(data) {

                if (btn.find('#napActivate').hasClass('d-block')) {
                    btn.find('#napActivate').removeClass('d-block');
                    lightBox.find('#napActivate').removeClass('d-block');

                    // napActivate
                } else {
                    btn.find('#napActivate').addClass('d-block');
                    lightBox.find('#napActivate').addClass('d-block');
                }
            }, 'json');
    })
</script>



<?php include __DIR__ . '/parts/html-foot.php'; ?>