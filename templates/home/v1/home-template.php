<div class="main_container flex-between main_wrapper">
	<div class="col_9">
		<?php if(have_posts()) : ?>
		<div class="latest_posts">
			<?php  
				while(have_posts()) : the_post();
					get_template_part('templates/post/content',get_post_format());
				endwhile;
			?>
		</div>
		<?php endif; ?>

	</div>
	
	<?php get_sidebar(); ?>

</div>
