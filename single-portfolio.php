<?php get_header(); ?>

<div id="content-project">

 <?php if (have_posts()) : ?>

 <?php while (have_posts()) : the_post(); ?>


 <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

  <!-- Portfolio Section -->
  <div class="container pt">
    <div class="row mt">
     <div class="col-lg-8 col-lg-offset-2">

      <?php if( rwmb_meta( 'wtf_portfolio_top_title' ) !== '' ) { ?>
      <?php echo rwmb_meta( 'wtf_portfolio_top_title' ); ?>
      <hr>
      <?php } ?> 

      <?php the_content(); ?>

    </div>
  </div><!-- row -->

  <div class="row mt">  
    <div class="col-lg-8 col-lg-offset-2 centered">
      <?php                           
      $images = rwmb_meta( 'thickbox', 'type=image' );
      foreach ( $images as $image ) { 
        echo "<p><img class='img-responsive' src='{$image['full_url']}' alt='{$image['alt']}' /></p>";
      } ?>
      <?php if(rwmb_meta('wtf_port_cats') == 'value1') {?>
      <p><bt><?php _e('Type','gents'); ?>: </span><?php echo get_the_term_list( get_the_ID(), 'portfolio_cats', '',', ',' ') ?></bt></p>
       <?php } ?>
    </div><!-- col-lg-8 -->
  </div>
</div><!-- container -->      
</article><!-- end of #post-<?php the_ID(); ?> -->


<?php endwhile; ?> 

<?php else : ?>

  <div class="container">
   <article id="post-not-found" class="hentry clearfix">
    <header>
     <h1 class="title-404"><?php _e('404 &#8212; Fancy meeting you here!', 'gents'); ?></h1>
   </header>
   <section>
     <p><?php _e('Don&#39;t panic, we&#39;ll get through this together. Let&#39;s explore our options here.', 'gents'); ?></p>
   </section>
   <footer>
     <h6><?php _e( 'You can return', 'gents' ); ?> <a href="<?php echo home_url(); ?>/" title="<?php esc_attr_e( 'Home', 'gents' ); ?>"><?php _e( '&#9166; Home', 'gents' ); ?></a> <?php _e( 'or search for the page you were looking for', 'gents' ); ?></h6>
     <?php get_search_form(); ?>
   </footer>

 </article>
</div>

<?php endif; ?>  

</div><!-- end of #content -->


<?php get_footer(); ?>