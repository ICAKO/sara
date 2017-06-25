<?php
 
require_once get_template_directory() . '/inc/plugins/tgm-plugin-activation.php';

function ici__register_required_plugins() {
	
	/*
	 * Array of plugin arrays. Required keys are name and slug.
	 * If the source is NOT from the .org repo, then source is also required.
	 */
	 
	$plugins = array(

		// This is an example of how to include a plugin from an arbitrary external source in your theme.
		array(
			'name'         => 'Redux Framework', // The plugin name.
			'slug'         => 'redux-framework', // The plugin slug (typically the folder name).
			'source'       => 'https://downloads.wordpress.org/plugin/redux-framework.3.6.3.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'https://wordpress.org/plugins/redux-framework/', // If set, overrides default API URL and points to an external URL.
		),

		array(
			'name'         => 'Meta Box',
			'slug'         => 'meta-boxio',
			'source'       => 'https://downloads.wordpress.org/plugin/meta-box.zip?utm_source=homepage&utm_campaign=download_button&utm_medium=button',
			'required'     => true, 
			'external_url' => 'https://wordpress.org/plugins/meta-box/',
		),
		
		array(
			'name'         => 'Contact Form 7', // The plugin name.
			'slug'         => 'contact-form-7', // The plugin slug (typically the folder name).
			'source'       => 'https://downloads.wordpress.org/plugin/contact-form-7.4.6.zip', // The plugin source.
			'required'     => true, // If false, the plugin is only 'recommended' instead of required.
			'external_url' => 'https://wordpress.org/plugins/contact-form-7/', // If set, overrides default API URL and points to an external URL.
		),
		
		
	);


	$config = array(
		'id'           => 'wefoodyou',            // Unique ID for hashing notices for multiple instances of TGMPA.
		'default_path' => '',                      // Default absolute path to bundled plugins.
		'menu'         => 'tgmpa-install-plugins', // Menu slug.
		'parent_slug'  => 'themes.php',            // Parent menu slug.
		'capability'   => 'edit_theme_options',    // Capability needed to view plugin install page, should be a capability associated with the parent menu used.
		'has_notices'  => true,                    // Show admin notices or not.
		'dismissable'  => true,                    // If false, a user cannot dismiss the nag message.
		'dismiss_msg'  => '',                      // If 'dismissable' is false, this message will be output at top of nag.
		'is_automatic' => false,                   // Automatically activate plugins after installation or not.
		'message'      => '',                      // Message to output right before the plugins table.
	);

	tgmpa( $plugins, $config );
}

add_action( 'tgmpa_register', 'ici__register_required_plugins' );