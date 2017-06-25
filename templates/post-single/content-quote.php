<?php
	global $ici_post;
?>

<div class="format-quote " style="background-image: url('<?php echo $ici_post->featured(get_the_ID(),'original'); ?>');">
	<div class="quote_content">
		<a href="<?php esc_url(the_permalink()); ?>"><?php the_title(); ?></a>
	</div>
</div>

<div class="single_content">
	<?php the_content(); ?>
</div>

 