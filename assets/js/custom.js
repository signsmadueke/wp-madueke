"use strict";

$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $(".navbar-toggler").toggleClass("collapsed");
        $(".main-menu-collapse").toggleClass("show");
    });

    var animate = new WOW({
        boxClass: 'animate',
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        scrollContainer: null,
        resetAnimation: true,
    });

    animate.init();

    $("#navigation .menu").click(function (openSidebar) {
        var $body = $('body');
        var $sidebar = $('#sidebar');
        var $menu = $('#navigation .menu');
        $body.toggleClass("sidebar-opened");
        $menu.toggleClass("collapsed");
    });

    $(document).keypress(function (e) {
        var $body = $('body');
        var $sidebar = $('#sidebar');
        var $menu = $('#navigation .menu');
        if (e.keyCode === 27) {
            $body.toggleClass("sidebar-opened");
            $menu.toggleClass("collapsed");
        }
    });

    document.addEventListener("keyup", e => {
        var $body = $('body');
        var $sidebar = $('#sidebar');
        var $menu = $('#navigation .menu');

        // if we press the ESC
        if (e.key == "Escape" && $body.hasClass("sidebar-opened")) {
            $body.toggleClass("sidebar-opened");
            $menu.toggleClass("collapsed");
        }
    });

    // $('#adverts').flickity({
    //     contain: true,
    //     prevNextButtons: false,
    //     pageDots: false,
    //     wrapAround: true,
    //     autoPlay: 5000,
    //     pauseAutoPlayOnHover: false,
    //     dragThreshold: 10,
    //     bgLazyLoad: true


    // });

    // $('#reviews').flickity({
    //     contain: true,
    //     prevNextButtons: false,
    //     pageDots: true,
    //     // wrapAround: true,
    //     autoPlay: 5000,
    //     pauseAutoPlayOnHover: false,
    //     dragThreshold: 15,
    //     adaptiveHeight: true,
    //     // bgLazyLoad: true,
    // });

    // $('#adverts').flickity({
    //     contain: true,
    //     prevNextButtons: false,
    //     pageDots: false,
    //     wrapAround: true,
    //     autoPlay: 5000,
    //     pauseAutoPlayOnHover: false,
    //     dragThreshold: 10,
    //     bgLazyLoad: true


    // });

    var wooMessage = $('.woocommerce-notices-wrapper');
    if (wooMessage.text() == '') {
        wooMessage.hide();
    }

    $('.woocommerce-notices-wrapper:empty').hide();

    const openEls = document.querySelectorAll("[data-open]");
    const closeEls = document.querySelectorAll("[data-close]");
    const isVisible = "is-visible";

    for (const el of openEls) {
        el.addEventListener("click", function () {
            const modalId = this.dataset.open;
            document.getElementById(modalId).classList.add(isVisible);
        });
    }

    for (const el of closeEls) {
        el.addEventListener("click", function () {
            this.parentElement.parentElement.parentElement.classList.remove(isVisible);
        });
    }

    document.addEventListener("click", e => {
        if (e.target == document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible [data-close]").click();
        }
    });

    document.addEventListener("keyup", e => {
        // if we press the ESC
        if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
            document.querySelector(".modal.is-visible [data-close]").click();
        }
    });
});

window.addEventListener('load', function () {
    //------------------------------------------------------------------------
    //                      SHOW NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------

    var $window = $(window);
    $window.on('scroll', function () {
        var $nav = $('#navigation.fixed-nav');
        var height = $nav.outerHeight();
        var scrollTop = $window.scrollTop();
        if (scrollTop > height * 2) {
            $nav.addClass('show');
        } else {
            $nav.removeClass('show');
        }

    });
});



var pAgree = '1';

jQuery('img.svg').each(function () {
    var $img = jQuery(this);
    var imgID = $img.attr('id');
    var imgClass = $img.attr('class');
    var imgURL = $img.attr('src');

    jQuery.get(imgURL, function (data) {
        // Get the SVG tag, ignore the rest
        var $svg = jQuery(data).find('svg');

        // Add replaced image's ID to the new SVG
        if (typeof imgID !== 'undefined') {
            $svg = $svg.attr('id', imgID);
        }
        // Add replaced image's classes to the new SVG
        if (typeof imgClass !== 'undefined') {
            $svg = $svg.attr('class', imgClass + ' replaced-svg');
        }

        // Remove any invalid XML tags as per http://validator.w3.org
        $svg = $svg.removeAttr('xmlns:a');

        // Check if the viewport is set, if the viewport is not set the SVG wont't scale.
        if (!$svg.attr('viewBox') && $svg.attr('height') && $svg.attr('width')) {
            $svg.attr('viewBox', '0 0 ' + $svg.attr('height') + ' ' + $svg.attr('width'))
        }

        // Replace image with new SVG
        $img.replaceWith($svg);

    }, 'xml');

});
