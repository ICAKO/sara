<?php

// Meta Box
add_filter( 'rwmb_meta_boxes', 'wxy__metaboxio_fields' );

function wxy__metaboxio_fields( $meta_boxes ) {

	// Post Video ( youtube, vimeo )
	$meta_boxes[] = array(
        'title'      => __( 'Post Setting ', 'wefoodyou' ),
        'post_types' => 'post',
        'context' => 'normal',
        'fields'     => array(
            array(
            	'name'	  => __('People','wefoodyou'),
                'id'      => 'post__servers',
                'type'    => 'text',
                'size'	  => 100,
                'desc'	  => __('Example: <strong>4-6</strong>','wefoodyou')
            ),
            
			array(
            	'name'	  => __('Cook Time','wefoodyou'),
                'id'      => 'post__cooktime',
                'type'    => 'text',
                'size'	  => 100,
                'desc'	  => __('Example: <strong>20 mins</strong>','wefoodyou')
            ),
        
        ),
    );
	
	// Post Gallery Images
	$meta_boxes[] = array(
        'title'      => __( 'Image Gallery', 'wefoodyou' ),
        'post_types' => 'post',
        'context' => 'normal',
        'fields'     => array(
            array(
                'id'      => 'post__image_gallery',
                'type'    => 'image_advanced',
            ),
        
        ),
    );
	
    return $meta_boxes;
}
