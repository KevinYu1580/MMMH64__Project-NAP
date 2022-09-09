$(window).scroll(function(){
    const card1 = $('.napSteps .wrap_mb .cardWrap #num1')
    const card2 = $('.napSteps .wrap_mb .cardWrap #num2')
    const card3 = $('.napSteps .wrap_mb .cardWrap #num3')
    const card4 = $('.napSteps .wrap_mb .cardWrap #num4')

    const scrHeight = screen.availHeight

    // 個別卡片與螢幕頂端之距離
    const card1Top = ((card1.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card2Top = ((card2.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card3Top = ((card3.offset().top - $(window).scrollTop()) / scrHeight) * 100
    const card4Top = ((card4.offset().top - $(window).scrollTop()) / scrHeight) * 100

    const topPercent = 35
    
    if(card1Top < topPercent){
        card1.css('transform', 'rotateY(180deg)');
    }
    else{
        card1.css('transform', 'rotateY(0deg)');
    }

    if(card2Top < topPercent){
        card2.css('transform', 'rotateY(180deg)');
    }
    else{
        card2.css('transform', 'rotateY(0deg)');
    }

    if(card3Top < topPercent){
        card3.css('transform', 'rotateY(180deg)');
    }
    else{
        card3.css('transform', 'rotateY(0deg)');
    }

    if(card4Top < topPercent){
        card4.css('transform', 'rotateY(180deg)');
    }
    else{
        card4.css('transform', 'rotateY(0deg)');
    }

})

