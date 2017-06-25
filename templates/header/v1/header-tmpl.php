<?php
/**
 * Template Header v1.
 * 
 * @package WordPress
 */
 
 ?>
<header>
	<div class="main_container">
		<div class="nav">
			<?php
				if ( has_nav_menu( 'top' ) ) :
					get_template_part('templates/header/v1/navigation','top');
				endif;
			?>

			<div class="right_side">

				<ul class="socials">
					<li><a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
					<li><a href=""><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
				</ul> <!-- ./ Socials -->

				<?php get_template_part('templates/header/v1/main','search'); ?>

			</div> <!-- ./ Right Side -->

		</div>
	</div>
</header> <!-- ./ Header -->

<section class="logo main_wrapper">
	<a href="<?php bloginfo('home'); ?>">
		<h1>Sara Smith<span>.</span></h1>
		<h4>My Travels. My Life.</h4>
	</a>
</section> <!-- ./ Logo -->

<?php
	get_template_part('templates/header/slider/slider','loading');
?>
