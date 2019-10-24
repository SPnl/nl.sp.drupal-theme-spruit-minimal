(function($) {

    Drupal.behaviors.trimEmailField = {
        // Remove spaces in email on change
        // The jquery clientside validation plugin doesn't allow trailing spaces for email input and responds with 'invalid email'.
        // The user can be unaware of the space and unable to continue the form
        attach: function(context, settings) {
            $("input[type=email]").change(function(e) {
                emailTrimmed = $(this).val().replace(/ /g, '');
                $(this).val(emailTrimmed);
            });
        }
    };

})(jQuery);