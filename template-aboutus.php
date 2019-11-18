<!-- 

    Template name: About us (SmoothRobotics)
 -->
<?php get_header();?>
<main class="main-wrapper">
<section class="banner-bannerwrapper contact-banner">
<article class="banneroverlay"></article>
<article class="banner-innerwrapper">
<h2 class="aboutus-h2">THE SMOOTHTOOL</h2>
<h1 class="aboutus-h1"><?php echo get_theme_mod('smoothrobotics-aboutus-callout-headline', 'ACCELERATE YOUR COMPANYS PRODUCTION')?></h1>
</article>
</section>
<main class="aboutuswrapper">
    <section class="aboutus-intro-wrapper">
        <article class="intro-content">
            <h2><?php echo get_theme_mod('smoothrobotics-aboutus-callout-mainheadline', 'What we do
        for you')?></h2>
<p><?php echo get_theme_mod('smoothrobotics-aboutus-callout-maincontent','Smooth Robotics is born from the need to save time, money, and regrets in welding automatisation. <br><br>
        Because nobody really needs a robot. You need a solution. Our goal is to perfect how to make robots work on the principle 
        of human expertise in both quality and efficiency. 
        <br><br>We want to make you able to use your experiences 
        in the way your robot works with you. 
        Detail and focus should never be lost in translation between 
        human and machine. It should flow naturally. Smooth. 
        We are a spin-out company from University of Southern 
        Denmark and part of the Odense Robotics cluster. 
        <br><br>Contact us! We would be happy to give you a try!' )?></p>
        </article>
        <article class="intro-image">
            <img src="http://localhost/wordpress/wp-content/uploads/2019/11/Group-248.png" alt="">
        </article>
    </section>
    <section class="quoteimagewrapper">
        <article class="quote">
            <h2>“Nobody needs a robot,
            All need a solution.”</h2>
        </article>
        <article class="quoteimage">
<img src="http://localhost/wordpress/wp-content/uploads/2019/11/Group-249.png" alt="">
        </article>
    </section>
    <section class="ourstorywrapper">
        <article class="ourstory-maininfo">
        <h2>Our story</h2>
        <p class="ourstory-info-p">We were founded in 2018, with a 
    tiny group of people, with a very 
    big ambition </p>
        <div class="ourfocus">
        <h3 class="ourstory-headh3">Our Focus?</h3>
        <p class="ourstory-shortinfo">To automate the welding process</p>
        </div>
        <div class="ourgoal">
    <h3 class="ourstory-headh3">Our Goal?</h3>
    <p class="ourstory-shortinfo">To automate the welding process worldwide, and take part in 
        making big productions accelerate and more productive.</p>
        </div>
        </article>
        <article class="ourstory-subinfo">
            <p>Smooth Robotics is born from the need to save time, money, and regrets in welding automatisation. Because nobody really needs a robot. You need a solution. <br><br>

Our goal is to perfect how to make robots work on the principle of human expertise in both quality and efficiency. We want to make you able to use your experiences in the way your robot works with you. Detail and focus should never be lost in translation between human and machine. It should flow naturally. Smooth.<br><br>

We are a spin-out company from University of Southern Denmark and part of the Odense Robotics cluster.<br><br>

Contact us! We would be happy to give you a try!<br><br>

Smooth Robotics is born from the need to save time, money, and regrets in welding automatisation. Because nobody really needs a robot. You need a solution.<br><br>

Our goal is to perfect how to make robots work on the principle of human expertise in both quality and efficiency. We want to make you able to use your experiences in the way your robot works with you. Detail and focus should never be lost in translation between human and machine. It should flow naturally. Smooth.<br><br>

</p>
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