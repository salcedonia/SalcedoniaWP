jQuery(document).ready(function(){
	    
    // Click event to scroll to top button
    jQuery('.back-to-top-link').click(function(){
        jQuery('html, body').animate({scrollTop : 0},800);
        return false;
    });
 
    // Validation for contact form
    jQuery('#contactForm').validate({
        rules: {
            contactName: {
                minlength: 2,
                required: true
            },
            email: {
                required: true,
                email: true
            },
            comments: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-success has-feedback').addClass('has-error has-feedback');
        },
        unhighlight: function(element) {
            jQuery(element).closest('.form-group').removeClass('has-error has-feedback').addClass('has-success has-feedback');
        }
    });
    // Validation for comments' form
    jQuery('#commentform').validate({
        rules: {
            comment: {
                minlength: 2,
                required: true
            }
        },
        highlight: function(element) {
            jQuery(element).closest('.comment-form-comment').removeClass('has-success has-feedback').addClass('has-error has-feedback');
        },
        unhighlight: function(element) {
            jQuery(element).closest('.comment-form-comment').removeClass('has-error has-feedback').addClass('has-success has-feedback');
        }
    });
    // Fancybox
    jQuery(".various").fancybox({
        maxWidth    : 800,
        maxHeight   : 600,
        fitToView   : false,
        width       : '70%',
        height      : '70%',
        autoSize    : false,
        closeClick  : false,
        openEffect  : 'none',
        closeEffect : 'none'
    });

});

/* Create HTML5 element for IE */
document.createElement("section");