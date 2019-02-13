(function ($) {
    "use strict";
    jQuery(document).ready(function ($) {

        // Carousal
        $('.carousel').carousel();
        //        For lightcase
        $(".hub").on("click", function () {
            window.open('https://drive.google.com/drive/u/1/folders/1XdDTNpMNWoTKB5jBo6iaI3yW0ZIr2mvu', 'Portfolio', 'menubar=no, location=no, toolbar=no, scrollbars=yes, width=500, height=500');
            return false;
        });
        $('a[data-rel^=lightcase]').lightcase();


    });
    jQuery(window).on('load', function () {});

}(jQuery));
