$(document).ready(function () {
  var cubuk_seviye = $(document).scrollTop();
  var header_yuksekligi = $('.yapiskan').outerHeight();
  $(window).scroll(function () {
    var kaydirma_cubugu = $(document).scrollTop();

    if (kaydirma_cubugu > header_yuksekligi) { $('.yapiskan').addClass('gizle'); }
    else { $('.yapiskan').removeClass('gizle'); }

    if (kaydirma_cubugu > cubuk_seviye) { $('.yapiskan').removeClass('sabit'); }
    else { $('.yapiskan').addClass('sabit'); }

    cubuk_seviye = $(document).scrollTop();
  });
});
$(document).ready(function (m) {
  if ($(window).width() > 992) {
    $('.smolNav').click(function () {
      $('.menuBox').addClass('showMenu');
      $('body').addClass('scrollbarNone');
    });
    $('.menuBoxClose').click(function () {
      $('.menuBox').removeClass('showMenu');
      $('body').removeClass('scrollbarNone');
    });
  }
});


$(".menuBox, .smolNav").click(function (m) {
  m.stopPropagation();
});

$(document).click(function () {
  $('.menuBox').removeClass('showMenu');
  $('body').removeClass('scrollbarNone');
});
$(document).ready(function () {
  //window.showACP();

  if ($(window).width() > 992) {
    $('.smolNav').click(function () {
      $('.menuBox').addClass('showMenu');
      $('body').addClass('scrollbarNone');
    });
    $('.menuBoxClose').click(function () {
      $('.menuBox').removeClass('showMenu');
      $('body').removeClass('scrollbarNone');
    });
  }


  var $boxes = $('.boxlink');
  $('.menuList .menu-link').mouseover(function () {
    $('.menu-link').removeClass('active');
    $(this).addClass('active');
    $boxes.hide().filter('#box' + this.id).show();
  });


  if ($(window).width() < 991) {
    //	MainMenu
    $('.smolNav').click(function () {
      
      $('.menuBox').animate({ left: '0' });
      $('.menuBox').addClass('showMenu');
      $('body').addClass('scrollbarNone');
    });
    $('.menuBoxClose').click(function () {
      $('.menuBox').animate({ left: '-100%' });
      $('.menuBox').removeClass('showMenu');
      $('body').removeClass('scrollbarNone');
    });


    //	SubMenu
    //	var $boxes = $('.boxlink');
    $('.menuList .menu-link').click(function () {
      $('.menu-link').removeClass('active');
      //	 $(this).addClass('active');
      $boxes.hide().filter('#box' + this.id).show();
      //		$boxes.animate({right: '100%'}).filter('#box' + this.id).animate({right: '0px'});		
      $(".subMenu").animate({ right: '0px' });
    });

    $('.subMenuClose').click(function () {
      $(".subMenu").animate({ right: "100%" });
    });
  }
});
