$(function(){
  $('a[href^="#"]').click(function(){
    var speed = 500;
    var href= $(this).attr("href");
    var target = $(href == "#" || href == "" ? 'html' : href);
    var position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});

$(function(){
  $('.btn_menu').on('click', function(e){
    $(this).toggleClass('active');
    e.preventDefault();
    $('.fnav').toggleClass('open');

  });
})

$(function() {
  function accordion() {
    $(this).next().slideToggle(500);
    $(this).toggleClass('navopen')
  }
  $(".navmore").click(accordion);
});

$(function(){
  window.onpageshow = function(event) {
  if (event.persisted) {
       window.location.reload();
   }
  };
})

/* QA アコーディオン */
$(function() {
    function accordion() {
        $(this).toggleClass("active").next().slideToggle(500);
    }
    $(".dmenu").click(accordion);
});


/* スライダー */
$(window).on('load', function(){
  sW = window.innerWidth;
  $('.topslider').bxSlider({
      auto: true,
      pause: 5000,
      speed: 1000,
      mode: 'horizontal',
      pager: true,
      minSlides: 1,
      maxSlides: 1,
      moveSlides: 1,
      controls: true,
      touchEnabled: false
  });
  if (sW < 768){
    $('.snews').bxSlider({
      auto: true,
      pause: 10000,
      speed: 1000,
      minSlides: 1,
      maxSlides: 1,
      mode: 'horizontal',
      pager: true,
      slideWidth: 360,
      controls: false,
      touchEnabled: false
    });
  }
  if (sW < 768){
    $('.slslider').bxSlider({
        auto: true,
        pause: 10000,
        speed: 2000,
        mode: 'horizontal',
        pager: true,
        minSlides: 3,
        maxSlides: 3,
        moveSlides: 3,
        slideWidth: 150,
        slideMargin: 10,
        controls: false,
        touchEnabled: true
    });

  } else {
    $('.slslider').bxSlider({
        auto: true,
        pause: 10000,
        speed: 2000,
        mode: 'horizontal',
        pager: true,
        minSlides: 6,
        maxSlides: 6,
        moveSlides: 6,
        slideWidth: 360,
        slideMargin: 5,
        controls: true,
        touchEnabled: false
    });
  }
  if (sW > 768){
    $('.snslider').bxSlider({
        auto: false,
        speed: 1000,
        mode: 'horizontal',
        pager: true,
        infiniteLoop: false,
        minSlides: 1,
        maxSlides: 3,
        moveSlides: 1,
        slideWidth: 240,
        slideMargin: 10,
        controls: false,
        touchEnabled: false
    });
  } else {
    $('.snslider').bxSlider({
      auto: true,
      pause: 10000,
      speed: 1000,
      minSlides: 1,
      maxSlides: 1,
      mode: 'horizontal',
      pager: true,
      slideWidth: 360,
      slideMargin: 5,
      controls: false,
      touchEnabled: false
    });
  }
});

jQuery(function($){
var windowWidth = $(window).width();
var windowSm = 768;
if (windowWidth >= windowSm) {
  $('#sc-list li').autoHeight({column:4, clear:1});
  $('#sc-list2 li').autoHeight({column:4, clear:1});
  $('#sc-list3 li').autoHeight({column:4, clear:1});
  $('#sc-list4 li').autoHeight({column:4, clear:1});
}

});
$(window).on('load', function(){
  $('.slslider li').autoHeight();
});
