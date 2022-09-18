// 按下查詢空房，出現訂房間數選項
$('.booking-box').click(function(){
    $('.room-null').hide();
    $('.room-card-group').show();
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
    let plusNum = $('.singleNum').val();
    $('.singleNum').val(++plusNum);

    // 計算增加明細的間數&總價錢
    let singlePrice = 2600;
    let singleTotal = singlePrice * plusNum;
    $('.single-room-num span').html(plusNum);
    $('.single-price').html(`NT$${singleTotal}`);
    console.log('singleplus:',$('.singleNum').val());

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
    let minusNum = $('.singleNum').val();
    if($('.singleNum').val() > 0){
        $('.singleNum').val(--minusNum);
        console.log('singleminus:',$('.singleNum').val());
    }

    // 計算減少明細的間數&總價錢
    let singlePrice = 2600;
    let singleTotal = singlePrice * minusNum;
    $('.single-room-num span').html(minusNum);
    $('.single-price').html(`NT$${singleTotal}`);

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
    let plusNum = $('.doubleNum').val();
    $('.doubleNum').val(++plusNum);

    // 計算增加明細的間數&總價錢
    let doublePrice = 3600;
    let doubleTotal = doublePrice * plusNum;
    $('.double-room-num span').html(plusNum);
    $('.double-price').html(`NT$${doubleTotal}`);
    console.log('doubleplus:',$('.doubleNum').val());

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
    let minusNum = $('.doubleNum').val();
    if($('.doubleNum').val() > 0){
        $('.doubleNum').val(--minusNum);
        console.log('doubleminus:',$('.doubleNum').val());
    }

    // 計算減少明細的間數&總價錢
    let doublePrice = 3600;
    let doubleTotal = doublePrice * minusNum;
    $('.double-room-num span').html(minusNum);
    $('.double-price').html(`NT$${doubleTotal}`);    

    // 雙人房間數=0，減號變灰色
    if($('.doubleNum').val() == 0){
        console.log('changeColor');
        $('#double-minus svg circle').css('fill','var(--black_500)');
    }
});

// ---------------------(↓↓↓↓四人房↓↓↓↓↓)--------------------------------

// 四人房-《增加》
$('#quadra-plus').click(function () {

  });
  

// 四人房-《減少》
$('#quadra-minus').click(function () {
    // 減少四人房間數
    let minusNum = $('.quadraNum').val();
    if($('.quadraNum').val() > 0){
        $('.quadraNum').val(--minusNum);
        console.log('quadraminus:',$('.quadraNum').val());
    }

    // 計算減少明細的間數&總價錢
    let quadraPrice = 6600;
    let quadraTotal = quadraPrice * minusNum;
    $('.quadra-room-num span').html(minusNum);
    $('.quadra-price').html(`NT$${quadraTotal}`);

    // 四人房間數=0，減號變灰色
    if($('.quadraNum').val() == 0){
        console.log('changeColor');
        $('#quadra-minus svg circle').css('fill','var(--black_500)');
    }
});


$('#single-minus #double-minus #quadra-minus').click(function(){
    // 增加四人房間數
    let plusNum = $('.quadraNum').val();
    $('.quadraNum').val(++plusNum);

    // 計算增加明細的間數&總價錢
    let quadraPrice = 6600;
    let quadraTotal = quadraPrice * plusNum;
    $('.quadra-room-num span').html(plusNum);
    $('.quadra-price').html(`NT$${quadraTotal}`);
    console.log('quadraplus:',$('.quadraNum').val());

    // 四人房間數>0，減號變綠色
    if($('.quadraNum').val() > 0){
        $('#quadra-minus svg circle').css('fill','var(--primaryColor_dark)');
    }
    // 增加四人房明細
    if($('#quadra-detail').css('display') == 'none'){
        $('#quadra-detail').show();
    }
})


