

(function ($) {
    'use strict';
    var scrollHeader = function() {
        var windows = $(window);
        var screenSize = windows.width();
        var sticky = $('#header');
        var headerMidle = $('.header-middle');
        var headerTop = $('.header-top');


        windows.on('scroll', function () {
            var scroll = windows.scrollTop();


            if (screenSize >= 991) {
                if (scroll < 300) {
                    sticky.removeClass('is-sticky');

                    headerMidle.removeClass('d-none');
                    headerMidle.addClass('d-block');
                    headerTop.removeClass('d-none');
                    headerTop.addClass('d-block');
                } else {
                    sticky.addClass('is-sticky');
                    headerMidle.addClass('d-none');
                    headerMidle.removeClass('d-block');
                    headerTop.addClass('d-none');
                    headerTop.removeClass('d-block');
                }
            }


            //code for scroll top

            if (scroll >= 400) {
                $('.scroll-top').fadeIn();
            } else {
                $('.scroll-top').fadeOut();
            }

        });
    }
    scrollHeader();
    var isMobile = {
        Android: function() {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function() {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function() {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function() {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function() {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function() {
            return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
        }
    }; // is Mobile


    var responsiveMenu = function() {
        var menuType = 'desktop';

        $(window).on('load resize', function() {
            var currMenuType = 'desktop';

            if ( matchMedia( 'only screen and (max-width: 991px)' ).matches ) {
                currMenuType = 'mobile';
            }

            if ( currMenuType !== menuType ) {
                menuType = currMenuType;

                if ( currMenuType === 'mobile' ) {
                    var $mobileMenu = $('#mainnav').attr('id', 'mainnav-mobi').hide();
                    var hasChildMenu = $('#mainnav-mobi').find('li:has(ul)');
                    var hasChildMenuMega = $('#mainnav-mobi').find('li:has(div.submenu)');

                    $('#header').after($mobileMenu);
                    hasChildMenu.children('ul').hide();
                    hasChildMenu.children('a').after('<span class="btn-submenu"></span>');
                    hasChildMenuMega.children('div.submenu').hide();
                    $('ul.submenu-child').hide();
                    hasChildMenuMega.find('h3').append('<span class="btn-submenu-child"></span>');
                    $('.btn-menu').removeClass('active');

                } else {
                    var $desktopMenu = $('#mainnav-mobi').attr('id', 'mainnav').removeAttr('style');
                    $desktopMenu.find('.submenu').removeAttr('style');
                    $('#header').find('.nav-wrap').append($desktopMenu);
                    $('.btn-submenu').remove();
                    $('ul.submenu-child').show();
                    $('h3').children('span').removeClass('btn-submenu-child');
                }
            }
        });

        $('.btn-menu').on('click', function() {
            $('#mainnav-mobi').slideToggle(300);
            $(this).toggleClass('active');
            return false;
        });

        $(document).on('click', '#mainnav-mobi li.has-mega-menu .row .btn-submenu-child', function(e) {
            $(this).toggleClass('active').parent('h3.cat-title').next('.submenu-child').slideToggle(400);
            e.stopImmediatePropagation();
            return false;
        });

        $(document).on('click', '#mainnav-mobi li .btn-submenu', function(e) {
            $(this).toggleClass('active').next('.submenu').slideToggle(400);
            e.stopImmediatePropagation();
            return false;
        });

    }; // Responsive Menu


    responsiveMenu();





    /* Herobanner Slider */
    $('.herobanner').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: true,
        easing: 'ease-in-out',
        dots: true,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
    });

    $("#btnLogin").click(function(){
        $("#loginModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });
    $("#btnPassword").click(function(){
        $("#passwordModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });
    $("#btnAddress").click(function(){
        $("#addressModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });
    $("#btnWithdrawPayment").click(function(){
        $("#withdrawModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });
    $("#btnBank").click(function(){
        $("#bankModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });
    $(".btnOrderDetail").click(function(){
        $("#orderModal").modal(
            {backdrop: 'static', keyboard: false}
        );
    });



    /* Deal Of The Day Slider 2 */
    $('.flash-sale-slider').slick({
        slidesToShow: 4,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });




    /* Trending Product Slider 2 */
    $('.trending-products-slider').slick({
        slidesToShow: 3,
        autoplay: false,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    /* Our Product Slider */
    $('.our-products-slider').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });



    /* New Best Featured Slider */
    $('.new-best-featured-slider').slick({
        slidesToShow: 5,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });





    /* Recommended Product Slider */
    $('.recommended-products-slider').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 768,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /* Recommended Product Slider */
    $('.recommended-products-slider-2').slick({
        slidesToShow: 1,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    /* Featured Product Slider */
    $('.featured-product-slider').slick({
        slidesToShow: 2,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 576,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
    });


    /* Brand Logos Slider */
    $('.media-islami-slider').slick({
        slidesToShow: 6,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 1200,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    /* Latest Blog Slider */
    $('.blogitem-slider').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });

    /* Product Details Slider Image */
    $('.pdetails-sliderimages').slick({
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 8000,
        speed: 1000,
        adaptiveHeight: true,
        fade: false,
        easing: 'ease-in-out',
        dots: false,
        arrows: true,
        prevArrow: '<span class="slider-navigation-arrow slider-navigation-prev"><i class="ion ion-ios-arrow-back"></i></span>',
        nextArrow: '<span class="slider-navigation-arrow slider-navigation-next"><i class="ion ion-ios-arrow-forward"></i></span>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });


    /* Product Details Image Slider */
    $('.pdetails-largeimages').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: '.pdetails-thumbs'
    });

    $('.pdetails-thumbs:not(.pdetails-thumbs-vertical)').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: '.pdetails-largeimages',
        arrows: false,
        dots: false,
        focusOnSelect: true,
        vertical: false
    });




    /* Countdown Activation */
    $('.countdown').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime(
                '<div class="countdown-pack countdown-day"><h3 class="countdown-count">%-D</h3><h6>Days</h6></div>:<div class="countdown-pack countdown-hour"><h3 class="countdown-count">%-H</h3><h6>Hour</h6></div>:<div class="countdown-pack countdown-minutes"><h3 class="countdown-count">%M</h3><h6>Min</h6></div>:<div class="countdown-pack countdown-seconds"><h3 class="countdown-count">%S</h3><h6>Sec</h6></div>'));
        });
    });



    /* Recommended Product Exerpt */
    function recommendedExerpt() {
        var max = 75;
        var tot, str;
        $('.recommended-products-slider .product-4 .product-title').each(function () {
            str = String($(this).html());
            tot = str.length;
            str = (tot <= max) ? str : str.substring(0, (max + 1)) + "...";
            $(this).html(str);
        });
    }
    recommendedExerpt();


    /* Product Quantity */
    function productQuantity() {
        $('.quantity-select').append('<div class="dec qtybutton">-</i></div><div class="inc qtybutton">+</div>');
        $('.qtybutton').on('click', function () {
            var $button = $(this);
            var oldValue = $button.parent().find('input').val();
            var newVal;
            if ($button.text() == "+") {
                newVal = parseFloat(oldValue) + 1;
            } else {
                if (oldValue > 1) {
                    newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 1;
                }
            }
            $button.parent().find('input').val(newVal);
        });
    }
    productQuantity();


    /* Product Detals Color & Size */
    $('.pdetails-color ul li, .pdetails-size ul li').on('click', function () {
        $(this).addClass('checked').siblings().removeClass('checked');
    });

    /* Rating Hover Action */
    $('.rattingbox.hover-action span').on('mouseenter', function () {
        $('.rattingbox.hover-action span').addClass('active');
        $(this).nextAll('span').removeClass('active');
    });


    /* Product Details Zoom */
    $('.pdetails-imagezoom').lightGallery({
        selector: '.pdetails-singleimage'
    });


    /* Range Slider Active */
    $('.range-slider').nstSlider({
        'left_grip_selector': '.range-slider-leftgrip',
        'right_grip_selector': '.range-slider-rightgrip',
        'value_bar_selector': '.bar',
        'value_changed_callback': function (cause, leftValue, rightValue) {
            $(this).parent().find('.range-slider-leftlabel').text(leftValue);
            $(this).parent().find('.range-slider-rightlabel').text(rightValue);
        }
    });


    /* Select Sortby */
    $('.select-sortby-current').on('click', function () {
        $('.select-sortby-list').slideToggle();
    });

    /* Product Viewmode */
    $('.shop-filters-viewmode').on('click', 'button', function () {
        $(this).addClass('is-active').siblings().removeClass('is-active');

        var dataView = $(this).data('view');

        if (dataView == 'list') {
            $('.shop-page-products').addClass('list-view-active');
        } else {
            $('.shop-page-products').removeClass('list-view-active');
        }
    });






    /* Progress Bar Effect */
    $(window).on('scroll', function () {

        function winScrollPosition() {
            var scrollPos = $(window).scrollTop(),
                winHeight = $(window).height();
            var scrollPosition = Math.round(scrollPos + (winHeight / 1.2));
            return scrollPosition;
        }


        var trigger = $('.progress-bar');
        if (trigger.length) {
            var triggerPos = Math.round(trigger.offset().top);
            if (triggerPos < winScrollPosition()) {
                trigger.each(function () {
                    $(this).addClass('fill');
                });
            }
        }

    });





    /* Scroll Up Active */
    $.scrollUp({
        scrollText: '<i class="ion ion-ios-arrow-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'slide'
    });


})(jQuery);