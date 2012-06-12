<?php 
function dcr_options_page() {
	global $dcr_options;
 
	ob_start(); ?>
	<div class="wrap">
		<h2>Image URL Change for CDN</h2>
		<form method="post" action="options.php">
 			<?php settings_fields('dcr_settings_group'); ?>
			
			<h4><?php _e('Enter link to your cdn below', 'dcr_domain'); ?></h4>
				<p>
				<label class="description" for="dcr_settings[cdn_link]"><?php _e('Provide Link to your CDN', 'dcr_domain'); ?></label> 
				<input id="dcr_settings[cdn_link]" type="text" name="dcr_settings[cdn_link]" value="<?php echo $dcr_options['cdn_link']; ?>" /><small>e.g : http://cdn.designzzz.com/</small>
				<p><b>Note: </b>Don't forget to add the training Slash in the end of the url, e.g: http://cdn.designzzz.com<b>/</b></p>
			<p>
			<p class="submit">
				<input type="submit" class="button-primary" value="<?php _e('Save Options', 'dcr_domain'); ?>" />
			</p>
 <p>On Disabling the plugin or clearing the text field above you can get the original Image urls working again.</p>
		</form>
 <p class="description">This Plugins is powered and created by <a href="http://wordpress.designzzz.com/" target="_blank">WordPress @ Designzzz</a>, For support, suggestions, New plugin ideas etc. visit our contact form <a href="http://wordpress.designzzz.com/contact/" target="_blank">here!</a>
 <p>If you find this plugin useful don't forget to <a href="http://wordpress.org/extend/plugins/image-url-rewrites-for-cdn/" target="_blank">rate</a> or donate</p> <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
<input type="hidden" name="cmd" value="_s-xclick">
<input type="hidden" name="hosted_button_id" value="K7KU5W8GQ9NWY">
<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
</form>
</p>
	</div>
	<?php
	echo ob_get_clean();
}

function dcr_add_options_link() {
	add_options_page('Image URLs for CDN', 'URLs for CDN', 'manage_options', 'dcr-options', 'dcr_options_page');
}
add_action('admin_menu', 'dcr_add_options_link');

function dcr_register_settings() {
	// creates our settings in the options table
	register_setting('dcr_settings_group', 'dcr_settings');
}
add_action('admin_init', 'dcr_register_settings');


?>