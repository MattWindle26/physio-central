<?php get_header(); ?>



<!-- JUMPS -->


<div class="banner homepage ">
  <div class="banner-content" >
    <h1>Are you experiencing pain or discomfort?</h1>
    <div class="buttons">
      <span><a href="">BOOK ONLINE</a></span>
      <span><a href="">TESTIMONIALS</a></span>
    </div>
  </div>
  <div class="mobile-banner-content shadow" >
    <p>Universal Trade Centre. Unit 2104, 21/F, 3-5A Arbuthnot Road. Central</p>
  </div>
</div>
<div class="action-banner">
  <h3>Take a look at our blog</h3>
  <a href="/blog/">Our Blog</a>
</div>
<div class="action-banner book-now">
  <h3>Book an Appointment</h3>
  <a href="/blog/">Book Now!</a>
</div>

<main>
  <div class="inner-container">
    <div class="content">

      <h1><?php the_title(); ?></h1>
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
      endwhile; else: ?>
      <p>Sorry, no posts matched your criteria.</p>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php include 'jumps.php' ?>



<!-- footer -->
<?php get_footer(); ?>
