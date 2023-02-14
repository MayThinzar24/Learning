/**
 * UA判別
 */
var _ua = (function (u) {
    return {
        Tablet: (u.indexOf("windows") != -1 && u.indexOf("touch") != -1 && u.indexOf(
            "tablet pc") == -1) ||
            u.indexOf("ipad") != -1 ||
            (u.indexOf("android") != -1 && u.indexOf("mobile") == -1) ||
            (u.indexOf("firefox") != -1 && u.indexOf("tablet") != -1) ||
            u.indexOf("kindle") != -1 ||
            u.indexOf("silk") != -1 ||
            u.indexOf("playbook") != -1,
        Mobile: (u.indexOf("windows") != -1 && u.indexOf("phone") != -1) ||
            u.indexOf("iphone") != -1 ||
            u.indexOf("ipod") != -1 ||
            (u.indexOf("android") != -1 && u.indexOf("mobile") != -1) ||
            (u.indexOf("firefox") != -1 && u.indexOf("mobile") != -1) ||
            u.indexOf("blackberry") != -1
    }
})(window.navigator.userAgent.toLowerCase());

/**
 * デバイス別 viewport 指定
 */
if (_ua.Mobile) {
    $("meta[name='viewport']").attr('content',
        'width=device-width, initial-scale=1');
} else if (_ua.Tablet) {
    $("meta[name='viewport']").attr('content', 'width=1200');
} else {
    $("meta[name='viewport']").attr('content', 'width=1200');
}

// device
if (_ua.Mobile) {
    $("meta[name='viewport']").attr('content', 'width=device-width, initial-scale=1,viewport-fit=cover');
    // change images with devices width
    $(document).ready(function () {
        $(function () {
            var $setElem = $('img'),
                pcName = '_pc',
                spName = '_sp',
                replaceWidth = 767;

            $setElem.each(function () {
                var $this = $(this);
                function imgSize() {
                    if (window.innerWidth > replaceWidth) {
                        $this.attr('src', $this.attr('src').replace(spName, pcName)).css({ visibility: 'visible' });
                    } else {
                        $this.attr('src', $this.attr('src').replace(pcName, spName)).css({ visibility: 'visible' });
                    }
                }
                $(window).resize(function () { imgSize(); });
                imgSize();
            });
        });
    });
} else if (_ua.Tablet) {
    $("meta[name='viewport']").attr('content', 'width=device-width,viewport-fit=cover,');
    $("body").attr('class', 'tablet');
} else {
    $("meta[name='viewport']").attr('content', 'width=device-width,initial-scale=1');
}

/**
 * internal linkスムーズスクロール
 */
$(function () {
    $('a[href*="#"]:not([href="#"])').click(function () {
        var head_h = $(".header").height();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: target.offset().top - head_h
                }, 1000);
                return false;
            }
        }
    });
});

/**
 * external linkスムーズスクロール
 */
$(function () {
    setTimeout(function () {
        if (location.hash) {
            window.scrollTo(0, 0);
            target = location.hash.split('#');
            smoothScrollTo($('#' + target[1]));
        }
    }, 1);

    /**
     * taken from: https://css-tricks.com/snippets/jquery/smooth-scrolling/
     */
    $('a[href*="#"]:not([href="#"])').click(function () {
        var head_h = $(".header").height();
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname) {
            smoothScrollTo($(this.hash));
            return false;
        }
    });

    function smoothScrollTo(target) {
        target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
        var tabheight = $('.tab-wrap').outerHeight();
        if (window.matchMedia('(max-width: 767.9px)').matches) {
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - 240
                }, 1000);
            }

        } else {
            if (target.length) {
                $('html,body').animate({
                    scrollTop: target.offset().top - (2.1 * tabheight)
                }, 1000);
            }
        }
    }

    /**
     * Header Height
     */
    function setHeight() {
        var header = $(".header").height();
        $(".js-height").css('margin-top', header);
    }
    setHeight();
    $(window).resize(function () {
        setHeight();
    });

    /**
     * Dropdown Menu
     */

    if (window.matchMedia('(min-width: 767.9px)').matches) {
        $('.menu-list .dropdown').hover(function () {
            $(this).children('ul').stop(true, false, true).slideToggle(700);
        });
    }
    else {
        $('.menu-list .dropdown').click(function () {
            $(this).children('ul').slideToggle(700);
        });
    }

    /**
     * Menu Toggle
     */
    $(".js-toggle").on('click', function () {
        $(this).toggleClass('js-active');
        $(".nav").toggleClass("js-nav");
    });

    /**
     * Accordion
     */
    $(".acc-header").click(function () {
        $(".js-active").not(this).removeClass("js-active").next().slideUp(300);
        $(this).toggleClass("js-active").next().slideToggle(300);
    });

    /**
     * Tab Link
     */
    var url = window.location.href;
    $('.tab-list li a').each(function () {
        if (window.location.href.indexOf(this.href) > -1) {
            $(this).addClass('js-active');
            smoothScrollTo($('#tab-content'));
        }
    });
    
    /**
    * Agree Checkbox
    */

   var chkbtn = document.getElementById('form-btn');
   chkbtn.disabled = true;
   $('[name="chk[]"]').change(function () {
       $('#form-btn').toggleClass('active');
       if ($('#form-btn').hasClass('active')) {
           $('#form-btn').removeAttr("disabled");
       } else {
           chkbtn.disabled = true;
       }
   });

});