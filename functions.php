<?php


function load_scripts() {
    wp_enqueue_style("stylesheet", get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
      
    global $post;
    if( is_page() || is_single() )
    {
        switch($post->post_name) 
        {
            case 'home':
                wp_enqueue_script( 'script', get_template_directory_uri() . '/js/homepage.js', array ( 'jquery' ), 1.1, true);
                break;
        }
    }   
}
// Laver custom WP query. Det gør at vi kan lave pagination meget nemmere. 
function add_custom_pt( $query ) {
    
    if ( !is_admin() && $query->is_main_query() && $query->is_post_type_archive('news')) {
      $query->set( 'post_type', array( 'News' ) );
      $query->set( 'order', 'DESC' );
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
        'top-menu' => __('Top Menu', 'theme'), 'footer-menu' => __('Footer Menu', 'theme')
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
        'view_items' => 'View News',
        'search_items' => 'Search news',
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
// Laver custom post type for Teammembers
function custom_post_type_teammembers() {
    $labels = array(
        'name' => 'Members',
        'singular_name' => 'Member',
        'add_new' => 'Add Member',
        'all_items' => 'All Members',
        'add_new_item' => 'Add Member',
        'edit_item' => 'Edit Member',
        'new_item' => 'New Member',
        'view_items' => 'View Members',
        'search_items' => 'Search Members',
        'not_found' => 'No Members found',
        'not_found_in_trash' => 'No Members found in trash',
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
            'custom-fields',
        ),
        'taxonomies' => array(
            'category', 'post_tag'
        ),
        'menu_position' => 4,
        'exclude_from_search' => false
    );
    register_post_type('Members',$args);
}
add_action('init','custom_post_type_teammembers');
// Her tilføjer vi mulighed for admins at lave om på contact page. 
function smoothrobotics_custom_callout($wp_customize) {
    // Først laver vi selve sektionen til admin panelen under customize.
    // Laver en sektion som gør det muligt at ændre image. 
    $wp_customize -> add_section('smoothrobotics-logo-callout-section', array(
        'title' => 'Logo'
    ));
    $wp_customize->add_setting('smoothrobotics-logo-callout-logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-logo-callout-logo-control', array(
        'label' => 'Logo på siden',
        'section' => 'smoothrobotics-logo-callout-section',
        'settings' => 'smoothrobotics-logo-callout-logo',
        'width' => 140,
        'height' => 130,
    )));
    // Vi skal også have mulighed for at ændre bannere til news / single
    $wp_customize -> add_section('smoothrobotics-banner-callout-section', array(
        'title' => 'Banner'
    ));
    $wp_customize->add_setting('smoothrobotics-banner-callout-news');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-banner-callout-news-control', array(
        'label' => 'Banner på siden news',
        'section' => 'smoothrobotics-banner-callout-section',
        'settings' => 'smoothrobotics-banner-callout-news',
        'flex_width' => true,
        'flex_height' => true,
    )));
    // Vi tilføjer også en til single
    $wp_customize->add_setting('smoothrobotics-banner-callout-single');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-banner-callout-single-control', array(
        'label' => 'Banner på single siden',
        'section' => 'smoothrobotics-banner-callout-section',
        'settings' => 'smoothrobotics-banner-callout-single',
        'flex_width' => true,
        'flex_height' => true,
    )));
};
add_action('customize_register', 'smoothrobotics_custom_callout');
// Custom WP Store Locator
add_filter( 'wpsl_templates', 'custom_templates' );

function custom_templates( $templates ) {

    /**
     * The 'id' is for internal use and must be unique ( since 2.0 ).
     * The 'name' is used in the template dropdown on the settings page.
     * The 'path' points to the location of the custom template,
     * in this case the folder of your active theme.
     */
    $templates[] = array (
        'id'   => 'custom',
        'name' => 'Custom template',
        'path' => get_stylesheet_directory() . '/' . 'wpsl-templates/custom.php',
    );

    return $templates;
}
?>