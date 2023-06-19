if ( ! function_exists( 'astra_number_pagination' ) ) {

    function astra_number_pagination() {
        global $wp_query;

        if ( !(is_archive() || is_search() || is_home() || is_author() || is_date() || is_tax()) ) {
            return; // Si ce n'est pas le cas, arrêtez-vous ici.
        }

        $enabled = apply_filters( 'astra_pagination_enabled', true );

        // Don't print empty markup if there is only one page.
        if ( $wp_query->max_num_pages < 2 || ! $enabled ) {
            return;
        }

        ob_start();
        echo "<div class='ast-pagination'>";
        the_posts_pagination(
            array(
                'mid_size'     => 50, // Display XX pages
                'prev_text'    => astra_default_strings( 'string-blog-navigation-previous', false ),
                'next_text'    => astra_default_strings( 'string-blog-navigation-next', false ),
                'taxonomy'     => 'category',
                'in_same_term' => true,
            )
        );

        echo '</div>';
        $output = ob_get_clean();
        echo apply_filters( 'astra_pagination_markup', $output ); 
    }
}

add_action( 'astra_pagination', 'astra_number_pagination' );
