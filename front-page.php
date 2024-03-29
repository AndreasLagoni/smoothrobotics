<?php get_header();?>
<main class="wrapper">
<section class="modalvideo-wrapper">
    <div class="modalcontent-wrapper">
        <h2 class="closemodal">X</h2>
        
        <?php 
        echo get_theme_mod('smoothrobotics-youtube-callout-youtube');
        ?>
    </div>
</section>

<section class="frontbanner-wrapper">  

<div class="videowrapper filterblue">
<video autoplay loop muted >
<source src="/smooth/wp-content/themes/smoothrobotics/assets/intro.mp4" type="video/mp4">
</video>
</div>
<div class="innerfrontbanner-wrapper">
    <div class="innerbanner-header halfdiv std-anim-flyup anim-dur05 std-animafter">
    <h1><?php echo get_post_meta($post->ID, 'header_title', true);?></h1>
    <h2><?php echo get_post_meta($post->ID, 'header_subtitle', true);?></h2>
    </div>
    <div class="innerbanner-text halfdiv std-anim-flyup anim-dur05 anim-delay03">
    <p><?php echo get_post_meta($post->ID, 'header_column', true);?></p>
    </div>
    <div class="cta-inner std-anim-flyup anim-dur05 anim-delay03">
    <a href="<?php echo site_url().'/contact-us';?>" class="std-button">Get in Contact</a>
    </div>
    <div class="startiframe">
        <i class="fas fa-play-circle playanim"></i>
        <p>Company Presentation</p>
    </div>
</div>
</section>
<section class="frontpage-underheader-wrapper" id="news">
    <article class="frontpage-underheader-item">
    <div class="underheader-item-banner" 
        style="background-image: url('<?php echo the_field("underheader_item_1_banner_image"); ?>')">
           
        </div>
        <div class="underheader-item-content">
        <p>
            <?php echo get_post_meta($post->ID, 'underheader_item_1_info_content', true);?>
        </p>
        </div>
    </article>
    <article class="frontpage-underheader-item">
    <div class="underheader-item-banner" 
        style="background-image: url('<?php echo the_field("underheader_item_2_banner_image"); ?>')">
           
        </div>
        <div class="underheader-item-content">
        <p>
            <?php echo get_post_meta($post->ID, 'underheader_item_2_info_content', true);?>
        </p>
        </div>
    </article>
    <article class="frontpage-underheader-item">
        <div class="underheader-item-banner" 
        style="background-image: url('<?php echo the_field("underheader_item_3_banner_image"); ?>')">
           
        </div>
        <div class="underheader-item-content">
        <p>
            <?php echo get_post_meta($post->ID, 'underheader_item_3_info_content', true);?>
        </p>
        </div>
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
    <article class="smoothtool-quickinfo-item-large">
    <p><?php echo get_post_meta($post->ID, 'second_section_main_content_column', true);?></p></article>
    
</section>
<section class="smoothtool-maincontent">
    <article class="smoothtool-maincontent-banner" 
    style="background-image: url('<?php echo the_field('third_section_dot_image')?>')">
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
    <div class="arrowright-wrapper last"><i class="fas fa-long-arrow-alt-right"></i></div></div>
    </article>
</section>
<section class="frontpage-info-aboutus">
<article class="info-aboutus-row1 ">
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
<article class="numbers-article-item " >
<?php echo get_post_meta($post->ID, 'section_numbers_first_number', true);?>
</article>
<article class="numbers-article-item">
<?php echo get_post_meta($post->ID, 'section_numbers_second_number', true);?>
</article>
<article class="numbers-article-item">
<?php echo get_post_meta($post->ID, 'section_numbers_third_number', true);?>
</article>
</section>
<section class="section-breaker second">
    <article class="thebreaker"></article>
</section>
<section class="section-partners-wrapper">
<h2>
    <?php echo get_post_meta($post->ID, 'partner_headline', true);?>
</h2>
<article class="partners-wrapper">
    <img src="<?php echo the_field("partners_partner_image1") ?>" alt="">
    <img src="<?php echo the_field("partners_partner_image2") ?>" alt="">
    <img src="<?php echo the_field("partners_partner_image3") ?>" alt="">
    <img src="<?php echo the_field("partners_partner_image4") ?>" alt="">
</article>
</section>
</main>

<?php get_footer();?>