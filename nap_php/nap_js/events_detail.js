// 收藏按鈕顯示開關
function sentLike(event){
    const btn = $(event.currentTarget);
    const sid = btn.attr('data-id');
    $.get(
        `event-like-api.php?like_type=2&item_sid=${sid}`, function(data){
            if(btn.hasClass('show')){
                btn.removeClass('show');
            } else {
                btn.addClass('show');
            }
        },'json');
}

// 未登入收藏按鈕提醒
function loginNotice() {
    Swal.fire({
        title: '尚未登入會員',
        text: "快帶我去登入，我不想錯過這個活動(✪ω✪)",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#bfbd4a',
        cancelButtonColor: '#7C8C38',
        confirmButtonText: '立馬快速登入',
        cancelButtonText: '先去註冊會員',
        reverseButtons:true,
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = "register.php"
        }
        else if(result.dismiss === Swal.DismissReason.cancel){
            window.location.href = "login.php"
        }    
    })
}

// 收藏按鈕，判斷顯示已收藏過的
function getData(){
    $.get('events_page_api.php',function(data){
        for (let i of data.myLikes) {
            const event_sid = i.event_sid;
            const selectedBtn = $(`button[data-id="${event_sid}"]`);
            if (selectedBtn.length) {
                selectedBtn.addClass('show');
            }
        }
    },'json')
}
getData({});


//桌機 | 比外表重要的事-(插圖定時翻轉)
$(function () {
    timeback();
});
function timeback() {
    let timer = null;
    let i = 2;

    function overturn() {
        $('.important-thing-imgbox-pc img').removeClass('front');
        $(`img.important-thing-imgbox${i}`).addClass('front'); 
        i++;
        if(i>4){
            i=1;
        }
    }
    timer = setInterval(overturn, 2000);
}

// 桌機、手機 | 毛孩專家卡片緩慢出現
$(window).scroll(function(){

    if($(window).scrollTop() >= ($('.expert-partner').offset().top)){
        $('.expert-partner-card').css({
            transform:'translateY(0px)',
            opacity:1
        })
    }
    else{
        $('.expert-partner-card').css({
            transform:'translateY(200px)',
            opacity:0
        })
    }
});


// 桌機 | 了解陪伴-(換圖時，文字跟頁碼顯示點點會跟著變動)
// 從 0 → 1
$('.silder-dot-pc .dot1').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic1').removeClass('slide-active slide-prev slide-next');
    $('.pic1').addClass('slide-active');
    $('.pic2').addClass('slide-prev');
    $('.pic1').removeClass('slide-next');
    $('.know-accompany-textbox h3').text('01 相見說明會');
    $('.know-accompany-textbox p:nth-of-type(2)').text('與您尬意的浪浪相見，然後透過N.A.P.的說明，讓您了解領養流浪動物的各種須知，並且說明本次兩天一夜行程及注意事項。');
});

// 從 1 → 2
$('.silder-dot-pc .dot2').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic2').removeClass('slide-active slide-prev slide-next');
    $('.pic2').addClass('slide-active');
    $('.pic1').addClass('slide-prev');
    $('.pic2').removeClass('slide-next');
    $('.pic3').addClass('slide-next');
    $('.know-accompany-textbox h3').text('02 動手做鮮食');
    $('.know-accompany-textbox p:nth-of-type(2)').text('藥補不如食補，毛孩是家人，更應從飲食入手。以天然新鮮安全健康為主，為了讓寶貝們陪伴我們更久，平日在選擇毛孩食物時，也須加倍謹慎，一起動手做鮮食從飲食上來照顧牠們的身體吧！');
});

// 從 2 → 3
$('.silder-dot-pc .dot3').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic3').removeClass('slide-active slide-prev slide-next');
    $('.pic3').addClass('slide-active');
    $('.pic2').addClass('slide-prev');
    $('.pic3').removeClass('slide-next');
    $('.pic4').addClass('slide-next');
    $('.know-accompany-textbox h3').text('03 歡樂瘋戲水');
    $('.know-accompany-textbox p:nth-of-type(2)').text('炎熱的夏天，玩水既好玩又可以不傷膝蓋。園區裡的寵物池邊都有專業的救生員隨時照看著大家，確保在跟浪浪一起玩水時，也能放心玩。');
});

// 從 3 → 4
$('.silder-dot-pc .dot4').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic4').removeClass('slide-active slide-prev slide-next');
    $('.pic3').addClass('slide-prev');
    $('.pic4').removeClass('slide-next');
    $('.pic5').addClass('slide-next');
    $('.know-accompany-textbox h3').text('04 浪浪講學堂');
    $('.know-accompany-textbox p:nth-of-type(2)').text('寵物爸爸媽媽的教導才能夠成為模範生哦！透過N.A.P.的專業講師課程，了解毛孩的肢體語言以及教導各種指令，例如: 看、坐下、趴下、碰、不要碰、拿起來、放下、腳側散步等...。');
});

// 從 4 → 5
$('.silder-dot-pc .dot5').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic5').removeClass('slide-active slide-prev slide-next');
    $('.pic4').addClass('slide-prev');
    $('.pic5').removeClass('slide-next');
    $('.pic6').addClass('slide-next');
    $('.know-accompany-textbox h3').text('05 一起說晚安');
    $('.know-accompany-textbox p:nth-of-type(2)').text('跟毛孩同寢，享受溫馨的獨處時光！在星光熠熠的夜空下，向毛孩說聲晚安吧！');
});

// 從 5 → 6
$('.silder-dot-pc .dot6').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic6').removeClass('slide-active slide-prev slide-next');
    $('.pic5').addClass('slide-prev');
    $('.pic6').removeClass('slide-next');
    $('.pic7').addClass('slide-next');
    $('.know-accompany-textbox h3').text('06 誰是小吃貨');
    $('.know-accompany-textbox p:nth-of-type(2)').text('5隻浪浪一同就定位，可以在時限內忍住不吃食物的組別即獲勝。');
});

// 從 6 → 7
$('.silder-dot-pc .dot7').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic7').removeClass('slide-active slide-prev slide-next');
    $('.pic6').addClass('slide-prev');
    $('.pic7').removeClass('slide-next');
    $('.pic8').addClass('slide-next');
    $('.know-accompany-textbox h3').text('07 路跑大作戰');
    $('.know-accompany-textbox p:nth-of-type(2)').text('由主人繫繩與毛孩共同從教育園區出發點，慢跑至海濱路與天府路交叉口折返點後，蓋上折返印章後返回。');
});

// 從 7 → 8
$('.silder-dot-pc .dot8').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic8').removeClass('slide-active slide-prev slide-next');
    $('.pic7').addClass('slide-prev');
    $('.pic8').removeClass('slide-next');
    $('.pic9').addClass('slide-next');
    $('.know-accompany-textbox h3').text('08 放電跑一跑');
    $('.know-accompany-textbox p:nth-of-type(2)').text('戶外狗狗運動公園，分為二個區域大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、玩樂。');
});

// 從 8 → 9
$('.silder-dot-pc .dot9').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic9').removeClass('slide-active slide-prev slide-next');
    $('.pic8').addClass('slide-prev');
    $('.pic9').removeClass('slide-next');
    $('.pic10').addClass('slide-next');
    $('.know-accompany-textbox h3').text('09 幫浪浪洗澡');
    $('.know-accompany-textbox p:nth-of-type(2)').text('協助毛孩爸媽認識梳洗用具，提供完善的照顧保養課程，培養未來毛爸媽正確的實戰經驗。');
});

// 從 9 → 10
$('.silder-dot-pc .dot10').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic10').removeClass('slide-active slide-prev slide-next');
    $('.pic9').addClass('slide-prev');
    $('.pic10').removeClass('slide-next');
    $('.pic9').addClass('slide-prev');
    // $('.pic5').addClass('slide-next');
    $('.know-accompany-textbox h3').text('10 合照留紀念');
    $('.know-accompany-textbox p:nth-of-type(2)').text('用心打造多種獨特專屬毛小孩拍攝的攝影空間，透過攝影師的專業引導，為毛小孩紀錄屬於您們的溫暖畫面。');
});

// 桌機 | 了解陪伴-(點擊點點時，圖片會移動)
$('.silder-dot-pc .dot').click(function(){
    const nowPage = $(this).index();
    const moveX = nowPage * -$('.pc-train li').outerWidth(true);
    $('.pc-train').css('transform',`translate3d(${moveX}px,0,0)`);
})
  

// 手機 | 了解陪伴-(橫向滾動)
let move = document.querySelector(".know-accompany-imgbox");

move.addEventListener("wheel", (event) => {
    event.preventDefault();
    move.scrollLeft += event.deltaY;
});


// 手機 | 了解陪伴-(換圖時，文字跟頁碼顯示點點會跟著變動)
$('.know-accompany-imgbox').scroll(function(){
    // console.log('left:', $('.know-accompany-imgbox').scrollLeft());
    // console.log('width', $('.mb-train li').outerWidth(true));
    // console.log('top', $('.mb-train li').offset().top);

    if($('.know-accompany-imgbox').scrollLeft() < 270){
        $('.know-accompany-textbox h3').text('01 相見說明會');
        $('.know-accompany-textbox p:nth-of-type(2)').text('與您尬意的浪浪相見，然後透過N.A.P.的說明，讓您了解領養流浪動物的各種須知，並且說明本次兩天一夜行程及注意事項。');
    }

    // 從 1 → 2 | 2 → 1
    if($('.know-accompany-imgbox').scrollLeft() >= 270 && $('.know-accompany-imgbox').scrollLeft() <= 540){
        $('.dot2').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.dot').removeClass('silder-dot-mb default')
        $('.know-accompany-textbox h3').text('02 動手做鮮食');
        $('.know-accompany-textbox p:nth-of-type(2)').text('藥補不如食補，毛孩是家人，更應從飲食入手。以天然新鮮安全健康為主，為了讓寶貝們陪伴我們更久，平日在選擇毛孩食物時，也須加倍謹慎，一起動手做鮮食從飲食上來照顧牠們的身體吧！');
    }
    else{
        $('.dot2').css('backgroundColor', 'transparent');
        $('.dot1').addClass('default')
    }

    // 從 2 → 3 | 3 → 2
    if($('.know-accompany-imgbox').scrollLeft() >= 540 && $('.know-accompany-imgbox').scrollLeft() <= 810){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot3').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('03 歡樂瘋戲水');
        $('.know-accompany-textbox p:nth-of-type(2)').text('炎熱的夏天，玩水既好玩又可以不傷膝蓋。園區裡的寵物池邊都有專業的救生員隨時照看著大家，確保在跟浪浪一起玩水時，也能放心玩。');
    }
    else{
        $('.dot3').css('backgroundColor', 'transparent');
    }

    // 從 3 → 4 | 4 → 3
    if($('.know-accompany-imgbox').scrollLeft() >= 810 && $('.know-accompany-imgbox').scrollLeft() <= 1080){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot4').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('04 浪浪講學堂');
        $('.know-accompany-textbox p:nth-of-type(2)').text('寵物爸爸媽媽的教導才能夠成為模範生哦！透過N.A.P.的專業講師課程，了解毛孩的肢體語言以及教導各種指令，例如: 看、坐下、趴下、碰、不要碰、拿起來、放下、腳側散步等...。');
    }
    else{
        $('.dot4').css('backgroundColor', 'transparent');
    }

    // 從 4 → 5 | 5 → 4
    if($('.know-accompany-imgbox').scrollLeft() >= 1080 && $('.know-accompany-imgbox').scrollLeft() <= 1350){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot5').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('05 一起說晚安');
        $('.know-accompany-textbox p:nth-of-type(2)').text('跟毛孩同寢，享受溫馨的獨處時光！在星光熠熠的夜空下，向毛孩說聲晚安吧！');
    }
    else{
        $('.dot5').css('backgroundColor', 'transparent');
    }
    
    // 從 5 → 6 | 6 → 5
    if($('.know-accompany-imgbox').scrollLeft() >= 1350 && $('.know-accompany-imgbox').scrollLeft() <= 1620){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot6').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('06 誰是小吃貨');
        $('.know-accompany-textbox p:nth-of-type(2)').text('5隻浪浪一同就定位，可以在時限內忍住不吃食物的組別即獲勝。');
    }
    else{
        $('.dot6').css('backgroundColor', 'transparent');
    }
    
    // 從 6 → 7 | 7 → 6
    if($('.know-accompany-imgbox').scrollLeft() >= 1620 && $('.know-accompany-imgbox').scrollLeft() <= 1890){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot7').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('07 路跑大作戰');
        $('.know-accompany-textbox p:nth-of-type(2)').text('由主人繫繩與毛孩共同從教育園區出發點，慢跑至海濱路與天府路交叉口折返點後，蓋上折返印章後返回。');
    }
    else{
        $('.dot7').css('backgroundColor', 'transparent');
    } 

    // 從 7 → 8 | 8 → 7
    if($('.know-accompany-imgbox').scrollLeft() >= 1890 && $('.know-accompany-imgbox').scrollLeft() <= 2160){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot8').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('08 放電跑一跑');
        $('.know-accompany-textbox p:nth-of-type(2)').text('戶外狗狗運動公園，分為二個區域大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、玩樂');
    }
    else{
        $('.dot8').css('backgroundColor', 'transparent');
    }
    
    // 從 8 → 9 | 9 → 8
    if($('.know-accompany-imgbox').scrollLeft() >= 2160 && $('.know-accompany-imgbox').scrollLeft() <= 2430){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot9').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('09 幫浪浪洗澡');
        $('.know-accompany-textbox p:nth-of-type(2)').text('協助毛孩爸媽認識梳洗用具，提供完善的照顧保養課程，培養未來毛爸媽正確的實戰經驗。');
    }
    else{
        $('.dot9').css('backgroundColor', 'transparent');
    } 

    // 從 9 → 10 | 10 → 9
    if($('.know-accompany-imgbox').scrollLeft() >= 2430){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot10').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('10 合照留紀念');
        $('.know-accompany-textbox p:nth-of-type(2)').text('用心打造多種獨特專屬毛小孩拍攝的攝影空間，透過攝影師的專業引導，為毛小孩紀錄屬於您們的溫暖畫面。');
    }
    else{
        $('.dot10').css('backgroundColor', 'transparent');
    }   
});







