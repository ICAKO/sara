<?php
	global $ici_post;
?>
<div class="single_title single_content">
	<?php
		// Post Categories
		echo $ici_post->categories(get_the_ID());
		the_title('<h1>','</h1>');
	?>
</div>


<div class="featured_image" style="background-image: url('<?php echo $ici_post->featured(get_the_ID(),'original'); ?>');"></div>

<div class="single_content">
	<?php 
	
		the_content();
		
		// Load Tags
		echo $ici_post->tags(get_the_ID(),'box');
	?>
</div>
