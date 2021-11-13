(function ($) {
    'use strict';

    var meWindow = $(window);

    // ================
    // :: 1.0 Preloader
    // ================

    meWindow.on('load', function () {
        $('#preloader').fadeOut('1000', function () {
            $(this).remove();
        });


        // =============
        // :: 2.0 Navbar
        // =============

        var sideNavWrapper = $("#sidenavWrapper");
        var blackOverlay = $(".sidenav-black-overlay");

        $("#affanNavbarToggler").on("click", function () {
            sideNavWrapper.addClass("nav-active");
            blackOverlay.addClass("active");
        });

        $("#goBack").on("click", function () {
            sideNavWrapper.removeClass("nav-active");
            blackOverlay.removeClass("active");
        });

        blackOverlay.on("click", function () {
            $(this).removeClass("active");
            sideNavWrapper.removeClass("nav-active");
        });
    });

})(jQuery);