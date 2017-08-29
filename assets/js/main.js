
// smooth scrolling
$(document).on("click", ".smooth", function(e) {
  e.preventDefault(), $("html, body").animate({
    scrollTop: $($.attr(this, "href")).offset().top
  }, 500)
});


// show nav when scrolling up
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = 40;

$(window).scroll(function(event){
  didScroll = true;
});

setInterval(function() {
  if (didScroll) {
    hasScrolled();
    didScroll = false;
  }
}, 250);

function hasScrolled() {
  var st = $(this).scrollTop();

  if(Math.abs(lastScrollTop - st) <= delta)
    return;
  
  if (st > lastScrollTop && st > navbarHeight){
    $('.nav-left').removeClass('nav-left-initial').addClass('nav-left-scrolled');
  } else {
    if(st + $(window).height() < $(document).height()) {
      $('.nav-left').removeClass('nav-left-scrolled').addClass('nav-left-initial');
    }
  }

  lastScrollTop = st;
}

// slideshow (zelf geschreven jee)
function resetActives(target) {
  $(target+" .slide-link-01").removeClass("link-active"); 
  $(target+" .slide-link-02").removeClass("link-active"); 
  $(target+" .slide-link-03").removeClass("link-active");
  $(target+" .slide-link-04").removeClass("link-active"); 
  $(target+" .slide-image-01").removeClass("image-active");
  $(target+" .slide-image-02").removeClass("image-active"); 
  $(target+" .slide-image-03").removeClass("image-active");
  $(target+" .slide-image-04").removeClass("image-active");
}

function activateSlide(target, slide) {
  $(target + " .slide-link-" + slide).addClass("link-active");
  $(target + " .slide-image-" + slide).addClass("image-active");
}

$(".feature-cms .slide-link-01").click(function() {
    resetActives(".feature-cms");
    activateSlide(".feature-cms", "01");
});
$(".feature-cms .slide-link-02").click(function() {
    resetActives(".feature-cms");
    activateSlide(".feature-cms", "02");
});
$(".feature-cms .slide-link-03").click(function() {
    resetActives(".feature-cms");
    activateSlide(".feature-cms", "03")
});

$(".feature-embed .slide-link-01").click(function() {
    resetActives(".feature-embed");
    activateSlide(".feature-embed", "01")
});
$(".feature-embed .slide-link-02").click(function() {
    resetActives(".feature-embed");
    activateSlide(".feature-embed", "02")
});
$(".feature-embed .slide-link-03").click(function() {
    resetActives(".feature-embed");
    activateSlide(".feature-embed", "03")
});

$(".feature-customize .slide-link-01").click(function() {
    resetActives(".feature-customize");
    activateSlide(".feature-customize", "01")
});
$(".feature-customize .slide-link-02").click(function() {
    resetActives(".feature-customize");
    activateSlide(".feature-customize", "02")
});
$(".feature-customize .slide-link-03").click(function() {
    resetActives(".feature-customize");
    activateSlide(".feature-customize", "03")
});

// examples slideshow

$(".examples .slide-link-01").click(function() {
    resetActives(".examples");
    activateSlide(".examples", "01")
});
$(".examples .slide-link-02").click(function() {
    resetActives(".examples");
    activateSlide(".examples", "02")
});
$(".examples .slide-link-03").click(function() {
    resetActives(".examples");
    activateSlide(".examples", "03")
});
$(".examples .slide-link-04").click(function() {
    resetActives(".examples");
    activateSlide(".examples", "04")
});


































































































































































