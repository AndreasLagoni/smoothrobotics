<!-- 

    Template name: Distributors (SmoothRobotics)


 -->
<?php get_header();?>
<div class="distributors-wrapper">
<div class="content_distributors ">
    <style>
    .wps1-search {
  background: #1b2347 !important;
}
    </style>
<?php if(have_posts()) : while(have_posts()) : the_post();?>

   
        <?php the_content();?>
    

<?php endwhile; endif; ?>
</div>
</div>
<?php get_footer();?>