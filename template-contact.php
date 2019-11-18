<!-- 

    Template name: Contact us (SmoothRobotics)
 -->
<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper contact-banner" style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-contact-callout-bannerimage'));?>')">
<article class="banneroverlay">
</article>
<article class="banner-innerwrapper">
<h1 class="newsbanner-h1"><?php echo get_theme_mod('smoothrobotics-contact-callout-headline', 'Do you need further information?')?></h1>
<p class="newsbanner-p"><?php echo get_theme_mod('smoothrobotics-contact-callout-paragraph', 'We gladly provide you with any further information. if you 
        have any question, do not hesitate to contact us.')?></p>
<div class="banner-innercontact">
    <div class="banner-innercontactsocialitem">
        <i class="fas fa-mobile-alt"></i>
        <p>+ 45 27837462</p>
    </div>
    <div class="banner-innercontactsocialitem">
    <i class="fas fa-mobile-alt"></i>
        <p>+ 45 27837462</p>
    </div>
    <div class="banner-innercontactsocialitem">
    <i class="fas fa-mobile-alt"></i>
        <p>+ 45 27837462</p>
    </div>
</div>
</article>
</section>
<section class="contact-wrapper">
    <article class="contact-info">
        <h2 class="contactinfo"><?php echo get_theme_mod('smoothrobotics-contact-callout-contenthead', 'Ask about our SmoothTool, Use Cases, Pricing, partner and implementation for your business.')?></h2>
    </article>
    <article class="contact-form">
    <?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif; ?>
    </article>
</section>
</main>
<?php get_footer();?>