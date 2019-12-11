<?php get_header();?>
<section class="banner-bannerwrapper single-banner" style="
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
<a href="https://www.youtube.com/channel/UCvPe3sHxRandq9fBaneSJbw/featured">
<i class="fab fa-youtube-square"></i>
</a>
<a href="https://www.facebook.com/Robotvirksomhed/">
<i class="fab fa-facebook-square"></i>
</a>
<a href="https://dk.linkedin.com/company/smooth-robotics-aps">
    <i class="fab fa-linkedin"></i> 
</a>
</div>
<div class="aside-subscribenews">
    <h2>Get Our News Updates</h2>
    <?php echo get_theme_mod('smoothrobotics-single-callout-newsletter', '<div class="tnp tnp-subscription">
<form method="post" action="http://localhost/wordpress/?na=s" onsubmit="return newsletter_check(this)">

<input type="hidden" name="nlang" value="">
<div class="tnp-field tnp-field-email"><label>Email</label><input class="tnp-email" type="email" name="ne" required></div>
<div class="tnp-field tnp-field-privacy"><label><input type="checkbox" name="ny" required class="tnp-privacy"> By continuing, you accept the privacy policy</label></div>
<div class="tnp-field tnp-field-button"><input class="tnp-submit" type="submit" value="Subscribe" >
</div>
</form>
</div>');?>


</div>
</div>



</div>
<?php get_footer();?>