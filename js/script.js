// hamburgerMenu
const hamburger = $("#js-hamburger");
const nav = $("#js-nav");
const hamburgerLink = document.querySelectorAll(".nav__item a");
hamburger.on("click", function () {
  hamburger.toggleClass("active");
  nav.toggleClass("active");
});
for (let i = 0; i < hamburgerLink.length; i++) {
  hamburgerLink[i].addEventListener("click", () => {
    hamburger.toggleClass("active");
    nav.toggleClass("active");
  });
}

// smoothScroll
var navHeight = $(".header").outerHeight();
$('a[href^="#"]').on("click", function() {
  var href = $(this).attr("href");
  var target = $(href == "#" || href == "" ? "html" : href);
  var position = target.offset().top - navHeight;
  $("html, body").animate({ scrollTop: position, }, 1000, "swing");
  return false;
});

// pageTop
$("#js-page-top").on("click", function() {
  $("body,html").animate({ scrollTop: 0, }, 1000);
  return false;
});
