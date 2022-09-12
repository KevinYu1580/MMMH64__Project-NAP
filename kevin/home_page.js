// 進場卡片特效
$(window).scroll(function(){
    const window_top = $(window).scrollTop()
    const first_page = $('.first_page')
    const first_page_top = first_page.offset().top 
    const aniCover = $('.aniCover')

    let heightNum = '300vh';

    // aniCover位移控制
    if(first_page_top - window_top < 0){
        aniCover.css({
            'position': 'absolute',
            'top':`${heightNum}`
        })
        // first_page.css('margin-top', '0')
    }
    else {
        aniCover.css({
            'position': 'fixed',
            'top':`0`
        })
    }
})

















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
const card1_pc_napCard = $('.napSteps .wrap_pc .cardWrap #num1 .napCard')
const card2_pc_napCard = $('.napSteps .wrap_pc .cardWrap #num2 .napCard')
const card3_pc_napCard = $('.napSteps .wrap_pc .cardWrap #num3 .napCard')
const card4_pc_napCard = $('.napSteps .wrap_pc .cardWrap #num4 .napCard')

const cardWrap_pc = $('.napSteps .wrap_pc > .cardWrap')

$(window).scroll(function(){
    const scrHeight = screen.availHeight
    const cardWrap_pc_top = ((cardWrap_pc.offset().top - $(window).scrollTop()) / scrHeight) * 100

    const topPercent = 60

    if(cardWrap_pc_top < topPercent ){
        cardWrap_pc.css('transform', 'translateX(0)');
        card1_pc_napCard.css('animation', ' flip1-1 2s ');
        card2_pc_napCard.css('animation', ' flip2-1 2s ');
        card3_pc_napCard.css('animation', ' flip3-1 2s ');
        card4_pc_napCard.css('animation', ' flip4-1 2s ');

        setTimeout(function(){
            $(card1_pc).mouseenter(function(){
                card1_pc_napCard.css('transform', 'rotateY(180deg)');
            })
            $(card1_pc).mouseleave(function(){
                card1_pc_napCard.css('transform', 'rotateY(0deg)');
            })
            $(card2_pc).mouseenter(function(){
                card2_pc_napCard.css('transform', 'rotateY(180deg)');
            })
            $(card2_pc).mouseleave(function(){
                card2_pc_napCard.css('transform', 'rotateY(0deg)');
            })
            $(card3_pc).mouseenter(function(){
                card3_pc_napCard.css('transform', 'rotateY(180deg)');
            })
            $(card3_pc).mouseleave(function(){
                card3_pc_napCard.css('transform', 'rotateY(0deg)');
            })
            $(card4_pc).mouseenter(function(){
                card4_pc_napCard.css('transform', 'rotateY(180deg)');
            })
            $(card4_pc).mouseleave(function(){
                card4_pc_napCard.css('transform', 'rotateY(0deg)');
            })
        }, 2000)
    }
    else{
        cardWrap_pc.css('transform', 'translateX(100vw)');
        card1_pc_napCard.css('animation', ' flip1-2 2s ');
        card2_pc_napCard.css('animation', ' flip2-2 2s ');
        card3_pc_napCard.css('animation', ' flip3-2 2s ');
        card4_pc_napCard.css('animation', ' flip4-2 2s ');
        $(card1_pc).unbind();
        $(card2_pc).unbind();
        $(card3_pc).unbind();
        $(card4_pc).unbind();
    }
})








