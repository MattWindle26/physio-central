<?php wp_footer(); ?>

<footer>
  <div class="social-media" >
    <a href='https://www.facebook.com/physiocentralhongkong/' title="Follow us on Facebook"><div class="iconbg"><img class="icons" src="/assets/images/icons/facebook.svg" alt="Facebook logo"></div></a>
    <a href='https://www.instagram.com/physiocentralhk/' title="Follow us on Instagram"><div class="iconbg"><img class="icons" src="/assets/images/icons/instagram.svg" alt="Instagram logo"></div></a>
    <a href='' title="Read our blog posts"><div class="iconbg"><img class="icons" src="/assets/images/icons/contract.svg" alt="Blog logo"></div></a>
  </div>
  <div class="quick-links" >
    <?php wp_nav_menu( array( 'footer' => 'footer' ) ); ?>
  </div>
  <div class="copyright" >
    <p>Powered by <strong><a href="" >Physio123</a></strong></p>
  </div>

</footer>



</html>

<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/dist/js/main.js"></script>
