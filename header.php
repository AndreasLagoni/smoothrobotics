<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
    <body <?php body_class();?>>

    <header class="topHeader">
        <nav class="topNav-logo">
            <img src="http://localhost/wordpress/wp-content/uploads/2019/11/logo.png" alt="">
        </nav>
    <nav class="topNav-links">
    <?php wp_nav_menu (

        array(
            'theme_location' => 'top-menu'
        )
    );?>
</nav>
    
    </header>