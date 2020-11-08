jQuery(function ($) {
  //ここに普通のjQueryの書き方で。下の行は例
  $('h1').hide().fadeIn(5000);

  $('.main-nav').hide().fadeIn(10000);
 

});




jQuery(function ($) {

    $('.slider').slick({
    autoplay: true,
    autoplaySpeed: 3000,
    speed: 800,
    dots: false,
    arrows: true,
    centerMode: true,
    centerPadding: '6%'
    });
});
  // jQuery(function() {
 
  // 一旦hide()で隠してフェードインさせる
//   $('h1').hide().fadeIn(5000);
  
// });

// jQuery(function ($) {

//     $('.fade').textillate();
//   })
