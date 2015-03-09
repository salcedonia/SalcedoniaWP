<?php
/**
 Template Name: Portfolio
 */
 ?>
 <?php get_header(); ?>

 <div class="container pt">

  <div class="row mt">
    <div class="col-lg-8 col-lg-offset-2">
      <?php if( rwmb_meta( 'wtf_portfolio_title' ) !== '' ) { ?>
      <?php echo rwmb_meta( 'wtf_portfolio_title' ); ?>
      <hr>
      <?php } ?> 

      <?php if (have_posts()) : ?>

      <?php while (have_posts()) : the_post(); ?>
      <?php the_content(); ?>
      <?php endwhile; ?> 
    <?php endif; ?> 

    </div>
  </div>

  <?php
  $loop = new WP_Query(array('post_type' => 'portfolio', 'posts_per_page' => -1));
  $count =0;
  ?>


  <div class="row mt centered">
    <div class="col-lg-8 col-lg-offset-2">
    <?php if ( $loop ) : 
    while ( $loop->have_posts() ) : $loop->the_post(); ?>

    <div class="col-lg-6">
     <?php if ( has_post_thumbnail()) : ?>
     <a class="zoom green" href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
      <?php the_post_thumbnail(); ?>
    </a>
  <?php endif; ?>
  
  <?php if(bi_get_data('project_title', '1')) {?>
  <p><?php the_title(); ?></p>
  <?php } ?>
</div> <!-- /.col-lg-6 -->


<?php endwhile; else: ?>
</div>


<div class="error-not-found">Sorry, no portfolio entries for while.</div>

<?php endif; ?>

</div><!-- /.col-lg-8 -->
</div><!-- /.container -->

<?php get_footer(); ?>