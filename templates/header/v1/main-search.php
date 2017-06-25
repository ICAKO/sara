<div class="main_search">
	<span><i class="fa fa-search" aria-hidden="true"></i></span>
	<form action="<?php bloginfo('home');?>" method="get" id="main_search_form">
	<div class="main_search_form">
		<input type="text" name="s" value="<?php echo get_search_query(); ?>" placeholder="Search...">
		<button type="button" name="button"><i class="fa fa-search" aria-hidden="true"></i></button>
	</div>
	</form>
</div> <!-- ./ Main Search -->