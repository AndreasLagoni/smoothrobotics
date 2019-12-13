<?php wp_footer();?>
<footer class="footerwrapper">
<section class="footerwrapper-content">
<article class="socials">
    <a href="">
<i class="fab fa-youtube-square"></i>
</a>
<a href="">
<i class="fab fa-facebook-square"></i>
</a>
<a href="">
    <i class="fab fa-linkedin"></i> 
</a>
</article>
<article class="footernav">
<?php wp_nav_menu (

array(
    'theme_location' => 'footer-menu'
)
);?>
</article>
<article class="footerinfo">
<p class="footer-p">Smooth Robotics </p>
<p class="footer-p">2019</p>
<p class="footer-p">CVR: 39281727</p>
<p class="footer-p">
<a href="<?php  echo get_site_url().'/privacy-policy';  ?>">Privacy Policy</a>    
</p>
</article>
</section>

</footer>
</body>
</html>