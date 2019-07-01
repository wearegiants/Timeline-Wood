<?php 

function the_breadcrumb() {
	if (!is_home()) {
		echo '<a href="';
		echo get_option('home');
		echo '">';
		bloginfo('name');
		echo "</a>  ";
		if (is_category() || is_single()) {
			the_category('title_li=');
			if (is_single()) {
				echo "  ";
				the_title();
			}
		} elseif (is_page()) {
			echo the_title();
		}
	}
}

function add_slug_body_class( $classes ) {
global $post;
if ( isset( $post ) ) {
$classes[] = $post->post_type . '-' . $post->post_name;
}
return $classes;
}
add_filter( 'body_class', 'add_slug_body_class' );
