<?php get_header();?>
<section class="banner-bannerwrapper archive-banner">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h1 class="newsbanner-h1">Company News.</h1>
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
<div class="singlepage-aside"></div>



</div>
<?php get_footer();?>