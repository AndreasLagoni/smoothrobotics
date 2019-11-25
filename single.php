<?php get_header();?>
<section class="banner-bannerwrapper archive-banner" style="
background-image: url(<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-banner-callout-single'));?>)
">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h1 class="newsbanner-h1">
<?php the_title();?></h1>
</article>
</section>
<div class="singlepage-wrapper">
<div class="singlepage-maincontent">
<h1>
<?php the_title();?>
</h1>

<?php if(have_posts()) : while(have_posts()) : the_post();?>

    <p>
        <?php the_content();?>
    </p>

<?php endwhile; endif; ?>
</div>
<div class="singlepage-aside">
<div class="aside-socials">
<a href="">
<i class="fab fa-youtube-square"></i>
</a>
<a href="">
<i class="fab fa-facebook-square"></i>
</a>
<a href="">
    <i class="fab fa-linkedin"></i> 
</a>
</div>
<div class="aside-subscribenews">
    <h2>Get Our News Updates</h2>
    <label for="email">Email:</label>
    <input type="text">
    <label>
    <input type="checkbox" name="checkboxaccept" value="value">I would like to receive 
communication and relative 
news about SmoothTool 
including updates, services and 
products.
    </label>
    <button class="std-button subscribe">Subscribe</button>


</div>
</div>



</div>
<?php get_footer();?>