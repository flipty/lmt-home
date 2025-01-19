<footer>
  <div class="container">
    <div class="footer-areas">
      <div class="footerlinks">
        <p>LMT HOME - <?php echo get_field('address', 'options');?></p><br>
        <a href="tel:<?php echo get_field('phone', 'options');?>"><?php echo get_field('phone', 'options');?></a><br>
        <a href="mailto:<?php echo get_field('email', 'options');?>"><?php echo get_field('email', 'options');?></a> 
      </div>
      <div class="certifications">
        <a href="https://maps.app.goo.gl/SNK24rfUcofryeeP9" target="_blank"><img src="/wp-content/themes/lmthome/images/google.png" alt="" class="google"></a>
        <a href="https://www.facebook.com/lmthome4u" target="_blank"><img src="/wp-content/themes/lmthome/images/facebook.svg" alt="" class="fb"></a>
        <img src="/wp-content/themes/lmthome/images/bbb.png" alt="" class="bbb">
        <img src="/wp-content/themes/lmthome/images/mn.png" alt="" class="mn">
        <img src="/wp-content/themes/lmthome/images/epa.png" alt="" class="epa">
      </div>      
    </div>
  </div>
</footer>

<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/jquery-3.7.1.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/owl.carousel.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/vendor/lightbox.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/lmt.js"></script>
<?php wp_footer(); ?>
<script>
    lightbox.option({
      'resizeDuration': 200,
      'wrapAround': true,
      'showImageNumberLabel': false
    })
</script>

</body>
</html>
