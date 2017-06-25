<?php
	global $ici_post;
?>
<article <?php post_class('post'); ?>>
	
	<div class="featured col_6" style="background-image: url('<?php echo $ici_post->featured(get_the_ID(),'original'); ?>');">
		<a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?> <?php echo $count_i; ?></a>
	</div>

	<div class="content col_6">
		
		<?php
			// Post Categories
			echo $ici_post->categories(get_the_ID());
		?>

		<a href="<?php esc_url(the_permalink()); ?>" class="title"><?php the_title(); ?></a>
		<?php the_excerpt(); ?>
		<div class="date flex-between">
			<?php echo $ici_post->get_date(get_the_ID(),'D, d M Y','span'); ?>
			<span><?php echo wp_count_comments(get_the_ID())->approved; ?> <?php _e('Comments','sara'); ?></span>
		</div>

	</div>
</article>