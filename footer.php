<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package Bootstrap Canvas WP
 * @since Bootstrap Canvas WP 1.0
 */
?>
    </div><!-- /.container -->

    <div class="blog-footer">
    
     
      
	  
      <p>
        <a href="#"><?php _e( 'Back to top', 'bootstrapcanvaswp' ); ?></a>
      </p>
    </div>

<script>
    jQuery(function () {
      jQuery('[data-toggle="popover"]').popover()
    })
    </script>

<!--<script>
    jQuery(function () {
    var dateFormat = jQuery( ".selector" ).datepicker( "option", "dateFormat" );
    jQuery( ".selector" ).datepicker( "option", "dateFormat", "mm-dd/yy" );    
    
  
    jQuery( "#datepicker" ).datepicker();
    })

</script>-->
<script>
jQuery(function () {
  jQuery('[data-toggle="tooltip"]').tooltip()
})
</script>

<script type="text/javascript">
    jQuery(document).ready(function() {
    // Generate a simple captcha
    function randomNumber(min, max) {
    return Math.floor(Math.random() * (max - min + 1) + min);
    };
    jQuery('#captchaOperation').html([randomNumber(1, 100), '+', randomNumber(1, 200), '='].join(' '));

    jQuery('#defaultForm').bootstrapValidator({
        message: 'This value is not valid',
        fields: {
        username: {
        message: 'The username is not valid',
        validators: {
        notEmpty: {
        message: 'The username is required and can\'t be empty'
        },
        stringLength: {
        min: 6,
        max: 30,
        message: 'The username must be more than 6 and less than 30 characters long'
        },
        regexp: {
        regexp: /^[a-zA-Z0-9_\.]+$/,
        message: 'The username can only consist of alphabetical, number, dot and underscore'
        },
        different: {
        field: 'password',
        message: 'The username and password can\'t be the same as each other'
        }
        }
        },
        email: {
        validators: {
        notEmpty: {
        message: 'The email address is required and can\'t be empty'
        },
        emailAddress: {
        message: 'The input is not a valid email address'
        }
        }
        },
        password: {
        validators: {
        notEmpty: {
        message: 'The password is required and can\'t be empty'
        },
        identical: {
        field: 'confirmPassword',
        message: 'The password and its confirm are not the same'
        },
        different: {
        field: 'username',
        message: 'The password can\'t be the same as username'
        }
        }
        },
        confirmPassword: {
        validators: {
        notEmpty: {
        message: 'The confirm password is required and can\'t be empty'
        },
        identical: {
        field: 'password',
        message: 'The password and its confirm are not the same'
        },
        different: {
        field: 'username',
        message: 'The password can\'t be the same as username'
        }
        }
        },
        captcha: {
        validators: {
        callback: {
        message: 'Wrong answer',
        callback: function(value, validator) {
        var items = jQuery('#captchaOperation').html().split(' '), sum = parseInt(items[0]) + parseInt(items[2]);
        return value == sum;
    }
    }
    }
    }
    }
    });
    });
</script>
    <?php 
	  /*
	   * Always have wp_footer() just before the closing </body>
	   * tag of your theme, or you will break many plugins, which
	   * generally use this hook to reference JavaScript files.
	   */
	  wp_footer(); 
	?>


  </body>
</html>