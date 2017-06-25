<?php
/**
 * 
 * 404 Page Not Found
 * 
 * @package WordPresss
 * @version 1.0
 */
 
	get_header();
 ?>
 
 <div class="main_container flex main_wrapper">
	<div class="col_12 content_page">
		<h2 class="page_title"><?php _e('404 Not Found','sara'); ?></h2>
	
		<div class="page_404">
	
			<h2>404</h2>
			<h5><?php _e('oooooooops!','sara'); ?></h5>
			<h6><?php _e('We Can’t Seem To Find The Page','sara'); ?></h6>
	
			<?php get_search_form(); ?>
	
			<a href="<?php esc_url(bloginfo('home')); ?>" class="back_to_home"><?php _e('Back to Home','sara'); ?></a>
		</div>
	
	</div>
 </div> <!-- ./ Main Container -->
 
 <?php
	get_footer();
