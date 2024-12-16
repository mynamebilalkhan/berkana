(function (window, jQuery) {
    "use strict";

    jQuery(function ($) {

       

    });
})(window, window.jQuery);
;const faqItemWrappers = document.querySelectorAll(".faq-item__wrapper");

faqItemWrappers.forEach((wrapper) => {
    wrapper.addEventListener("click", () => {
        // Add active class to the parent element
        const parentWidget = wrapper.closest(".faq-dropdown-widget");
        parentWidget.classList.toggle("active");

        // Toggle the active class on the clicked wrapper
        wrapper.classList.toggle("active");

        const panel = wrapper.nextElementSibling;
        panel.style.maxHeight = panel.style.maxHeight
            ? null
            : `${panel.scrollHeight}px`;
    });
});
;(function (window, jQuery) {
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
;(function (window, jQuery) {
  "use strict";

  jQuery(function ($) {


  });
})(window, window.jQuery);
;(function (window, jQuery) {
    "use strict";

    jQuery(function ($) {
        $('.td-quantity-button').on('click', function () {
            var $this = $(this);
            var $input = $this.parent().find('input');
            var $quantity = $input.val();
            var $new_quantity = 0;
            if ($this.hasClass('plus')) {
                var $new_quantity = parseFloat($quantity) + 1;
            } else {
                if ($quantity > 0) {
                    var $new_quantity = parseFloat($quantity) - 1;
                }
            }
            $input.val($new_quantity);
        });

    });
})(window, window.jQuery);
