// 搜尋bar顯示間數選項
$('.selectRoom').click(function(){
    $('.customSelect-box').toggle();
})

// 選擇間數
$('li.select-li').click(function(){
    let pickone = $('li.select-li:nth-of-type(1)').html();
    let picktow = $('li.select-li:nth-of-type(2)').html();
    let pickthree = $('li.select-li:nth-of-type(3)').html();
    let pickfour = $('li.select-li:nth-of-type(4)').html();
    let pickfive = $('li.select-li:nth-of-type(5)').html();
    let picksix = $('li.select-li:nth-of-type(6)').html();

    // 選1間
    if($(this).html() == pickone){
        $('.selectRoom h6').html(pickone);
        $('.room-num span').html(pickone);
    }
    // 選2間
    if($(this).html() == picktow){
        $('.selectRoom h6').html(picktow);
        $('.room-num span').html(picktow);
    }
    // 選3間
    if($(this).html() == pickthree){
        $('.selectRoom h6').html(pickthree);
        $('.room-num span').html(pickthree);
    }
    // 選4間
    if($(this).html() == pickfour){
        $('.selectRoom h6').html(pickfour);
        $('.room-num span').html(pickfour);
    }
    // 選5間
    if($(this).html() == pickfive){
        $('.selectRoom h6').html(pickfive);
        $('.room-num span').html(pickfive);
    }
    // 選6間
    if($(this).html() == picksix){
        $('.selectRoom h6').html(picksix);
        $('.room-num span').html(picksix);
    }
})


// 按下查詢空房，出現訂房間數選項
$('.booking-box').click(function(){
    if( $('.selectRoom h6').html() <= 0){
        alert('尚未選擇間數')
        $('.room-null').html();
    }
    if($('.selectRoom h6').html() > 0){
        $('.room-null').hide();
        $('.room-card-group').show();
    }
})


// 訂房明細點擊叉叉
$('.cancle-btn').click(function(){
    // 單人房明細刪除
    if($(this).hasClass('single-cancle')){
        $('#single-detail').hide();
        $('.singleNum').val(0);
        $('#single-minus svg circle').css('fill','var(--black_500)');
    }
    // 雙人房明細刪除
    if($(this).hasClass('double-cancle')){
        $('#double-detail').hide();
        $('.doubleNum').val(0);
        $('#double-minus svg circle').css('fill','var(--black_500)');
    }
    // 四人房明細刪除
    if($(this).hasClass('quadra-cancle')){
        $('#quadra-detail').hide();
        $('.quadraNum').val(0);
        $('#quadra-minus svg circle').css('fill','var(--black_500)');
    }
})



// ---------------------(↓↓↓↓單人房↓↓↓↓)--------------------------------

// 單人房-《增加》
$('#single-plus').click(function () {
    // 增加單人房間數
    var plusNum = $('.singleNum').val();
    $('.singleNum').val(++plusNum);

    // 計算增加明細的間數&房型總價錢
    var singlePrice = parseInt($('.singleprice span').html());
    var singleTotal = singlePrice * plusNum;
    $('.single-room-num span').html(plusNum);
    $('.single-price span').html(`${singleTotal}`);

    // 計算增加的全部總價
    $('.total-num span').html(+$('.single-price span').html() + +$('.double-price span').html() + +$('.quadra-price span').html());

    // 計算增加的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算增加的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 單人房間數>0，減號變綠色
    if($('.singleNum').val() > 0){
        $('#single-minus svg circle').css('fill','var(--primaryColor_dark)');
    }

    // 增加單人房明細
    if($('#single-detail').css('display') == 'none'){
        $('#single-detail').show();
    }
  });
  

// 單人房-《減少》
$('#single-minus').click(function () {
    // 減少單人房間數
    var minusNum = $('.singleNum').val();
    if($('.singleNum').val() > 0){
        $('.singleNum').val(--minusNum);
        console.log('singleminus:',$('.singleNum').val());
    }

    // 計算減少明細的間數&房型總價錢
    var singlePrice = parseInt($('.singleprice span').html());
    var singleTotal = singlePrice * minusNum;
    $('.single-room-num span').html(minusNum);
    $('.single-price span').html(`${singleTotal}`);

    // 計算減少的全部總價
    $('.total-num span').html(+$('.single-price span').html() + +$('.double-price span').html() + +$('.quadra-price span').html());

    // 計算減少的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算減少的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 單人房間數=0，減號變灰色
    if($('.singleNum').val() == 0){
        console.log('changeColor');
        $('#single-minus svg circle').css('fill','var(--black_500)');
    }
});

// ---------------------(↓↓↓↓雙人房↓↓↓↓)--------------------------------

// 雙人房-《增加》
$('#double-plus').click(function () {
    // 增加雙人房間數
    var plusNum = $('.doubleNum').val();
    $('.doubleNum').val(++plusNum);

    // 計算增加明細的間數&房型總價錢
    var doublePrice = parseInt($('.doubleprice span').html());
    var doubleTotal = doublePrice * plusNum;
    $('.double-room-num span').html(plusNum);
    $('.double-price span').html(`${doubleTotal}`);

    // 計算增加的全部總價
    $('.total-num span').html(+$('.single-price span').html()+ +$('.double-price span').html()+ +$('.quadra-price span').html());

    // 計算增加的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算增加的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 雙人房間數>0，減號變綠色
    if($('.doubleNum').val() > 0){
        $('#double-minus svg circle').css('fill','var(--primaryColor_dark)');
    }
    // 增加雙人房明細
    if($('#double-detail').css('display') == 'none'){
        $('#double-detail').show();
    }
  });
  

// 雙人房-《減少》
$('#double-minus').click(function () {
    // 減少雙人房間數
    var minusNum = $('.doubleNum').val();
    if($('.doubleNum').val() > 0){
        $('.doubleNum').val(--minusNum);
        console.log('doubleminus:',$('.doubleNum').val());
    }

    // 計算減少明細的間數&房型總價錢
    var doublePrice = parseInt($('.doubleprice span').html());
    var doubleTotal = doublePrice * minusNum;
    $('.double-room-num span').html(minusNum);
    $('.double-price span').html(`${doubleTotal}`);
    
    // 計算減少的全部總價
    $('.total-num span').html(+$('.single-price span').html() + +$('.double-price span').html() + +$('.quadra-price span').html());
    
    // 計算減少的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算減少的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 雙人房間數=0，減號變灰色
    if($('.doubleNum').val() == 0){
        console.log('changeColor');
        $('#double-minus svg circle').css('fill','var(--black_500)');
    }
});

// ---------------------(↓↓↓↓四人房↓↓↓↓↓)--------------------------------

// 四人房-《增加》
$('#quadra-plus').click(function () {
// 增加四人房間數
    var plusNum = $('.quadraNum').val();
    $('.quadraNum').val(++plusNum);

    // 計算增加明細的間數&房型總價錢
    var quadraPrice = parseInt($('.quadraprice span').html());
    var quadraTotal = quadraPrice * plusNum;
    $('.quadra-room-num span').html(plusNum);
    $('.quadra-price span').html(`${quadraTotal}`);
    
    // 計算增加的全部總價
    $('.total-num span').html(+$('.single-price span').html() + +$('.double-price span').html() + +$('.quadra-price span').html());

    // 計算增加的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算增加的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 四人房間數>0，減號變綠色
    if($('.quadraNum').val() > 0){
        $('#quadra-minus svg circle').css('fill','var(--primaryColor_dark)');
    }
    // 增加四人房明細
    if($('#quadra-detail').css('display') == 'none'){
        $('#quadra-detail').show();
    }
  });
  

// 四人房-《減少》
$('#quadra-minus').click(function () {
    // 減少四人房間數
    var minusNum = $('.quadraNum').val();
    if($('.quadraNum').val() > 0){
        $('.quadraNum').val(--minusNum);
        console.log('quadraminus:',$('.quadraNum').val());
    }

    // 計算減少明細的間數&房型總價錢
    var quadraPrice = parseInt($('.quadraprice span').html());
    var quadraTotal = quadraPrice * minusNum;
    $('.quadra-room-num span').html(minusNum);
    $('.quadra-price span').html(`${quadraTotal}`);

    // 計算減少的全部總價
    $('.total-num span').html(+$('.single-price span').html() + +$('.double-price span').html() + +$('.quadra-price span').html());

    // 計算減少的訂金
    $('.deposit-num span').html($('.total-num span').html()/2);

    // 計算減少的尾款
    $('.rest-num span').html($('.total-num span').html()/2);

    // 四人房間數=0，減號變灰色
    if($('.quadraNum').val() == 0){
        console.log('changeColor');
        $('#quadra-minus svg circle').css('fill','var(--black_500)');
    }
});



// 日曆初始化
$( "#datepicker" ).datepicker();

$( "#datepicker" ).change(function(){
    // console.log('now date:', $(this).val());
    changeShowDate(new Date($(this).val()))
})

function changeShowDate(today){
    // const today = new Date();
    const yearOfToday = today.getFullYear();
    const monthOfToday = today.getMonth();
    const dateOfToday = today.getDate();
    console.log('today',today);

    const monthOfShortArray =  ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']

    const myDate = `${monthOfShortArray[monthOfToday]}/ ${yearOfToday}`

    $('.choose-textbox').eq(0).find('h6').text(dateOfToday)
    $('.choose-textbox').eq(0).find('p').eq(1).text(myDate)
}

changeShowDate(new Date());

