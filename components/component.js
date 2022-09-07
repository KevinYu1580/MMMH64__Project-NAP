// ----------menu---------
$(".topNav_mobile .menu").click(function () {
  $(".nap_menu ").toggleClass("nap_menu_open");
});

// ----------like_Btn---------
$('.napBtn_likeBtn').click(function(){
  $(this).toggleClass('likeBtn_activated');
  $('.napBtn_likeBtn #white').toggle();
})