<?php


function load_scripts() {
    wp_enqueue_style("stylesheet", get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
      
    global $post;
    if( is_page() || is_single() )
    {
        switch($post->post_name) 
        {
            case 'home':
                wp_enqueue_script('home', get_template_directory_uri() . '/js/home.js', array(), '', true);
                break;
        }
    }   
}
// Lad os lige prøve noget
function add_custom_pt( $query ) {
    if ( !is_admin() && $query->is_main_query() ) {
      $query->set( 'post_type', array( 'post', 'News' ) );
      $query->set( 'category_name', 'News' );
      $query->set( 'order', 'ASC' );
      $query->set( 'posts_per_page', 6 );
    }
  }
  add_action( 'pre_get_posts', 'add_custom_pt' );
// 
add_theme_support('post-thumbnails');
add_theme_support('menus');
// Menu
register_nav_menus(
    array(
        'top-menu' => __('Top Menu', 'theme')
    )
    );

    // Ændrer i excerpt filters
function wpdocs_custom_excerpt_length($length) {
    return 25;
}

add_filter('excerpt_length', 'wpdocs_custom_excerpt_length',999);
add_action('wp_enqueue_scripts', 'load_scripts');
// Laver custom post type for news
function custom_post_type_news() {
    $labels = array(
        'name' => 'News',
        'singular_name' => 'News',
        'add_new' => 'Add News',
        'all_items' => 'All news',
        'add_new_item' => 'Add News',
        'edit_item' => 'Edit News',
        'new_item' => 'New News',
        'view_item' => 'View News',
        'search_item' => 'Search news',
        'not_found' => 'No news found',
        'not_found_in_trash' => 'No news found in trash',
        'parent_item_colon' => 'Parent Item',
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'publicly_queryable' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierachical' => false,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail',
            'revisions',
        ),
        'taxonomies' => array(
            'category', 'post_tag'
        ),
        'menu_position' => 4,
        'exclude_from_search' => false
    );
    register_post_type('news',$args);
}
add_action('init','custom_post_type_news');
?>