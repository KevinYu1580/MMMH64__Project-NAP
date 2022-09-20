    // 手機版入住須知及取消政策(預設隱藏)toggle
    $('.expand-btn1').click(function(){
        $('.check-in-instructions-content-mobile').slideToggle('slow');
        $(".expand-btn1 .down").toggleClass("active");
    })
    $('.expand-btn2').click(function(){
        $('.cancellation-policy-content-mobile').slideToggle('slow');
        $(".expand-btn2 .down").toggleClass("active");
    })