<?php include "top.php"?>
<!-- Register Area-->
<div class="register-area d-flex">
  <div class="register-content-wrapper d-flex align-items-center">  
    <div class="register-content">
      <!-- Logo--><a class="logo" href="<?php _e( get_url() )?>"><img src="<?php _e( get_option('website_black', get_url("inc/themes/backend/default/assets/img/logo-black.png")) )?>" alt=""></a>
      <h5><?php _e("Welcome back.")?></h5>
      <!--<p><?php _e("Don't have an account?")?><a href="<?php _e( get_url("signup") )?>"><?php _e("Sign up")?></a></p> -->
      <!-- Form-->
      <div class="register-form">
        <form action="<?php _e( get_module_url("ajax_login", $this) )?>" class="actionLogin" method="post" data-redirect="<?php _e( post('redirect')?post('redirect'):get_url('dashboard') )?>">
          <div class="form-group"><i class="lni-user"></i>
            <input class="form-control" type="text" name="email" placeholder="<?php _e("Username")?>">
          </div>
          <div class="form-group"><i class="lni-lock"></i>
            <input class="form-control" type="password" name="password" placeholder="<?php _e("Password")?>">
          </div>

          <?php if(get_option('google_recaptcha_status', 0)){?>
          <div class="g-recaptcha m-b-15" data-sitekey="<?=get_option('google_recaptcha_site_key', '')?>"></div>
          <?php }?>

          <div class="custom-control custom-checkbox mb-3 mr-sm-2">
            <input class="custom-control-input" id="rememberMe" name="remember" type="checkbox">
            <label class="custom-control-label" for="rememberMe"><?php _e("Keep me logged in")?></label>
          </div>

          <span class="show-message"></span>
          <button class="btn wimax-btn w-100" type="submit"><?php _e("Log In")?></button><a class="forgot-password" href="<?php _e( get_url("forgot_password") )?>"><?php _e("Forgot Password?")?></a>
        </form>
      </div>
     
    </div>
  </div>
  <!-- Register Side Content-->
  <div class="register-side-content bg-img" style="background-image: url(<?php _e( get_theme_frontend_url('assets/img/bg-img/hero-7.jpg'))?>);"></div>
</div>

<?php include "bottom.php"?>