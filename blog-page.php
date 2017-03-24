<?php /* Template Name: BlogPost */ ?>
<?php get_header(); ?>



<!-- JUMPS -->


<div class="banner homepage pages ">
  <div class="banner-content" >
    <h1><?php the_title(); ?></h1>
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
    <div class="content-wrapper">

      <div class="content blog">
        <h1><?php the_title(); ?></h1>
        <div class="blog-post-wrapper">
          <?php
          // the query
          $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>

          <?php if ( $wpb_all_query->have_posts() ) : ?>
            <!-- the loop -->
            <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
              <?php if ( has_post_thumbnail() ) : ?>
              <div class="blog-item shadow">
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                <?php the_post_thumbnail(); ?>
                </a>
                <?php endif; ?>
                <div class="post-details-wrapper">
                  <p class="post-details" ><?php the_author(); ?> | <?php the_date(); ?></p>
                  <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                  <p class="excerpt"> <?php the_excerpt(); ?> </p>
                  <p><a class="read-more" href="<?php the_permalink(); ?>">Read More</a></p>
                </div>
              </div>
            <?php endwhile; ?>
            <!-- end of the loop -->


        </div>





        	<?php wp_reset_postdata(); ?>

        <?php else : ?>
        	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>


      </div>

    </div>

  </div>
</main>

<?php include 'jumps.php' ?>



<!-- footer -->
<?php get_footer(); ?>
