// $('.mb-train').css('width', `${$('.mb-train li').outerWidth(true) * $('.mb-train li').length}px`)

// 從 0 → 1
$('.silder-dot-pc .dot1').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('01 相見說明會');
    $('.know-accompany-textbox p:nth-of-type(2)').text('與您尬意的浪浪相見，然後透過N.A.P.的說明，讓您了解領養流浪動物的各種須知，並且說明本次兩天一夜行程及注意事項。');
});

// 從 1 → 2
$('.silder-dot-pc .dot2').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic2').removeClass('slide-next');
    $('.know-accompany-textbox h3').text('02 動手做鮮食');
    $('.know-accompany-textbox p:nth-of-type(2)').text('藥補不如食補，毛孩是家人，更應從飲食入手。以天然新鮮安全健康為主，為了讓寶貝們陪伴我們更久，平日在選擇毛孩食物時，也須加倍謹慎，一起動手做鮮食從飲食上來照顧牠們的身體吧！');
});

// 從 2 → 3
$('.silder-dot-pc .dot3').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.pic3').removeClass('slide-next');
    $('.pic3').addClass('slide-active');
    $('.know-accompany-textbox h3').text('03 歡樂瘋戲水');
    $('.know-accompany-textbox p:nth-of-type(2)').text('炎熱的夏天，玩水既好玩又可以不傷膝蓋，尤其步入老年的汪汪，更需要訓練後腳力量，延緩老化不能行走的危機。園區裡的寵物池邊都有專業的救生員隨時照看著大家，確保在跟浪浪一起玩水時，也能放心玩。');
});

// 從 3 → 4
$('.silder-dot-pc .dot4').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('04 浪浪講學堂');
    $('.know-accompany-textbox p:nth-of-type(2)').text('寵物爸爸媽媽的教導才能夠成為模範生哦! 透過NAP的專業講師課程, 了解毛孩的肢體語言以及教導各種指令, 例如: 看, 坐下, 趴下, 碰 , 不要碰, 拿起來, 放下, 腳側散步等...。');
});

// 從 4 → 5
$('.silder-dot-pc .dot5').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('05 一起說晚安');
    $('.know-accompany-textbox p:nth-of-type(2)').text('跟毛孩同寢, 享受溫馨的獨處時光！在星光熠熠的夜空下，向毛孩說聲晚安吧！');
});

// 從 5 → 6
$('.silder-dot-pc .dot6').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('06 誰是小吃貨');
    $('.know-accompany-textbox p:nth-of-type(2)').text('5隻浪浪一同就定位，可以在時限內忍住不吃食物的組別即獲勝。');
});

// 從 6 → 7
$('.silder-dot-pc .dot7').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('07 路跑大作戰');
    $('.know-accompany-textbox p:nth-of-type(2)').text('由主人繫繩與毛孩共同從教育園區出發點慢跑至海濱路與天府路交叉口折返點後蓋上折返印章後返回。');
});

// 從 7 → 8
$('.silder-dot-pc .dot8').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('08 放電跑一跑');
    $('.know-accompany-textbox p:nth-of-type(2)').text('戶外狗狗運動公園，分為二個區域大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、 玩樂。主人們盡情享受鄉間田園的寧謐感，聽得到風聲、水聲和鳥叫聲，及空氣裡狗狗的歡笑聲。');
});

// 從 8 → 9
$('.silder-dot-pc .dot9').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('09 幫浪浪洗澡');
    $('.know-accompany-textbox p:nth-of-type(2)').text('協助毛孩爸媽認識梳洗用具，提供完善的照顧保養課程，培養未來毛爸媽正確的實戰經驗。');
});

// 從 9 → 10
$('.silder-dot-pc .dot10').click(function(){
    $('.dot').removeClass('default');
    $(this).addClass('default');
    $('.know-accompany-textbox h3').text('10 合照留紀念');
    $('.know-accompany-textbox p:nth-of-type(2)').text('用心打造多種獨特專屬毛小孩拍攝的攝影空間，透過攝影師的專業引導，為毛小孩紀錄屬於您們的溫暖畫面。');
});

// 桌機 | 點擊點點時，圖片會移動
$('.silder-dot-pc .dot').click(function(){
    console.log($(this).index());
    const nowPage = $(this).index();
    const moveX = nowPage * -$('.pc-train li').outerWidth(true);
    $('.pc-train').css('transform',`translateX(${moveX}px)`);
})
  




// 手機 | 了解陪伴-(橫向滾動)
let move = document.querySelector(".know-accompany-imgbox");

move.addEventListener("wheel", (event) => {
    event.preventDefault();
    move.scrollLeft += event.deltaY;
});

// 手機 | 了解陪伴-(換圖時，文字跟頁碼顯示點點會跟著變動)
$('.know-accompany-imgbox').scroll(function(){
    console.log('left:', $('.know-accompany-imgbox').scrollLeft());
    console.log('width', $('.mb-train li').outerWidth(true));
    // console.log('top', $('.mb-train li').offset().top);

    if($('.know-accompany-imgbox').scrollLeft() < 284){
        $('.know-accompany-textbox h3').text('01 相見說明會');
        $('.know-accompany-textbox p:nth-of-type(2)').text('與您尬意的浪浪相見，然後透過N.A.P.的說明，讓您了解領養流浪動物的各種須知，並且說明本次兩天一夜行程及注意事項。');
    }

    // 從 1 → 2 | 2 → 1
    if($('.know-accompany-imgbox').scrollLeft() >= 284 && $('.know-accompany-imgbox').scrollLeft() <= 568){
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
    if($('.know-accompany-imgbox').scrollLeft() >= 568 && $('.know-accompany-imgbox').scrollLeft() <= 852){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot3').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('03 歡樂瘋戲水');
        $('.know-accompany-textbox p:nth-of-type(2)').text('炎熱的夏天，玩水既好玩又可以不傷膝蓋，尤其步入老年的汪汪，更需要訓練後腳力量，延緩老化不能行走的危機。園區裡的寵物池邊都有專業的救生員隨時照看著大家，確保在跟浪浪一起玩水時，也能放心玩。');
    }
    else{
        $('.dot3').css('backgroundColor', 'transparent');
    }

    // 從 3 → 4 | 4 → 3
    if($('.know-accompany-imgbox').scrollLeft() >= 852 && $('.know-accompany-imgbox').scrollLeft() <= 1136){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot4').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('04 浪浪講學堂');
        $('.know-accompany-textbox p:nth-of-type(2)').text('寵物爸爸媽媽的教導才能夠成為模範生哦! 透過NAP的專業講師課程, 了解毛孩的肢體語言以及教導各種指令, 例如: 看, 坐下, 趴下, 碰 , 不要碰, 拿起來, 放下, 腳側散步等...。');
    }
    else{
        $('.dot4').css('backgroundColor', 'transparent');
    }

    // 從 4 → 5 | 5 → 4
    if($('.know-accompany-imgbox').scrollLeft() >= 1136 && $('.know-accompany-imgbox').scrollLeft() <= 1420){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot5').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('05 一起說晚安');
        $('.know-accompany-textbox p:nth-of-type(2)').text('跟毛孩同寢, 享受溫馨的獨處時光！在星光熠熠的夜空下，向毛孩說聲晚安吧！');
    }
    else{
        $('.dot5').css('backgroundColor', 'transparent');
    }
    
    // 從 5 → 6 | 6 → 5
    if($('.know-accompany-imgbox').scrollLeft() >= 1420 && $('.know-accompany-imgbox').scrollLeft() <= 1704){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot6').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('06 誰是小吃貨');
        $('.know-accompany-textbox p:nth-of-type(2)').text('5隻浪浪一同就定位，可以在時限內忍住不吃食物的組別即獲勝。');
    }
    else{
        $('.dot6').css('backgroundColor', 'transparent');
    }
    
    // 從 6 → 7 | 7 → 6
    if($('.know-accompany-imgbox').scrollLeft() >= 1704 && $('.know-accompany-imgbox').scrollLeft() <= 1988){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot7').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('07 路跑大作戰');
        $('.know-accompany-textbox p:nth-of-type(2)').text('由主人繫繩與毛孩共同從教育園區出發點慢跑至海濱路與天府路交叉口折返點後蓋上折返印章後返回。');
    }
    else{
        $('.dot7').css('backgroundColor', 'transparent');
    } 

    // 從 7 → 8 | 8 → 7
    if($('.know-accompany-imgbox').scrollLeft() >= 1988 && $('.know-accompany-imgbox').scrollLeft() <= 2272){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot8').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('08 放電跑一跑');
        $('.know-accompany-textbox p:nth-of-type(2)').text('戶外狗狗運動公園，分為二個區域大約為400坪及200坪分開的獨立草地，可以放開牽繩讓狗狗盡情自由奔跑、 玩樂。主人們盡情享受鄉間田園的寧謐感，聽得到風聲、水聲和鳥叫聲，及空氣裡狗狗的歡笑聲。');
    }
    else{
        $('.dot8').css('backgroundColor', 'transparent');
    }
    
    // 從 8 → 9 | 9 → 8
    if($('.know-accompany-imgbox').scrollLeft() >= 2272 && $('.know-accompany-imgbox').scrollLeft() <= 2556){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot9').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('09 幫浪浪洗澡');
        $('.know-accompany-textbox p:nth-of-type(2)').text('協助毛孩爸媽認識梳洗用具，提供完善的照顧保養課程，培養未來毛爸媽正確的實戰經驗。');
    }
    else{
        $('.dot9').css('backgroundColor', 'transparent');
    } 

    // 從 9 → 10 | 10 → 9
    if($('.know-accompany-imgbox').scrollLeft() >= 2556){
        $('.dot').removeClass('silder-dot-mb default')
        $('.dot10').css('backgroundColor', 'var(--primaryColor_dark)');
        $('.know-accompany-textbox h3').text('10 合照留紀念');
        $('.know-accompany-textbox p:nth-of-type(2)').text('用心打造多種獨特專屬毛小孩拍攝的攝影空間，透過攝影師的專業引導，為毛小孩紀錄屬於您們的溫暖畫面。');
    }
    else{
        $('.dot10').css('backgroundColor', 'transparent');
    }   
});




