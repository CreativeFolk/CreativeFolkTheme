jQuery(function( $ ){
  $('.top-nav').localScroll({
    duration:500,
    hash:true
  });
});


if($(window).width() < 768){
  $(document).ready(function(){
    $('.about-slider').bxSlider();
  });
}
