<!-- 

    Template name: About us (SmoothRobotics)
 -->
<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper about-banner"  style="background-image: url('<?php echo wp_get_attachment_url(get_theme_mod('smoothrobotics-aboutus-callout-bannerimage'));?>')">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h2 class="aboutus-h2">THE SMOOTHTOOL</h2>
<h1 class="aboutus-h1"><?php echo get_post_meta($post->ID, 'header_title', true);?></h1>
</article>
</section>
<main class="aboutuswrapper">
    <section class="aboutus-intro-wrapper">
        <article class="intro-content">
            <h2><?php echo get_post_meta($post->ID, 'first_section_headline', true);?></h2>
<p><?php echo get_post_meta($post->ID, 'first_section_content', true);?></p>
        </article>
        <article class="intro-image" style="background-image: url(<?php 
            the_field('first_section_image');
            ?>)">
        </article>
    </section>
    <section class="quoteimagewrapper">
        <article class="quote">
            <h2>“Nobody needs a robot,
            All need a solution.”</h2>
        </article>
        <article class="quoteimage">
<img src="<?php 
            the_field('second_section_image');
            ?>" alt="">
        </article>
    </section>
    <section class="ourstorywrapper">
        <article class="ourstory-maininfo">
        <h2><?php echo get_post_meta($post->ID, 'third_section_headline', true);?></h2>
        <p class="ourstory-info-p">

        <?php echo get_post_meta($post->ID, 'third_section_text_column1', true);?>

        </p>
        
        </article>
        <article class="ourstory-subinfo">
            <p><?php echo get_post_meta($post->ID, 'third_section_text_column2', true);?></p>
        </article>
    </section>
    <section class="teammembers-wrapper">
        <article class="teammembers-header">
            <h2>
                Team Members
            </h2>
        </article>
        <article class="archiveteammembers-wrapper">
            <!-- Vi leder efter specifikke posts (members) -->
            <!-- Da vi ikke skal bruge pagination til 
            noget er det bedst bare at lave Custom WP query her -->
        <?php 
        $memberarray = array ( 
            'post_type' => 'Members',
            'post_status' => 'public',
            'posts_per_page' => -1,
        );
        $memberquery = new WP_Query($memberarray);

        ?>
            <?php if($memberquery -> have_posts()) : while( $memberquery ->have_posts()) : $memberquery ->the_post();
            // Her skal vi have fat i thumbnail url så vi kan bruge det på background-url
            $thumb_id = get_post_thumbnail_id();
            $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
            $thumb_url = $thumb_url_array[0];
            ?>
            <div class="teammembers-archive-item">
                <div class="teammembers-itembanner"
style="background-image: url(<?php echo $thumb_url;?>)">
                </div>
                <div class="teammembers-itemcontent">
                    <h3 class="teammembers-name"><?php the_title();?></h3>
                    <h3 class="teammembers-title">
                    <?php echo get_post_meta($post->ID, 'title', true);?>
                    </h3>
                    <p class="teammembers-phonenumber">
                    <?php echo get_post_meta($post->ID, 'phone-number', true);?>
                    </p>
                    <p class="teammembers-email">
                    <?php echo get_post_meta($post->ID, 'email', true);?>
                    </p>


                </div>
            </div>
            <?php endwhile;
?>
<?php else: 
    echo "No Members found";
endif; ?>
        </article>
        </section>
        <section class="sendtocontact">
        <h2>We would love to hear from you</h2>
        <p>Let us answer your questions. We are here to take 
the journey with you</p>
<a href="./contact-us" class="std-link">Contact Smooth Robotics</a>
    </section>
</main>
</main>
<?php get_footer();?>