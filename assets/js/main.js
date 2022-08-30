/**
 * Theme Main Scripts
 * @since 1.0.0
 */
;(function ($) {
    "use strict";

    jQuery(document).ready(function ($) {

        /*----------------------
           Search Popup
       -----------------------*/
        var bodyOvrelay = $('#body-overlay');
        var searchPopup = $('#newsletter-popup');

        bodyOvrelay.on('click', function (e) {
            e.preventDefault();
            bodyOvrelay.removeClass('active');
            searchPopup.removeClass('active');
        });
        $(document).on('click', '#newsletter', function (e) {
            e.preventDefault();
            searchPopup.addClass('active');
            bodyOvrelay.addClass('active');
        });


        /*-------------------------------
            back to top
        ------------------------------*/
        $(document).on('click', '.back-to-top', function () {
            $("html,body").animate({
                scrollTop: 0
            }, 2000);
        });
        /*-------------------------------
            Navbar Fix
        ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }

        /*--------------------------
         sticky menu activation
        ---------------------------*/
        $(window).bind('scroll', function () {
            var navHeight = $('.nav-bar-style-01').height();
            if ($(window).scrollTop() > navHeight) {
                $('.navbar-area').addClass('nav-fixed');
            } else {
                $('.navbar-area').removeClass('nav-fixed');
            }
        });
    });

    $(window).on('resize', function () {
        /*-------------------------------
            Navbar Fix
        ------------------------------*/
        if ($(window).width() < 991) {
            navbarFix()
        }
    });


    //define variable for store last scrolltop
    var lastScrollTop = '';
    $(window).on('scroll', function () {
        /*---------------------------
            back to top show / hide
        ---------------------------*/
        var ScrollTop = $('.back-to-top');
        if ($(window).scrollTop() > 500) {
            ScrollTop.fadeIn(500);
        } else {
            ScrollTop.fadeOut(500);
        }
    });

    $(window).on('load', function () {
        /*-----------------------------
            preloader
        -----------------------------*/
        var preLoder = $("#preloader");
        preLoder.fadeOut(1000);
        /*-----------------------------
            back to top
        -----------------------------*/
        var backtoTop = $('.back-to-top')
        backtoTop.fadeOut(100);
    });

    function navbarFix() {
        $(document).on('click', '.navbar-area .navbar-nav li.menu-item-has-children>a', function (e) {
            e.preventDefault();
        })
    }

})(jQuery);
