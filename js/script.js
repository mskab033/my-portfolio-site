$(function () {

  // ページ内スクロール
  var navHeight = $(".header").outerHeight();

  $('a[href^="#"]').on("click", function() {
    var href = $(this).attr("href");
    var target = $(href == "#" || href == "" ? "html" : href);
    var position = target.offset().top - navHeight;
    $("html, body").animate({ scrollTop: position, }, 1000, "swing");
    return false;
  });

  // ページトップ
  $("#js-page-top").on("click", function() {
    $("body,html").animate({ scrollTop: 0, }, 1000);
    return false;
  });

  // タイトル
  var $target = $("hr");
 //アニメーションタイミング
  var offset = 50;
  $(window).on("scroll", function() {
    //スクロール量を取得
    var scroll = $(window).scrollTop();
    //画面の高さを取得
    var winHeight = $(window).height();
    $target.each(function() {
      //アニメーションさせたい要素の位置を取得
      var position = $(this).offset().top;
      //スクロール量 > アニメーションさせたい要素の位置
      if (scroll > position - winHeight + offset && scroll < position - offset) {
        $(this).addClass("is-animated");
      } else {
        $(this).removeClass("is-animated");
      }
    })
  });

});
