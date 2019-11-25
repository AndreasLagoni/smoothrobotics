<?php get_header();?>
<main class="wrapper">
<section class="modalvideo-wrapper">
    <div class="modalcontent-wrapper">
        <h2 class="closemodal">X</h2>
        <iframe  class="modaliframe"
        src="https://youtube.com/embed/BhGFvzpKLWk" 
        frameborder="0"
        allowfullscreen>
        </iframe>
    </div>
</section>
<section class="frontbanner-wrapper" style="background-image: url('  
 <?php 
//  the_field('background_image');  ?>
')">
<div class="videowrapper filterblue">
<video autoplay loop muted >
<source src="/wordpress/wp-content/themes/smoothrobotics/assets/intro.mp4" type="video/mp4">
</video>
</div>
<div class="innerfrontbanner-wrapper">
    <div class="innerbanner-header halfdiv">
    <h1><?php echo get_post_meta($post->ID, 'header_title', true);?></h1>
    <h2><?php echo get_post_meta($post->ID, 'header_subtitle', true);?></h2>
    </div>
    <div class="innerbanner-text halfdiv">
    <p><?php echo get_post_meta($post->ID, 'header_column_1', true);?></p>
<p><?php echo get_post_meta($post->ID, 'header_column_2', true);?></p>
    </div>
    <div class="startiframe">
        <i class="fas fa-play-circle"></i>
    </div>
</div>
</section>
<section class="frontpage-underheader-wrapper">
    <article class="frontpage-underheader-item">
        <div class="underheader-item-banner"></div>
        <div class="underheader-item-content">
        <p><?php echo get_post_meta($post->ID, 'first_section_item_1', true);?></p>
        </div>
        <div class="underheader-item-link"></div>
    </article>
    <article class="frontpage-underheader-item">
    <div class="underheader-item-banner"></div>
    <div class="underheader-item-content">
    <p><?php echo get_post_meta($post->ID, 'first_section_item_2', true);?></p>
    </div>
    <div class="underheader-item-link"></div>
    </article>
    <article class="frontpage-underheader-item">
    <div class="underheader-item-banner"></div>
    <div class="underheader-item-content">
    <p><?php echo get_post_meta($post->ID, 'first_section_item_3', true);?></p>
    </div>
    <div class="underheader-item-link"></div>
    </article>
</section>
<section class="section-breaker">
    <article class="thebreaker"></article>
</section>
<section class="smoothtool-quickinfo-wrapper">
    <article class="smoothtool-quickinfo-item item-header">
    <h2><?php echo get_post_meta($post->ID, 'second_section_main_title', true);?> </h2>
    <h3><?php echo get_post_meta($post->ID, 'second_section_subtitle', true);?></h3>
    </article>
    <article class="smoothtool-quickinfo-item">
    <p><?php echo get_post_meta($post->ID, 'second_section_main_content_column_1', true);?></p></article>
    <article class="smoothtool-quickinfo-item">
    <p>
    <?php echo get_post_meta($post->ID, 'second_section_main_content_column_2', true);?>
    </p>
    </article>
</section>
<section class="smoothtool-maincontent">
    <article class="smoothtool-maincontent-banner">
        <div class="maincontent-banner-header"><h2><?php echo get_post_meta($post->ID, 'third_section_title', true);?></h2></div>
    </article>
    <article class="smoothtool-process-wrapper">
    <div class="smoothtool-process-item">
        <p>
            <?php echo get_post_meta($post->ID, 'third_section_process_third_section_process_item_1', true);?>
        </p>
    <div class="arrowright-wrapper"><i class="fas fa-long-arrow-alt-right"></i></div>
    </div>
    <div class="smoothtool-process-item">
    <p>
            <?php echo get_post_meta($post->ID, 'third_section_process_third_section_process_item_2', true);?>
        </p>
    <div class="arrowright-wrapper"><i class="fas fa-long-arrow-alt-right"></i></div></div>
    <div class="smoothtool-process-item">
    <p>
            <?php echo get_post_meta($post->ID, 'third_section_process_third_section_process_item_3', true);?>
        </p>
    <div class="arrowright-wrapper"><i class="fas fa-long-arrow-alt-right"></i></div></div>
    <div class="smoothtool-process-item">
    <p>
            <?php echo get_post_meta($post->ID, 'third_section_process_third_section_process_item_4', true);?>
        </p>
    <div class="arrowright-wrapper"><i class="fas fa-long-arrow-alt-right"></i></div></div>
    <div class="smoothtool-process-item">
    <p>
            <?php echo get_post_meta($post->ID, 'third_section_process_third_section_process_item_5', true);?>
        </p>
    <div class="arrowright-wrapper"><i class="fas fa-long-arrow-alt-right"></i></div></div>
    </article>
</section>
<section class="frontpage-info-aboutus">
<article class="info-aboutus-row1">
<h2><?php echo get_post_meta($post->ID, 'fourth_section_section_header', true);?></h2>
</article>
<article class="info-aboutus-row2">
<div class="info-aboutus-item">
<?php echo get_post_meta($post->ID, 'fourth_section_item_1', true);?>
<div class="info-aboutus-circle"></div>
</div>
<div class="info-aboutus-item">
<?php echo get_post_meta($post->ID, 'fourth_section_item_2', true);?>
<div class="info-aboutus-circle"></div>
</div>
<div class="info-aboutus-item">
<?php echo get_post_meta($post->ID, 'fourth_section_item_3', true);?>
<div class="info-aboutus-circle"></div>
</div>
<div class="info-aboutus-item">
<?php echo get_post_meta($post->ID, 'fourth_section_item_4', true);?>
<div class="info-aboutus-circle"></div>
</div>
</article>
</section>
<section class="section-numbers">
<article class="numbers-article-item">
    <h1>#1</h1>
    <p>Welding software in the world</p>
</article>
<article class="numbers-article-item">
    <h1>#1</h1>
    <p>Welding software in the world</p></article>
<article class="numbers-article-item">
    <h1>#1</h1>
    <p>Welding software in the world</p></article>
</section>
<section class="section-breaker second">
    <article class="thebreaker"></article>
</section>
<section class="section-partners-wrapper">
<h2>Our Partners</h2>
<article class="partners-wrapper">
    
</article>
</section>
</main>

<?php get_footer();?>