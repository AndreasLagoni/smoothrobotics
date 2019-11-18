<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tilføjer font awesome -->
        <script src="https://kit.fontawesome.com/14266baabc.js" crossorigin="anonymous"></script>

    </head>
    <body <?php body_class();?>>

    <header class="topHeader">
        <nav class="topNav-logo">
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-logo-callout-logo'));?>" alt="">
        </nav>
    <nav class="topNav-links">
    <?php wp_nav_menu (

        array(
            'theme_location' => 'top-menu'
        )
    );?>
</nav>
    
    </header>