<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


	<?php
	
	/*
	 * Load Header Template
	 */
	 
	get_template_part('templates/header/v1/header','tmpl');
	?>