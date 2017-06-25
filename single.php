<?php
	get_header();
?>
<div class="main_container flex-between main_wrapper">
	<div class="col_9">
		<?php if(have_posts()) : ?>
		<div <?php post_class(); ?>>
			<?php  
				while(have_posts()) : the_post();
					get_template_part('templates/post-single/content',get_post_format());
				
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						echo '<div class="comments_list">';
						comments_template();
						echo '</div>';
					endif;
					
				endwhile;
			?>
		</div>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>

<?php
	get_footer();
?>