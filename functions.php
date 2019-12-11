<?php


function load_scripts() {
    wp_enqueue_style("stylesheet", get_template_directory_uri() . '/style.css', array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_script( 'nav', get_template_directory_uri() . '/js/nav.js', array ( 'jquery' ), 1.1, true);
    global $post;
    if( is_page() || is_single() )
    {
        switch($post->post_name) 
        {
            case 'home':
                wp_enqueue_script( 'script', get_template_directory_uri() . '/js/homepage.js', array ( 'jquery' ), 1.2, true);
            break;
            case 'about-us':
                wp_enqueue_script( 'script', get_template_directory_uri() . '/js/about.js', array ( 'jquery' ), 1.2, true);
            break;
        }
    }   
}

add_action('wp_enqueue_scripts', 'load_scripts');
// Laver custom WP query. Det gør at vi kan lave pagination meget nemmere. 
function add_custom_pt( $query ) {
    
    if ( !is_admin() && $query->is_main_query() && $query->is_post_type_archive('news')) {
      $query->set( 'post_type', array( 'News' ) );
      $query->set( 'order', 'DESC' );
      $query->set( 'posts_per_page', 6 );
    }
    else if ( !is_admin() && $query->is_main_query() && $query->is_post_type_archive('cases')) {
        $query->set( 'post_type', array( 'Cases' ) );
        $query->set( 'order', 'DESC' );
        $query->set( 'posts_per_page', 3 );
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
        'rewrite' => array('slug' => 'news', 'with_front' => true),
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
// Laver custom post type for cases
function custom_post_type_cases() {
    $labels = array(
        'name' => 'cases',
        'singular_name' => 'Case',
        'add_new' => 'Add Case',
        'all_items' => 'All Cases',
        'add_new_item' => 'Add Case',
        'edit_item' => 'Edit Case',
        'new_item' => 'New Case',
        'view_items' => 'View Cases',
        'search_items' => 'Search Cases',
        'not_found' => 'No Cases found',
        'not_found_in_trash' => 'No Cases found in trash',
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
        'menu_position' => 5,
        'exclude_from_search' => false
    );
    register_post_type('cases',$args);
}
add_action('init','custom_post_type_cases');
// Her tilføjer vi mulighed for admins at lave om på contact page. 
function smoothrobotics_custom_callout($wp_customize) {
    // Først laver vi selve sektionen til admin panelen under customize.
    // Vi laver selve sektionen til Smoothrobotics
    $wp_customize -> add_section('smoothrobotics-callout-section', array(
        'title' => 'Smoothrobotics Panel'
    ));
    // Youtube i frame
    $wp_customize->add_setting('smoothrobotics-youtube-callout-youtube', array(
        'default' => '<iframe width="1131" height="636" src="https://www.youtube.com/embed/X549JSjCmC4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-youtube-callout-control', array(
        'label' => 'Iframe til youtube video',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-youtube-callout-youtube',
        'type' => 'textarea',
    ));
    // Logo
    $wp_customize->add_setting('smoothrobotics-logo-callout-logo');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-logo-callout-logo-control', array(
        'label' => 'Logo på siden',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-logo-callout-logo',
        'flex_width' => true,
        'flex_height' => true,
        'width' => 140,
        'height' => 130,
    )));
    // Vi skal også have mulighed for at ændre bannere til news / single
    $wp_customize->add_setting('smoothrobotics-banner-callout-news');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-banner-callout-news-control', array(
        'label' => 'Banner på siden news',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-banner-callout-news',
        'flex_width' => true,
        'flex_height' => true,
    )));
    // Samtidig med det så skal der kunne ændres på news siden.
    $wp_customize->add_setting('smoothrobotics-news-callout-headline', array(
        'default' => 'Company News.',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-news-callout-headline-control', array(
        'label' => 'Headline til News',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-news-callout-headline',
        'type' => 'text',
    ));
    $wp_customize->add_setting('smoothrobotics-news-callout-paragraph', array(
        'default' => 'Find out about our latest developments, collaborations and 
        events in the international robot industry.',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-news-callout-paragraph-control', array(
        'label' => 'SubHeadline til News',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-news-callout-paragraph',
        'type' => 'textarea',
    ));
    // Vi tilføjer også en til single
    $wp_customize->add_setting('smoothrobotics-banner-callout-single');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-banner-callout-single-control', array(
        'label' => 'Banner på single siden',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-banner-callout-single',
        'flex_width' => true,
        'flex_height' => true,
    )));
    // Vi tilføjer også en til cases
    $wp_customize->add_setting('smoothrobotics-banner-callout-cases');
    $wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'smoothrobotics-banner-callout-cases-control', array(
        'label' => 'Banner på cases siden',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-banner-callout-cases',
        'flex_width' => true,
        'flex_height' => true,
    )));
    // Vi skal også kunne ændre lidt i cases siden
    $wp_customize->add_setting('smoothrobotics-cases-callout-headline', array(
        'default' => 'Our Cases',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-cases-callout-headline-control', array(
        'label' => 'Headline til Cases',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-cases-callout-headline',
        'type' => 'text',
    ));
    $wp_customize->add_setting('smoothrobotics-cases-callout-paragraph', array(
        'default' => 'Look at our latest cases, where we help good companies, to become even better.',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-cases-callout-paragraph-control', array(
        'label' => 'SubHeadline til Cases',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-cases-callout-paragraph',
        'type' => 'textarea',
    ));
    // Her skal der være mulighed for at ændre formen på newsletter.
    $wp_customize->add_setting('smoothrobotics-single-callout-newsletter', array(
        'default' => '<div class="tnp tnp-subscription">
        <form method="post" action="http://localhost/wordpress/?na=s" onsubmit="return newsletter_check(this)">
        
        <input type="hidden" name="nlang" value="">
        <div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
        <div class="tnp-field tnp-field-privacy"><label><input type="checkbox" name="ny" required class="tnp-privacy"> By continuing, you accept the privacy policy</label></div>
        <div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe" >
        </div>
        </form>
        </div>',
        'transport' => 'refresh',
        ));
    $wp_customize->add_control('smoothrobotics-single-callout-newsletter-control', array(
        'label' => 'Her skal formen være for Newsletter plugin. Kig jeres SmoothGuide hvis i er i tvivl om hvad der skal stå her. ',
        'section' => 'smoothrobotics-callout-section',
        'settings' => 'smoothrobotics-single-callout-newsletter',
        'type' => 'textarea',
    ));
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