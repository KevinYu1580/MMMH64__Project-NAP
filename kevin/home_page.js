
// --------napSteps_mobile 卡片翻轉--------
const card1_mb = $('.napSteps .wrap_mb .cardWrap #num1')
const card2_mb = $('.napSteps .wrap_mb .cardWrap #num2')
const card3_mb = $('.napSteps .wrap_mb .cardWrap #num3')
const card4_mb = $('.napSteps .wrap_mb .cardWrap #num4')

$(window).scroll(function(){
    const scrHeight = screen.availHeight

    // 個別卡片與螢幕頂端之距離
    const card1Top = ((card1_mb.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card2Top = ((card2_mb.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card3Top = ((card3_mb.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card4Top = ((card4_mb.offset().top - $(window).scrollTop()) / scrHeight) * 100

    const topPercent = 35
    
    if(card1Top < topPercent){
        card1_mb.css('transform', 'rotateY(180deg)');
    }
    else{
        card1_mb.css('transform', 'rotateY(0deg)');
    }

    if(card2Top < topPercent){
        card2_mb.css('transform', 'rotateY(180deg)');
    }
    else{
        card2_mb.css('transform', 'rotateY(0deg)');
    }

    if(card3Top < topPercent){
        card3_mb.css('transform', 'rotateY(180deg)');
    }
    else{
        card3_mb.css('transform', 'rotateY(0deg)');
    }

    if(card4Top < topPercent){
        card4_mb.css('transform', 'rotateY(180deg)');
    }
    else{
        card4_mb.css('transform', 'rotateY(0deg)');
    }
})



// --------napSteps_pc 卡片翻轉--------

// 左向右滑入效果
const card1_pc = $('.napSteps .wrap_pc .cardWrap #num1')
const card2_pc = $('.napSteps .wrap_pc .cardWrap #num2')
const card3_pc = $('.napSteps .wrap_pc .cardWrap #num3')
const card4_pc = $('.napSteps .wrap_pc .cardWrap #num4')


$(card1_pc).css('transform')


// hover效果
$(card1_pc).mouseenter(function(){
    $('.napSteps .wrap_pc .cardWrap #num1 .napCard').css('transform', 'rotateY(180deg)');
})
$(card1_pc).mouseleave(function(){
    $('.napSteps .wrap_pc .cardWrap #num1 .napCard').css('transform', 'rotateY(0deg)');
})
$(card2_pc).mouseenter(function(){
    $('.napSteps .wrap_pc .cardWrap #num2 .napCard').css('transform', 'rotateY(180deg)');
})
$(card2_pc).mouseleave(function(){
    $('.napSteps .wrap_pc .cardWrap #num2 .napCard').css('transform', 'rotateY(0deg)');
})
$(card3_pc).mouseenter(function(){
    $('.napSteps .wrap_pc .cardWrap #num3 .napCard').css('transform', 'rotateY(180deg)');
})
$(card3_pc).mouseleave(function(){
    $('.napSteps .wrap_pc .cardWrap #num3 .napCard').css('transform', 'rotateY(0deg)');
})
$(card4_pc).mouseenter(function(){
    $('.napSteps .wrap_pc .cardWrap #num4 .napCard').css('transform', 'rotateY(180deg)');
})
$(card4_pc).mouseleave(function(){
    $('.napSteps .wrap_pc .cardWrap #num4 .napCard').css('transform', 'rotateY(0deg)');
})




