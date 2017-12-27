
(function ($) {
    "use strict";
    
    
    var wWidth = $(window).width();
/*
function mobileMenu() {
    var wWidth = $(window).width();
    $('.navigation-right-area nav > ul > li').children('ul').addClass('dropDownHere');
    var menulabel2 = $('.dropDownHere li').children('ul').addClass('label2');
    var mobileMenu = $('.navigation-right-area nav > ul > li');
    mobileMenu.on('click', function () {
        $(this).children('.dropDownHere').slideToggle(800);
        $(this).find(label2).slideUp();
        mobileMenu.not($(this)).removeClass('active');
        $(this).toggleClass('active');
        $(this).siblings('li').children('.dropDownHere').slideUp();
    });
    if (wWidth < 768) {
        $('.navigation-right-area').slideUp();
    }
    $('.mobile_menu').on('click', function () {
        if (wWidth < 768) {
            $('.navigation-right-area').slideToggle();
        }
    });
    $('.main_menu').find('.dropDownHere').parents('li').addClass('rest');
}
//Initialize mobile Menu
mobileMenu()
$(window).on('resize', function () {
    mobileMenu()
});*/

    
    
    $('.myMenu').slimmenu(
{
    resizeWidth: '767',
    collapserTitle: 'Main Menu',
    animSpeed:'medium',
    indentChildren: true,
    expandIcon: '<i class="icofont icofont-thin-down"></i>',
    collapseIcon: '<i class="icofont icofont-thin-up"></i>',
    childrenIndenter: '<i class="icofont icofont-thin-down"></i>'
});
    
//Main Slider
var wHight = $(window).height(),
    acHeight = (wHight - 159);
var mainSlider = $('.main-slider');
if (mainSlider.length) {
    mainSlider.camera({
        height: acHeight + 'px',
        loader: false,
        hover: false,
        navigationHover: false,
        navigation: true,
        autoPlay: false,
        time: 4000,
        fx: 'scrollBottom',
        playPause: false,
        pagination: false,
        thumbnails: false
    });
}
var slide2Height = (wHight - 180);
var mainSlider2 = $('.main-slider2');
if (mainSlider2.length) {
    mainSlider2.camera({
        height: slide2Height + 'px',
        loader: false,
        hover: false,
        navigationHover: false,
        navigation: true,
        autoPlay: false,
        time: 4000,
        playPause: false,
        pagination: false,
        thumbnails: false
    });
}

//venobox
$('.venobox').venobox();

//Google map
var googleMapSelector = $('#google_map');
var markers = [
            ['Afghanistan', 36.779030, 69.949081]
            , ['Egypt', 30.028706, 31.249592]
            , ['Thailand', 13.736717, 100.523186]
            , ['Bangladesh', 23.728783, 90.393791]
        ];
var myCenter = new google.maps.LatLng(32.294445, 72.349724);

function initialize() {
    var mapProp = {
        center: myCenter,
        zoom: 4,
        scrollwheel: false,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
        styles: [{
            "featureType": "water",
            "elementType": "geometry",
            "stylers": [{
                "color": "#edf0f5"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "landscape",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 17
            }]
        }, {
            "featureType": "road.highway",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 29
            }, {
                "weight": 0.2
            }]
        }, {
            "featureType": "road.arterial",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 18
            }]
        }, {
            "featureType": "road.local",
            "elementType": "geometry",
            "stylers": [{
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "featureType": "poi",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f5f5f5"
            }, {
                "lightness": 21
            }]
        }, {
            "featureType": "poi.park",
            "elementType": "geometry",
            "stylers": [{
                "color": "#dedede"
            }, {
                "lightness": 21
            }]
        }, {
            "elementType": "labels.text.stroke",
            "stylers": [{
                "visibility": "on"
            }, {
                "color": "#ffffff"
            }, {
                "lightness": 16
            }]
        }, {
            "elementType": "labels.text.fill",
            "stylers": [{
                "saturation": 36
            }, {
                "color": "#333333"
            }, {
                "lightness": 40
            }]
        }, {
            "elementType": "labels.icon",
            "stylers": [{
                "visibility": "off"
            }]
        }, {
            "featureType": "transit",
            "elementType": "geometry",
            "stylers": [{
                "color": "#f2f2f2"
            }, {
                "lightness": 19
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.fill",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 20
            }]
        }, {
            "featureType": "administrative",
            "elementType": "geometry.stroke",
            "stylers": [{
                "color": "#fefefe"
            }, {
                "lightness": 17
            }, {
                "weight": 1.2
            }]
        }]
    };
    var map = new google.maps.Map(document.getElementById("google_map"), mapProp);
    for (var i = 0; i < markers.length; i++) {
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(markers[i][1], markers[i][2]),
            map: map,
            icon: 'img/icon/map-marker' + i + '.png'
        });
    }
    var infowindow = new google.maps.InfoWindow({
        content: "united-states"
    });
}
if (googleMapSelector.length) {
    google.maps.event.addDomListener(window, 'load', initialize);
}

//Features Slider
$('.key-features-slider2').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: false,
    autoplaySpeed: 2000,
    nav: true,
    fluidSpeed: 1000,
    navSpeed: 2000,
    navText: ["<", ">"],
    dots: false,
    responsive: {
        0: {
            items: 1,
            dots: false,
        },
        480: {
            items: 1
        },
        768: {
            items: 3
        },
        1000: {
            items: 3
        }
    }
});
//Parters slider
$('.partners_slider').owlCarousel({
    loop: true,
    margin: 30,
    autoplay: true,
    autoplaySpeed: 1000,
    nav: false,
    fluidSpeed: 1000,
    dots: false,
    responsive: {
        0: {
            items: 1
        },
        480: {
            items: 2
        },
        768: {
            items: 4
        },
        1000: {
            items: 6
        }
    }
});

//Case studies slider
$('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.project-image-list'
});

//Project Slider
$('.project-image-list').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    vertical: true,
    asNavFor: '.slider-for',
    dots: false,
    arrows: true,
    centerMode: true,
    focusOnSelect: true,
    responsive: [{
        breakpoint: 767,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1
        }
        }]
});

//You tube video player
$(".video_btn").on("click", function () {
    videoControl("playVideo");
    $(".bg_holder").hide();
    $('.video_container .overlay').hide();
    $(this).hide();
});

function videoControl(action) {
    var $playerWindow = $('.frame_video')[0].contentWindow;
    $playerWindow.postMessage('{"event":"command","func":"' + action + '","args":""}', '*');
}
//Toolbar dynamic info
$('.select-area > select').change(function () {
    var selectValue = $(this).val();
    switch (selectValue) {
        case '1':
            $('.toolbar-left > ul.two').hide();
            $('.toolbar-left > ul.three').hide();
            $('.toolbar-left > ul.one').show();
            break;
        case '2':
            $('.toolbar-left > ul.one').hide();
            $('.toolbar-left > ul.three').hide();
            $('.toolbar-left > ul.two').show();
            break;
        case '3':
            $('.toolbar-left > ul.one').hide();
            $('.toolbar-left > ul.three').show();
            $('.toolbar-left > ul.two').hide();
            break;
    }
});
$(window).on('scroll', function () {
    if ($(this).scrollTop() > 700) {
        $('.go_top').removeClass('no__visibility');
    } else {
        $('.go_top').addClass('no__visibility');
    }
});

//Scroll Top
$('.go_top').on('click', function (event) {
    event.preventDefault();
    $('html, body').animate({
        scrollTop: 0
    }, 1500);
});

//HTMl5 Select Area
$('.select-area').on('click', function () {
    $('.sSelect').toggleClass('down  up');
});
    
})(jQuery);