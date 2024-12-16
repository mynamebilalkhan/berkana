(function (window, jQuery) {
  "use strict";

  jQuery(function ($) {
    var $body = $("body");
    var $header = $("body header");
    var $menu_items = $header.find(".menu-item");

    if ($header.length > 0) {
      // Header mobile button
      $header
        .find(".mobile-nav-button")
        .on("click.mobile-nav-button", function () {
          $(this).closest("header").toggleClass("open");
          $body.toggleClass("mobile-nav-opened");
        });
      $menu_items.on("click", function (ev) {
        $header.removeClass("open");
        $body.removeClass("mobile-nav-opened");
      });
    }

    window.onscroll = function () {
      scrollFunction();
    };
    scrollFunction();

    function scrollFunction() {
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        $("header").removeClass("transparent");
      } else {
        $("header").addClass("transparent");
      }
    }
  });
})(window, window.jQuery);
