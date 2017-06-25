<?php

class App {
	
	/*
	 * Loading Logo!
	 */
	 
	function get_logo() {
		global $rdx;
		
		if(!empty($rdx['rdx_header__logo']['url'])) { ?>
			
			<a href="<?php echo esc_url(bloginfo('home'));?>" class="navbar-brand">
                <img src="<?php echo $rdx['rdx_header__logo']['url']; ?>" alt="" />
            </a>
			
		<?php } else { ?>
			<a href="<?php echo esc_url(bloginfo('home'));?>" class="navbar-brand">
                <h2><?php bloginfo('name'); ?></h2>
                <h3><?php bloginfo('description'); ?></h3>
            </a>
			<?php
		}
	}
	
	
	/*
	 * Loading Social Icons
	 */
	 
	 function get_social__footer() {
	 	global $rdx;
	 	?>
		<ul class="social-networks clearfix">
	 	  	<?php if(!empty($rdx['rdx_social__fb'])) : ?>
            <li class="facebook-icon">
                <a href="<?php echo $rdx['rdx_social__fb'];?>" target="_blank"> <!-- set your facebook profile -->
                    <i class="fa fa-facebook" aria-hidden="true"></i> <!-- facebook image -->
                </a>
            </li>
            <?php endif; ?>
            
            <?php if(!empty($rdx['rdx_social__instagram'])) : ?>
            <li class="instagram-icon">
                <a href="<?php echo $rdx['rdx_social__instagram'];?>" target="_blank"> <!-- set your instagram profile -->
                    <i class="fa fa-instagram" aria-hidden="true"></i> <!-- instagram image -->
                </a>
            </li>
            <?php endif; ?>
            
            <?php if(!empty($rdx['rdx_social__500px'])) : ?>
            <li class="500px-icon">
                <a href="<?php echo $rdx['rdx_social__500px'];?>" target="_blank"> <!-- set your 500px profile -->
                    <i class="fa fa-500px" aria-hidden="true"></i> <!-- 500px image -->
                </a>
            </li>
            <?php endif; ?>
            
            <?php if(!empty($rdx['rdx_social__flickr'])) : ?>
            <li class="flickr-icon">
                <a href="<?php echo $rdx['rdx_social__flickr'];?>" target="_blank"> <!-- set your flickr profile -->
                    <i class="fa fa-flickr" aria-hidden="true"></i> <!-- flick image -->
                </a>
            </li>
            <?php endif; ?>
                              
        </ul>
	 	<?php
	 }
	 
}

$app = new App();
