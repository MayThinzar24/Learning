$(document).ready(function () {
    //Anchor Smooth Scroll
    $('nav a').on('click', function (e) {
        e.preventDefault();
        var target = this.hash;
        var $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top
        }, 900);
    });

    $(function () {
        var pagetop = $('.js-page-top');
        pagetop.hide();
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                pagetop.fadeIn();
            } else {
                pagetop.fadeOut();
            }
        });
        // Page top
        $('.js-page-top').click(function () {
            $('html,body').animate({
                scrollTop: 0
            }, 500);
        });
    });
});