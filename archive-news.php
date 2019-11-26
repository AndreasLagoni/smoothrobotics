<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper archive-banner" 
style="background-image: url(
<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-banner-callout-news'));?>
)">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h1 class="newsbanner-h1">Company News.</h1>
<p class="newsbanner-p">Find out about our latest developments, collaborations and 
events in the international robot industry.</p>
</article>
</section>
<section class="archive-itemwrapper archive-news">

<?php if(have_posts()) : while(have_posts()) : the_post();
// Her skal vi have fat i thumbnail url så vi kan bruge det på background-url
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<article class="archive-Item news-Item"> 

<div class="archive-itembanner" 
style="background-image: url(<?php echo $thumb_url;?>)">
</div>
<div class="archive-itemcontent">
    <h3 class="archive-item-header"><?php the_title();?></h3>
    <?php the_excerpt();?>
    <div class="archive-item-permalink">
    <a href="<?php the_permalink();?>" class="archive-item-link">Go to news</a></div>
    </div>
</article>

<?php endwhile; 
else: 
    echo "No news found";

endif;
?>
</section>
<div class="archive-navigate-nextpage">
    <?php echo paginate_links();?>
</div>
</main>
<?php get_footer();?>