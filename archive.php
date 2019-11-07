<?php get_header();?>
<main class="archive-wrapper archive-news">
<section class="archive-bannerwrapper">
<article class="archive-innerwrapper">
<h1>Company News.</h1>
<p>Find out about our latest developments, collaborations and 
events in the international robot industry.</p>
</article>
</section>
<section class="archive-itemwrapper archive-news">

<?php 
// Her leder vi efter post_type "News".
$archiveloop = new WP_query(array(
    'post_type' => 'News',
    'posts_per_page' => 6
));
 
?>
<?php while($archiveloop->have_posts()) : $archiveloop->the_post();?>
<article class="archive-Item news-Item"> 
    <h3><?php the_title();?></h3>
    <?php the_excerpt();?>
    <a href="<?php the_permalink();?>">Go to news</a>
</article>
<?php endwhile; wp_reset_query();?>


</section>
</main>
<?php get_footer();?>