<?php
class Ici_post {
	
	function categories($post_id) {
		
		$categories = wp_get_post_terms($post_id,'category');
		$count_itmes = count($categories);
		$end_element = $count_itmes-1;
		
		if($count_itmes == 0) return;
		
		$out = '<div class="cats">';
				foreach($categories as $key=>$cat) :
					$out .= ($count_itmes == 1 || $end_element == $key) ? '<a href="'.esc_url(get_term_link($cat)).'">'.$cat->name.'</a>' : '<a href="'.esc_url(get_term_link($cat)).'">'.$cat->name.',</a>';
				endforeach;
		$out .= '</div>';
		
		return $out;
	}
	
	// Types: list, box
	function tags($post_id,$type="list") {
		$tags = wp_get_post_tags($post_id);
		
		$count_itmes = count($tags);
		$end_element = $count_itmes-1;
		
		if($count_itmes == 0) return;
		
		$out = '<div class="tags">';
			if($type=="list") {
				foreach($tags as $key=>$cat) :
					$out .= ($count_itmes == 1 || $end_element == $key) ? '<a href="'.esc_url(get_term_link($cat)).'">'.$cat->name.'</a>' : '<a href="'.esc_url(get_term_link($cat)).'">'.$cat->name.',</a>';
				endforeach;
			}
			
			if($type=="box") {
				foreach($tags as $key=>$cat) :
					$out .= '<a href="'.esc_url(get_term_link($cat)).'">'.$cat->name.'</a>';
				endforeach;
			}
			
		$out .= '</div>';
		
		return $out;
	}
	
	// get featured image
	function featured($post_id,$thumbnail="thumbnail") {
		$post_image = wp_get_attachment_image_src( get_post_thumbnail_id( $post_id), $thumbnail );
		return ($post_image) ? esc_url($post_image[0]) : get_template_directory_uri().'/assets/img/no-image.png';
	}
	
	// Post Date
	function get_date($post_id,$format,$wrapper="span") {
		if($wrapper) :	$out .= '<'.$wrapper.'>'; endif;
			$out .= get_the_date( $format, $post_id );
		if($wrapper) : $out .= '</'.$wrapper.'>'; endif;
		
		return $out;
	} 
	
}

$ici_post = new Ici_post();
