<?php

// Basic Theme capabilities
add_theme_support('post-thumbnails');

// ACF Options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
}

//modify default search form code and content
function html5_search_form( $form ) {
$form = '<form role="search" method="get" id="search-form" action="' . home_url( '/' ) . '" >
<label class="screen-reader-text" for="s">' . __('',  'lmthome') . '</label>
<input type="search" value="' . get_search_query() . '" name="s" id="s" placeholder="Search..." />
<input type="submit" id="searchsubmit" value="'. esc_attr__('Search', 'lmthome') .'" />
</form>';
return $form;
}
add_filter( 'get_search_form', 'html5_search_form' );

// Pagination
function numeric_posts_nav() {

    if( is_singular() )
        return;

    global $wp_query;

    /** Stop execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;

    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max   = intval( $wp_query->max_num_pages );

    /** Add current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 3 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<div class="links"><ul>' . "\n";

    /** Previous Post Link */
    if ( get_previous_posts_link() )
        printf( '<li class="prev">%s</li>' . "\n", get_previous_posts_link( __( '<', 'lmthome' ) ) );

    /** Link to first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="active"' : '';

        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );

        if ( ! in_array( 2, $links ) )
            echo '<li>…</li>';
    }

    /** Link to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
    }

    /** Link to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) )
            echo '<li>…</li>' . "\n";

        $class = $paged == $max ? ' class="active"' : '';
        printf( '<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
    }

    /** Next Post Link */
    if ( get_next_posts_link() )
        printf( '<li class="next">%s</li>' . "\n", get_next_posts_link( __( '>', 'lmthome' )) );

    echo '</ul></div>' . "\n";

}
function wpex_get_excerpt( $args = array() ) {

	// Defaults
	$defaults = array(
		'post'            => '',
		'length'          => 40,
		'readmore'        => false,
		'readmore_text'   => esc_html__( 'read more', 'lmthome' ),
		'readmore_after'  => '',
		'custom_excerpts' => true,
		'disable_more'    => true,
	);

	// Apply filters
	$defaults = apply_filters( 'wpex_get_excerpt_defaults', $defaults );

	// Parse args
	$args = wp_parse_args( $args, $defaults );

	// Apply filters to args
	$args = apply_filters( 'wpex_get_excerpt_args', $defaults );

	// Extract
	extract( $args );

	// Get global post data
	if ( ! $post ) {
		global $post;
	}

	// Get post ID
	$post_id = $post->ID;

	// Check for custom excerpt
	if ( $custom_excerpts && has_excerpt( $post_id ) ) {
		$output = $post->post_excerpt;
	}

	// No custom excerpt...so lets generate one
	else {

		// Readmore link
		$readmore_link = '<a href="' . get_permalink( $post_id ) . '" class="readmore">' . $readmore_text . $readmore_after . '</a>';

		// Check for more tag and return content if it exists
		if ( ! $disable_more && strpos( $post->post_content, '<!--more-->' ) ) {
			$output = apply_filters( 'the_content', get_the_content( $readmore_text . $readmore_after ) );
		}

		// No more tag defined so generate excerpt using wp_trim_words
		else {

			// Generate excerpt
			$output = wp_trim_words( strip_shortcodes( $post->post_content ), $length );

			// Add readmore to excerpt if enabled
			if ( $readmore ) {

				$output .= apply_filters( 'wpex_readmore_link', $readmore_link );

			}

		}

	}

	// Apply filters and echo
	return apply_filters( 'wpex_get_excerpt', $output );

}

//excerpt length modify
add_filter( 'excerpt_length', function($length) {
    return 20;
} );

// change the default "[...]" for excerpts
function wpdocs_excerpt_more( $more ) {
    if ( is_admin() ) {
        return $more;
    }
    return '...';
}
add_filter( 'excerpt_more', 'wpdocs_excerpt_more' );

?>
