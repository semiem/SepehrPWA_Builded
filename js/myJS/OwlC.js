(function ($) {
    'use strict';

    var meWindow = $(window);


    // =======================
    // :: 7.0 Owl Carousel One
    // =======================

    if ($.fn.owlCarousel) {
        var owlCarouselOne = $('.owl-carousel-one');
        owlCarouselOne.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            center: true,
            margin: 0,
            nav: true,
            navText: [('<i class="fa fa-angle-left"></i>'), ('<i class="fa fa-angle-right"></i>')]
        })

        owlCarouselOne.on('translate.owl.carousel', function () {
            var layer = $("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        owlCarouselOne.on('translated.owl.carousel', function () {
            var layer = owlCarouselOne.find('.owl-item.active').find("[data-animation]");
            layer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });
    }

    // =======================
    // :: 8.0 Owl Carousel Two
    // =======================

    if ($.fn.owlCarousel) {
        var owlCarouselTwo = $('.owl-carousel-two');
        owlCarouselTwo.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            center: true,
            margin: 30,
            nav: false,
            animateIn: 'fadeIn',
            animateOut: 'fadeOut'
        });

        var dot = $('.owl-carousel-two .owl-dot');
        dot.each(function () {
            var index = $(this).index() + 1;

            if (index < 10) {
                $(this).html('0' + index);
            } else {
                $(this).html(index);
            }
        });

        var owlDotsCount = $(".owl-carousel-two .owl-dots").children().length;
        if (owlDotsCount < 10) {
            $("#totalowlDotsCount").html('0' + owlDotsCount);
        } else {
            $("#totalowlDotsCount").html(owlDotsCount);
        }
    }

    // =========================
    // :: 9.0 Owl Carousel Three
    // =========================

    if ($.fn.owlCarousel) {
        var owlCarouselThree = $('.owl-carousel-three');
        owlCarouselThree.owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            dots: false,
            center: true,
            margin: 8,
            nav: false
        })
    }

    // ============================
    // :: 10.0 Testimonial Slides 1
    // ============================

    if ($.fn.owlCarousel) {
        var testimonial1 = $('.testimonial-slide');
        testimonial1.owlCarousel({
            items: 1,
            loop: true,
            autoplay: true,
            dots: true,
            margin: 30,
            nav: false
        })
    }

    // ============================
    // :: 11.0 Testimonial Slides 2
    // ============================

    if ($.fn.owlCarousel) {
        var testimonial2 = $('.testimonial-slide2');
        testimonial2.owlCarousel({
            items: 2,
            loop: true,
            autoplay: true,
            dots: true,
            margin: 0,
            nav: true,
            navText: [('<i class="fa fa-angle-left"></i>'), ('<i class="fa fa-angle-right"></i>')],
            center: true
        })
    }

    // ======================
    // :: 12.0 Partner Slides
    // ======================

    if ($.fn.owlCarousel) {
        var partnerSlide = $('.partner-slide');
        partnerSlide.owlCarousel({
            items: 3,
            margin: 12,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            nav: false
        })
    }

    // ======================
    // :: 13.0 Gallery Slides
    // ======================

    if ($.fn.owlCarousel) {
        var galleryCarousel = $('.image-gallery-carousel');
        galleryCarousel.owlCarousel({
            items: 3,
            margin: 8,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            nav: false
        })
    }

    // ==============================
    // :: 14.0 Product Gallery Slides
    // ==============================

    if ($.fn.owlCarousel) {
        var productGalleryCarousel = $('.product-gallery');
        productGalleryCarousel.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            dots: true,
            nav: false
        })
    }

})(jQuery);