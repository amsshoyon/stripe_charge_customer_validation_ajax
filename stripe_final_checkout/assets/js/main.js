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
// Select all links with hashes
$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });

    });
    jQuery(window).on('load', function () {});

}(jQuery));
