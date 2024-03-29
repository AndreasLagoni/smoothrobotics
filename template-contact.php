<!-- 

    Template name: Contact us (SmoothRobotics)
 -->
<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper contact-banner" style="background-image: url('<?php the_field('header_image');  ?>')">
<article class="banneroverlay">
</article>
<article class="banner-innerwrapper std-anim-flyup anim-dur05">
<h1 class="contactbanner-h1 "><?php echo get_post_meta($post->ID, 'header_headline', true);?></h1>
<p class="contactbanner-p "><?php echo get_post_meta($post->ID, 'header_subheadline', true);?></p>
<div class="banner-innercontact std-anim-flyup anim-dur1">
    <div class="banner-innercontactsocialitem">
        <i class="fas fa-mobile-alt"></i>
        <p><?php echo get_post_meta($post->ID, 'phone_numbers', true);?></p>
    </div>
    <div class="banner-innercontactsocialitem">
    <i class="fas fa-envelope"></i>
        <p>
        <?php echo get_post_meta($post->ID, 'email', true);?>
        </p>
    </div>
</div>
</article>
</section>
<section class="contact-wrapper">
    <article class="contact-info ">
        <h2 class="contactinfo std-animafter"><?php echo get_post_meta($post->ID, 'main_content_text', true);?></h2>
    </article>
    <article class="contact-form">
    <?php if(have_posts()) : while(have_posts()) : the_post();?>

<?php the_content();?>

<?php endwhile; endif; ?>
    </article>
</section>
</main>
<?php get_footer();?>