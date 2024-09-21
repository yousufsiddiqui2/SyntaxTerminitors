"use strict";

/*======== Document Ready Function =========*/
jQuery(document).ready(function () {
    //CACHE JQUERY OBJECTS
    var $window = $(window);

    // Preloader functionality
    $window.on('load', function () {
        // Fade out the preloader status
        $("#status").fadeOut();

        // Fade out the preloader after a delay
        $("#preloader").delay(350).fadeOut("slow", function () {
            // After the preloader is gone, make the body scrollable
            $("body").css({ "overflow": "visible" });
        });

        // Initialize Wow.js if it's available
        if (typeof WOW === "function") {
            new WOW().init();
        }
    });

    // Fallback in case the load event doesn't trigger
    setTimeout(function () {
        if ($("#preloader").is(':visible')) {
            $("#preloader").fadeOut("slow");
            $("body").css({ "overflow": "visible" });
        }
    }, 1000);  // Adjust this timeout as needed
});
