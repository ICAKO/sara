<?php
	global $ici_post;
?>
<article <?php post_class('post format-quote'); ?> style="background-image: url('<?php echo $ici_post->featured(get_the_ID(),'original'); ?>');">
	<div class="quote_content">
		<a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
		<span><?php echo $ici_post->get_date(get_the_ID(),'D, d M Y',false); ?> / <?php echo wp_count_comments(get_the_ID())->approved; ?> <?php _e('Comments','sara'); ?></span>
	</div>
</article> <!-- ./ Format Quote -->