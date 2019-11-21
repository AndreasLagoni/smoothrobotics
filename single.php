<?php get_header();?>
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