<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper archive-banner" 
style="background-image: url(
<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-banner-callout-cases'));?>
)">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h1 class="newsbanner-h1">Our Cases</h1>
<p class="newsbanner-p">Look at our latest cases, where we help good companies, to become even better.</p>
</article>
</section>
<section class="archive-itemwrapper archive-cases">

<?php if(have_posts()) : while(have_posts()) : the_post();
// Her skal vi have fat i thumbnail url så vi kan bruge det på background-url
$thumb_id = get_post_thumbnail_id();
$thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
$thumb_url = $thumb_url_array[0];
?>
<article class="archive-Item cases-Item"> 

<div class="archive-itembanner cases-banner" 
style="background-image: url(<?php echo $thumb_url;?>)">
</div>
<div class="archive-itemcontent cases-content">
    <h3 class="archive-item-header"><?php the_title();?></h3>
    <?php the_content();?>
    </div>
</article>
<div class="casebreaker">
    <div class="casebreaker-item"></div>
</div>

<?php endwhile; 
else: 
    echo "No cases found";

endif;
?>
</section>
<div class="archive-navigate-nextpage">
    <?php echo paginate_links();?>
</div>
</main>
<?php get_footer();?>