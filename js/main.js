(function($) {

    Drupal.behaviors.SiteHeaderMenuToggle = {
        attach: function(context, settings) {
            //$('.site-navigation').hide();
            $('.menu-toggle button', context).click(function(event) {
                event.preventDefault();
                $('.site-navigation').slideToggle(320);
            });
        }
    };
    Drupal.behaviors.smoothScroll = {
        attach: function(context, settings) {
            $(".scroll-to").click(function(event) {
                event.preventDefault();
                $([document.documentElement, document.body]).animate({
                    scrollTop: $($(this).attr('href')).offset().top - 16
                }, 720);
            });
        }
    };
    Drupal.behaviors.scrollToError = {
        attach: function(context, settings) {
            // If page displays error messages, scroll to the first one
            if (typeof $(".error") === 'defined') {
                $('html, body').animate({
                    scrollTop: $(".error").offset().top
                }, 100);
            }
        }
    };

})(jQuery);
