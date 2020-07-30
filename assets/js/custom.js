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
});

$(document).ready(function () {
    $(".navbar-toggler").click(function () {
        $(".navbar-toggler").toggleClass("collapsed");
        $(".main-menu-collapse").toggleClass("show");
    });
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 250) {
    //         $('.header').css("height", "150px");
    //     } else {
    //         $('.header').css("height", "0");
    //     }
    // });
$("#navigation .menu").click(function (openSidebar) {
    var $body = $('body');
    var $sidebar = $('#sidebar');
    var $menu = $('#navigation .menu');
    $body.toggleClass("sidebar-opened");
    $menu.toggleClass("collapsed");
});

$(document).keypress(function(e) { 
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

// $(document).ready(function () {    
//     $('.adverts').owlCarousel({
//         loop: false,
//         margin: 0,
//         nav: false,
//         autoplay: true,
//         autoplayHoverPause: true,
//         items: 1,
//         dots: false,
//         navText: ['', ''],
//         rewind: true
//     });
// });
 
    
$('#adverts').flickity({
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    wrapAround: true,
    autoPlay: 5000,
    pauseAutoPlayOnHover: false,
    dragThreshold: 10,
    bgLazyLoad: true


});

var wooMessage = $('.woocommerce-notices-wrapper');
if (wooMessage.text() == '') {
    wooMessage.hide();
}
    
$('.woocommerce-notices-wrapper:empty').hide();
    
    // $("#download-btn").click(function () {
//     var $body = $('body');
//     var $modal = $('.modal');
//     $modal.toggleClass("hide");
//     $body.toggleClass("modal-opened");
// });

// $(".modal .close").click(function () {
//     var $body = $('body');
//     var $modal = $('.modal');
//     $modal.toggleClass("hide");
//     $body.toggleClass("modal-opened");
// });

// $(".modal-overlay").click(function () {
//     var $body = $('body');
//     var $modal = $('.modal');
//     $modal.toggleClass("hide");
//     $body.toggleClass("modal-opened");
// });

// Expand Book Description
// $(".expand-description").click(function () {
//     var $read_more = $('.expand-description span');
//     var $description = $('#book-details .details .description');
//     $description.toggleClass("show");
//     $('.expand-description span').text == 'Read More' ? 'Read Less' : 'Read More';

    
// });
    
    


// Download Modal Start
// var modal = document.querySelector(".modal");
// var trigger = document.querySelector("#download-btn");
// var close = document.querySelector(".close");
// var body = document.querySelector("body");

// function toggleModal() {
//     modal.classList.toggle("show");
//     body.classList.toggle("modal-opened");
// }

// function windowOnClick(event) {
//     if (event.target === modal) {
//         toggleModal();
//     }
// }

// trigger.addEventListener("click", toggleModal);
// close.addEventListener("click", toggleModal);
// window.addEventListener("click", windowOnClick)

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
// Download Modal End

    // $('#books').owlCarousel({
    //     loop: true,
    //     nav: true,
    //     dots: true,
    //     autoplay: true,
    //     autoplayHoverPause: true,
    //     autoplayTimeout: 8500,
    //     smartSpeed: 200,
    //     // center: true,
    //     lazyLoad: true,
    //     margin: 30,
    //     navText: ['<svg width="14" height="9" viewBox="0 0 14 9" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M0.175736 4.84264L3.99411 8.66102C4.22843 8.89533 4.60833 8.89533 4.84264 8.66102C5.07696 8.4267 5.07696 8.0468 4.84264 7.81249L2.04853 5.01838H13.6V3.81838L2.04853 3.81838L4.84264 1.02426C5.07696 0.78995 5.07696 0.410051 4.84264 0.175736C4.60833 -0.0585786 4.22843 -0.0585786 3.99411 0.175736L0.175736 3.99411C-0.0585787 4.22843 -0.0585787 4.60833 0.175736 4.84264Z" fill="white"/></svg>','<svg width="15" height="10" viewBox="0 0 15 10" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M14.0242 4.49411L10.2059 0.675736C9.97155 0.441421 9.59165 0.441421 9.35734 0.675736C9.12302 0.910051 9.12302 1.28995 9.35734 1.52426L12.1514 4.31838H0.599976V5.51838H12.1514L9.35734 8.31249C9.12302 8.5468 9.12302 8.9267 9.35734 9.16102C9.59165 9.39533 9.97155 9.39533 10.2059 9.16102L14.0242 5.34264C14.2586 5.10833 14.2586 4.72843 14.0242 4.49411Z" fill="white"/></svg>'],
    //     autoWidth:true,
    //     items: 3,
    //     responsive: {
    //         0: {
    //             items: 1
    //         },
    //         576: {
    //             items: 2
    //         },
    //         800: {
    //             items: 3
    //         }
    //     }
    // });
});

window.addEventListener('load', function () {
    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(".toogle-btn").on('click', function (e) {
        e.preventDefault();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(".toogle-btn.close").on('click', function (e) {
        e.preventDefault();
        $(this).parent().toggleClass("show");
    });

    //------------------------------------------------------------------------
    //                      MENU TAP ON MOBILE DEVICES
    //------------------------------------------------------------------------

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        $("nav.navbar").addClass("touchmenu");
        $(".sub-menu-link").on('click', function (e) {
            e.preventDefault();
            $(this).parent().toggleClass("tap");
        });
    }


    //------------------------------------------------------------------------
    //                      SHOW NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------
    
    // $(document).ready(function () {
    //     var $nav = $('#navigation');
    //     var $body = $('body');
    //     $body.css("margin-top", $nav.outerHeight());
    // });
    // var $window = $(window);
    // $window.on('scroll', function () {
    //     var $nav = $('#navigation');
    //     var $body = $('body');
    //     var height = $nav.outerHeight();
    //     var scrollTop = $window.scrollTop();
    //     if (scrollTop > height * 2 && !$nav.hasClass("dark")) {
    //         $nav.addClass('fixed');
    //     } else {
    //         $nav.removeClass('fixed');
    //     }
    // });

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
    


    //------------------------------------------------------------------------
    //                      HIDE NAVIGATION ON SCROLL DOWN
    //------------------------------------------------------------------------

    var prev = 0;
    var $window = $(window);
    $window.on('scroll', function () {
        var nav = $('nav.hide-on-scroll');
        var scrollTop = $window.scrollTop();
        nav.toggleClass('hide', scrollTop > prev);
        prev = scrollTop;
    });



    //------------------------------------------------------------------------
    //                      STICKY NAVIGATION
    //------------------------------------------------------------------------

    // Custom
    window.stickyToggle = function (sticky, stickyWrapper, scrollElement) {
        var stickyHeight = sticky.outerHeight();
        var stickyWrapperHeight = stickyWrapper.outerHeight();
        var stickyTop = stickyWrapper.offset().top - stickyHeight + stickyWrapperHeight;
        if (scrollElement.scrollTop() >= stickyTop) {
            stickyWrapper.height(stickyHeight);
            sticky.addClass("fixed-top");
        } else {
            sticky.removeClass("fixed-top");
            stickyWrapper.height('auto');
        }
    };

    // Find all data-toggle="sticky-onscroll" elements
    $('.sticky-top').each(function () {
        var sticky = $(this);
        var stickyWrapper = $('<div>').addClass('sticky-wrapper'); // insert hidden element to maintain actual top offset on page
        if (!sticky.next().hasClass('sticky-wrapper')) {
            sticky.after(stickyWrapper);
        } else {
            stickyWrapper = sticky.next();
        }

        window.stickyTB = window.stickyToggle.bind(window, sticky, stickyWrapper, $(window));
        // Scroll & resize events
        $(window).on('scroll.sticky-onscroll resize.sticky-onscroll', window.stickyTB);

        // On page load
        window.stickyToggle(sticky, stickyWrapper, $(window));
    });

    //------------------------------------------------------------------------
    //                      TOOGLE BUTTON SCRIPT
    //------------------------------------------------------------------------

    $(document).on('click', ".toogle-btn:not(.close)", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('href');
        $(href).toggleClass("show");
    });

    $(document).on('click', ".toogle-btn.close", function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        $(this).parent().removeClass("show");
        $(this).parent().trigger("close.panel");
    });

    $(document).on('click', '[data-toggle=panel]', function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();
        var href = $(this).attr('data-target');
        $(href).toggleClass("show");

        if (!$(href).hasClass("show")) $(href).trigger("close.alert");
        else $(href).trigger("open.alert");
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

