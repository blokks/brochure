
// smooth scrolling
$(document).on("click", ".smooth", function(e) {
  e.preventDefault(), $("html, body").animate({
    scrollTop: $($.attr(this, "href")).offset().top
  }, 400)
});

// slideshow (zelf geschreven jee)
function resetActives(target) {
  $(".feature-"+target+" .slide-link-01").removeClass("link-active"); 
  $(".feature-"+target+" .slide-link-02").removeClass("link-active"); 
  $(".feature-"+target+" .slide-link-03").removeClass("link-active"); 
  $(".feature-"+target+" .slide-image-01").removeClass("image-active");
  $(".feature-"+target+" .slide-image-02").removeClass("image-active"); 
  $(".feature-"+target+" .slide-image-03").removeClass("image-active");
}

function activateSlide(target, slide) {
  $(".feature-" + target + " .slide-link-" + slide).addClass("link-active");
  $(".feature-" + target + " .slide-image-" + slide).addClass("image-active");
}

$(".feature-cms .slide-link-01").click(function() {
    resetActives("cms");
    activateSlide("cms", "01");
});
$(".feature-cms .slide-link-02").click(function() {
    resetActives("cms");
    activateSlide("cms", "02");
});
$(".feature-cms .slide-link-03").click(function() {
    resetActives("cms");
    activateSlide("cms", "03")
});

$(".feature-embed .slide-link-01").click(function() {
    resetActives("embed");
    activateSlide("embed", "01")
});
$(".feature-embed .slide-link-02").click(function() {
    resetActives("embed");
    activateSlide("embed", "02")
});
$(".feature-embed .slide-link-03").click(function() {
    resetActives("embed");
    activateSlide("embed", "03")
});

$(".feature-customize .slide-link-01").click(function() {
    resetActives("customize");
    activateSlide("customize", "01")
});
$(".feature-customize .slide-link-02").click(function() {
    resetActives("customize");
    activateSlide("customize", "02")
});
$(".feature-customize .slide-link-03").click(function() {
    resetActives("customize");
    activateSlide("customize", "03")
});




