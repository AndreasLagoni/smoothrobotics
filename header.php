<!DOCTYPE html>
<html>
    <head>
        <?php wp_head();?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Tilføjer font awesome -->
        <script src="https://kit.fontawesome.com/14266baabc.js" crossorigin="anonymous"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-154570365-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-154570365-1');
</script>

    </head>
    <body <?php body_class();?>>

    <header class="topHeader" id="topheader">
        <nav class="topNav-logo">
            <a href="<?php echo site_url();?>">
            
            <img src="<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-logo-callout-logo'));?>" alt="">
        </a>
    </nav>
    <label class="burgermenu" for="toggle">&#9776;</label>
    <input type="checkbox" id="toggle">
    <nav class="topNav-links">
    <?php wp_nav_menu (

        array(
            'theme_location' => 'top-menu'
        )
    );?>
</nav>
    
    </header>