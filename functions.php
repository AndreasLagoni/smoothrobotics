<?php


function load_scripts() {
    wp_enqueue_style("stylesheet", get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
      
    global $post;
    if( is_page() || is_single() )
    {
        switch($post->post_name) 
        {
            case 'home':
                
                break;
        }
    }   
}
// Laver custom WP query. Det gør at vi kan lave pagination meget nemmere. 
function add_custom_pt( $query ) {
    
    if ( !is_admin() && $query->is_main_query() && $query->is_post_type_archive('news')) {
      $query->set( 'post_type', array( 'News' ) );
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
    // Tilføjer så man kan ændre headline i admin panel
    // Først laver vi selve sektionen til admin panelen under customize.
    $wp_customize -> add_section('smoothrobotics-contact-callout-section', array(
        'title' => 'Contact Us'
    ));
    // Det næste stykke er til selve under sektionen "contact us"
    // Det første er headline
    $wp_customize->add_setting('smoothrobotics-contact-callout-headline', array(
        'default' => 'Do you need further information?'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-contact-callout-headline-control', array(
        'label' => 'Headline',
        'section' => 'smoothrobotics-contact-callout-section',
        'settings' => 'smoothrobotics-contact-callout-headline'
    )));
    // Her laver vi customize for headline-paragraph 
    // som ligger lige under headline
    $wp_customize->add_setting('smoothrobotics-contact-callout-paragraph', array(
        'default' => 'We gladly provide you with any further information. if you 
        have any question, do not hesitate to contact us.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-contact-callout-paragraph-control', array(
        'label' => 'Headline-Paragraph',
        'section' => 'smoothrobotics-contact-callout-section',
        'settings' => 'smoothrobotics-contact-callout-paragraph',
        'type' => 'textarea',
    )));
    // Her laver vi customize content-headline. Som ligger 
    // ved siden af kontaktformen
    $wp_customize->add_setting('smoothrobotics-contact-callout-contenthead', array(
        'default' => 'Ask about our SmoothTool, Use Cases, Pricing, partner and implementation for your business.'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-contact-callout-contenthead-control', array(
        'label' => 'Main Headline',
        'section' => 'smoothrobotics-contact-callout-section',
        'settings' => 'smoothrobotics-contact-callout-contenthead',
        'type' => 'textarea',
    )));
    // Vi laver også en sektion til about us
    $wp_customize -> add_section('smoothrobotics-aboutus-callout-section', array(
        'title' => 'About Us'
    ));
    // Vi laver controls til denne sektion
    $wp_customize->add_setting('smoothrobotics-aboutus-callout-headline', array(
        'default' => 'ACCELERATE YOUR COMPANYS PRODUCTION'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-aboutus-callout-headline-control', array(
        'label' => 'Headline',
        'section' => 'smoothrobotics-aboutus-callout-section',
        'settings' => 'smoothrobotics-aboutus-callout-headline',
        
    )));
    // MEREEEEEE
    $wp_customize->add_setting('smoothrobotics-aboutus-callout-mainheadline', array(
        'default' => 'What we do
        for you'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-aboutus-callout-mainheadline-control', array(
        'label' => 'Main Headline',
        'section' => 'smoothrobotics-aboutus-callout-section',
        'settings' => 'smoothrobotics-aboutus-callout-mainheadline',
        
    )));
    // MEREEEEEE - Maincontent
    $wp_customize->add_setting('smoothrobotics-aboutus-callout-maincontent', array(
        'default' => 'Smooth Robotics is born from the need to save time, money, and regrets in welding automatisation. <br><br>
        Because nobody really needs a robot. You need a solution. Our goal is to perfect how to make robots work on the principle 
        of human expertise in both quality and efficiency. 
        <br><br>We want to make you able to use your experiences 
        in the way your robot works with you. 
        Detail and focus should never be lost in translation between 
        human and machine. It should flow naturally. Smooth. 
        We are a spin-out company from University of Southern 
        Denmark and part of the Odense Robotics cluster. 
        <br><br>Contact us! We would be happy to give you a try!'
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'smoothrobotics-aboutus-callout-maincontent-control', array(
        'label' => 'Main Content',
        'section' => 'smoothrobotics-aboutus-callout-section',
        'settings' => 'smoothrobotics-aboutus-callout-maincontent',
        'type' => 'textarea',
        
    )));
}

add_action('customize_register', 'smoothrobotics_custom_callout');
?>