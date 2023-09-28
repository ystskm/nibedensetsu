//pageScroll
// 内部リンク
$(function () {
    var headerHight = $('header').outerHeight(); 
      $('a[href^="#"]').click(function () {
        var href = $(this).attr("href");
        var target = $(href == "#" || href == "" ? "html" : href);
        var position = target.offset().top - headerHight;
        $("html, body").animate({ scrollTop: position }, 500, "swing");
        return false;
      });
  });
  
// TOP
$(function(){
    var imgHeight = $('.mv').outerHeight(); //画像の高さを取得。これがイベント発火位置になる。
    var header = $('.front-header'); //ヘッダーコンテンツ
    $(window).on('load scroll', function(){
        if ($(window).scrollTop() < imgHeight) {
        //メインビジュアル内にいるので、クラスを外す。
        header.removeClass('scroll-header');
        }else {
        //メインビジュアルより下までスクロールしたので、クラスを付けて色を変える
        header.addClass('scroll-header');
        }
    });
});

// 下層
$(function () {
    $(window).on('load scroll', function () {
      var $header = $('.under-header');
  
      // 100以上スクロールしたら処理
      if ($(window).scrollTop() > 100) {
        $header.addClass('scroll-header');
      } else {
        $header.removeClass('scroll-header');
      }
    });
  });

// スマホ版 ハンバーガーメニュー
$(function() {
    $('.header-sp-btn').click(function() {
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) {
            $('.header-sp-nav').addClass('active');
            $('.nav-overlay').addClass('active');
        } else {
            $('.header-sp-nav').removeClass('active');
            $('.nav-overlay').removeClass('active');
        }
    });
});
$(function() {
    $(".header-sp-nav a[href]").click(function() {
        var windowWidth = window.innerWidth;
        
        if (windowWidth <= 767) {
            $('.header-sp-btn').trigger('click');
        }
    });
});