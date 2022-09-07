// ----------menu---------
$(".topNav_mobile .menu").click(function () {
  $(".nap_menu ").toggleClass("nap_menu_open");
});

// ----------like_Btn---------
$('.napBtn_likeBtn').click(function(){
  $(this).toggleClass('likeBtn_activated');
  $('.napBtn_likeBtn #white').toggle();
})

// ----------switch---------
// --兩格
const backmask = $('.napSwitch_two .backmask')
$('.napSwitch_two .num2').click(function(){
  $(backmask).css('left', '50%');
})
$('.napSwitch_two .num1').click(function(){
  $(backmask).css('left', '0%');
})

// --三格




