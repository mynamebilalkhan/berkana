(function (window, jQuery) {
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
