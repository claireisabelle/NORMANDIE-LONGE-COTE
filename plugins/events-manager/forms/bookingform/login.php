<?php
/* 
 * This file generates the default login form within the booking form (if enabled in options).
 */
?>
<div class="em-booking-login">
	<form class="em-booking-login-form" action="<?php echo site_url('wp-login.php', 'login_post'); ?>" method="post">
	<p><strong><?php esc_html_e('Connectez-vous si vous avez déjà un compte sur le site','events-manager'); ?></strong></p>
    <p>
		<label><?php esc_html_e( 'Nom d\'Utilisateur :','events-manager') ?></label><br />
		<input type="text" name="log" class="input" value="" />
	</p>
	<p>
		<label><?php esc_html_e( 'Mot de passe :','events-manager') ?></label><br />
		<input type="password" name="pwd" class="input" value="" />
    </p>
    <?php do_action('login_form'); ?>
	<input type="submit" name="wp-submit" id="em_wp-submit" value="<?php esc_html_e('Log In', 'events-manager'); ?>" tabindex="100" /><br /><br />
	<input name="rememberme" type="checkbox" id="em_rememberme" value="forever" /> <label><?php esc_html_e( 'Remember Me','events-manager') ?></label>
	<input type="hidden" name="redirect_to" value="<?php echo site_url('evenements'); ?>" />
	<br />
	<?php
	//Signup Links
	if ( get_option('users_can_register') ) {
		echo "<br />";  
		if ( function_exists('bp_get_signup_page') ) { //Buddypress
			$register_link = bp_get_signup_page();
		}elseif ( file_exists( ABSPATH."/wp-signup.php" ) ) { //MU + WP3
			$register_link = site_url('wp-signup.php', 'login');
		} else {
			$register_link = site_url('wp-login.php?action=register', 'login');
		}
		?>
		<a href="<?php echo $register_link ?>"><?php esc_html_e('Sign Up','events-manager') ?></a>&nbsp;&nbsp;|&nbsp;&nbsp; 
		<?php
	}
	?>	                    
	<a href="<?php echo site_url('wp-login.php?action=lostpassword', 'login') ?>" title="<?php esc_html_e('Password Lost and Found', 'events-manager') ?>"><?php esc_html_e('Lost your password?', 'events-manager') ?></a>                        
  </form>
</div>