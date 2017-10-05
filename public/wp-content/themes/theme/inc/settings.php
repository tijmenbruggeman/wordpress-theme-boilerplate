<?php
/*== SOCIAL MEDIA==*/
function social_media_page() {
	?>
    <div>
        <form action="options.php" method="post">
			<?php settings_fields( 'social_media' ); ?>
			<?php do_settings_sections( 'social_media' ); ?>


            <input class="button button-primary" name="Submit" type="submit"
                   value="<?php esc_attr_e( 'Save Changes' ); ?>"/>
        </form>
    </div>
	<?php
}

add_action( 'admin_menu', 'social_media_add_page' );

function social_media_add_page() {
	add_options_page( 'Social Media Settings', 'Social Media Settings', 'manage_options', 'social_media', 'social_media_page' );
}

function social_media_init() {
	register_setting( 'social_media', 'social_media' );
	add_settings_section( 'social_media', 'Social Media', 'social_media_section_text', 'social_media' );
	add_settings_field( 'twitter_link', 'Twitter', 'twitter_link_string', 'social_media', 'social_media' );
	add_settings_field( 'facebook_link', 'Facebook', 'facebook_link_string', 'social_media', 'social_media' );
	add_settings_field( 'linkedin_link', 'LinkedIn', 'linkedin_link_string', 'social_media', 'social_media' );


	register_setting( 'general', 'phone', 'esc_attr' );
	add_settings_field( 'phone', 'Telefoonnummer', 'generate_phone_number_string', 'general');
}

function social_media_section_text() {
	echo '<p>Instellingen voor je social media accounts.</p>';
}

function twitter_link_string() {
	$options = get_option( 'social_media' );
	echo "<input id='twitter_link_string' name='social_media[twitter_link]' size='40' type='text' value='{$options['twitter_link']}' />";
}

function facebook_link_string() {
	$options = get_option( 'social_media' );
	echo "<input id='facebook_link_string' name='social_media[facebook_link]' size='40' type='text' value='{$options['facebook_link']}' />";
}

function linkedin_link_string() {
	$options = get_option( 'social_media' );
	echo "<input id='linkedin_link_string' name='social_media[linkedin_link]' size='40' type='text' value='{$options['linkedin_link']}' />";
}

add_action( 'admin_init', 'social_media_init' );

function generate_phone_number_string() {
	$phone = get_option( 'phone', '' );
	echo "<input id='phone' name='phone' size='40' value='{$phone}' />";
}
?>
