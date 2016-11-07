<address>
  <div class="container">
    <div class="row">
      <small>©2016 Programa Liderazgo Médico UC-Christus</small>
    </div>
  </div>
</address>

</body>
<?php wp_footer()?>

<?php 
if( is_user_logged_in() ){
?>
      <div class="modal fade pt-user-modal" id="pt-user-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" data-active-tab="">
        <div class="modal-content">
          <div class="modal-body">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <?php

              if( get_option('users_can_register') ){ ?>

                <!-- Register form -->
                <div class="pt-register">
               
                  <h3><?php printf( __('Join %s', 'ptheme'), get_bloginfo('name') ); ?></h3>
                  <hr>

                  <form id="pt_registration_form" action="<?php echo home_url( '/' ); ?>" method="POST">

                    <div class="form-field">
                      <label><?php _e('Username', 'ptheme'); ?></label>
                      <input class="form-control input-lg required" name="pt_user_login" type="text"/>
                    </div>
                    <div class="form-field">
                      <label for="pt_user_email"><?php _e('Email', 'ptheme'); ?></label>
                      <input class="form-control input-lg required" name="pt_user_email" id="pt_user_email" type="email"/>
                    </div>

                    <div class="form-field">
                      <input type="hidden" name="action" value="pt_register_member"/>
                      <button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Sign up', 'ptheme'); ?></button>
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'register-security' ); ?>
                  </form>
                  <div class="pt-errors"></div>
                </div>

                <!-- Login form -->
                <div class="pt-login">
               
                  <h3><?php printf( __('Login to %s', 'ptheme'), get_bloginfo('name') ); ?></h3>
                  <hr>
               
                  <form id="pt_login_form" action="<?php echo home_url( '/' ); ?>" method="post">

                    <div class="form-field">
                      <label><?php _e('Username', 'ptheme') ?></label>
                      <input class="form-control input-lg required" name="pt_user_login" type="text"/>
                    </div>
                    <div class="form-field">
                      <label for="pt_user_pass"><?php _e('Password', 'ptheme')?></label>
                      <input class="form-control input-lg required" name="pt_user_pass" id="pt_user_pass" type="password"/>
                    </div>
                    <div class="form-field">
                      <input type="hidden" name="action" value="pt_login_member"/>
                      <button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Login', 'ptheme'); ?></button> <a class="alignright" href="#pt-reset-password"><?php _e('Lost Password?', 'ptheme') ?></a>
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'login-security' ); ?>
                  </form>
                  <div class="pt-errors"></div>
                </div>

                <!-- Lost Password form -->
                <div class="pt-reset-password">
               
                  <h3><?php _e('Reset Password', 'ptheme'); ?></h3>
                      <p>Enter the username or e-mail you used in your profile. A password reset link will be sent to you by email.</p>
                  <hr>
               
                  <form id="pt_reset_password_form" action="<?php echo home_url( '/' ); ?>" method="post">
                    <div class="form-field">
                      <label for="pt_user_or_email"><?php _e('Username or E-mail', 'ptheme') ?></label>
                      <input class="form-control input-lg required" name="pt_user_or_email" id="pt_user_or_email" type="text"/>
                    </div>
                    <div class="form-field">
                      <input type="hidden" name="action" value="pt_reset_password"/>
                      <button class="btn btn-theme btn-lg" data-loading-text="<?php _e('Loading...', 'ptheme') ?>" type="submit"><?php _e('Get new password', 'ptheme'); ?></button>
                    </div>
                    <?php wp_nonce_field( 'ajax-login-nonce', 'password-security' ); ?>
                  </form>
                  <div class="pt-errors"></div>
                </div>

                <div class="pt-loading">
                  <p><i class="fa fa-refresh fa-spin"></i><br><?php _e('Loading...', 'ptheme') ?></p>
                </div><?php

              } else {
                echo '<h3>'.__('Login access is disabled', 'ptheme').'</h3>';
              } ?>
          </div>
          <div class="modal-footer">
              <span class="pt-register-footer"><?php _e('Don\'t have an account?', 'ptheme'); ?> <a href="#pt-register"><?php _e('Sign Up', 'ptheme'); ?></a></span>
              <span class="pt-login-footer"><?php _e('Already have an account?', 'ptheme'); ?> <a href="#pt-login"><?php _e('Login', 'ptheme'); ?></a></span>
          </div>        
        </div>
      </div>
    </div>

} <?php {}?>

<script>
  jQuery(function () {
    $('[data-toggle="tooltip"]').tooltip({delay: { "show": 350, "hide": 100 }})
  })
</script>
</html>