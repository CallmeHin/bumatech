/* BEGIN s-slide-5 */
/* Thêm thư viện js/vendor/nivo-slider/ */
$(document).ready(function() {
    $('.s-slide-5 .nivoSlider').nivoSlider({ effect: 'random' });
});
/* END s-slide-5 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-5 .b-sslide-default .slick-slider').slick({
        infinite: true,
        centerMode: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    if ($('.s-home-5')) {
        $('.s-tab-2:nth-child(even)').css('background', '#f6f6f6');
    } else {
        $('.s-tab-2:nth-child(odd)').css('background', '#f6f6f6');
    }

    $(window).scroll(function() {
        var scrollDistance = $(window).scrollTop();
        var hHeght = $('.s-header-1').outerHeight();
        // Assign active class to nav links while scolling
        $('.s-tab-2').each(function(i) {
            if ($(this).position().top <= scrollDistance + 2 * hHeght) {
                $('.s-navigate .item a').removeClass('is-active');
                $('.s-navigate .item a').eq(i).addClass('is-active');
            }
        });
    }).scroll();
});
/* BEGIN s-home-32 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-32 .slick-slider').slick({
        slidesToShow: 6,
        slidesToScroll: 1,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 4 },
        },{
            breakpoint: 768,
            settings: { slidesToShow: 3, slidesToScroll: 1 }
        },{
            breakpoint: 360,
            settings: { slidesToShow: 2, slidesToScroll: 1 }
        }]
    });
});
/* END s-home-32 */
/* BEGIN s-home-2 */
/* Thêm thư viện js/vendor/slick/ */
$(document).ready(function() {
    $('.s-home-2 .slick-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: false,
        infinite: false,
        responsive: [{
            breakpoint: 992,
            settings: { slidesToShow: 2 }
        },{
            breakpoint: 400,
            settings: { slidesToShow: 1 }
        }]
    });
});
/* END s-home-2 */