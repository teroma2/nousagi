function copyright(){
    myDate = new Date();
    document.write(myDate.getFullYear());
}

// pagetop
$(document).ready(function() {
    var pagetop = $('.js-pagetop');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pagetop.fadeIn();
        } else {
            pagetop.fadeOut();
        }
    });
    pagetop.click(function () {
        $('body, html').animate({ scrollTop: 0 }, 500);
        return false;
    });
});

//menu accordion
$(function(){
  $(".navigation_sp li").on("click", function() {
      $(this).next().slideToggle();
  });
});
