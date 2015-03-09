<?php
/**
 * Template Name: Blog
 */
?>
<?php get_header(); ?>
<?php 
global $more; 
$more = 0; 
global $wp_query;
if ( get_query_var('paged') ) {
	$paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
	$paged = get_query_var('page');
} else {
	$paged = 1;
}
query_posts( array( 'post_type' => 'post', 'paged' => $paged ) );
?>   

<?php 
if (have_posts()) : ?>
<?php
	$c = 0; 
?>

<?php while (have_posts()) : the_post(); ?>
<?php
	// increment the counter
	$c++; 

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	  <div id="white">
            <div class="container">
              <div class="row">
                <div class="col-lg-8 col-lg-2-offset">

                  <section class="post-meta">          
		    <p class="author-avatar"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?><ba><?php the_author_meta( 'display_name' ); ?></ba></p>
		    <p><bd><i class="fa fa-calendar"></i> <time class="post-date"><?php the_date(); ?></time></bd></p>                
                  </section><!-- end of .post-meta -->

                  <header>
                    <h4 class="post-title"><?php the_title(); ?></h4>
                  </header>
                  <section class="post-entry">
                    <?php if ( has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                      <?php the_post_thumbnail(); ?>
                    </a>
                    <?php endif; ?>

                    <?php the_excerpt(); ?>

                    <?php custom_link_pages(array(
                    'before' => '<nav class="pagination"><ul>' . __(''),
                    'after' => '</ul></nav>',
                            'next_or_number' => 'next_and_number', # activate parameter overloading
                            'nextpagelink' => __('&rarr;'),
                            'previouspagelink' => __('&larr;'),
                            'pagelink' => '%',
                            'echo' => 1 )
                            ); ?>

                          </section><!-- end of .post-entry -->  

                        </div> <!-- /col-lg-8 -->
                      </div> <!-- /row -->
                    </div> <!-- /container -->
                  </div> <!-- /white -->
                </article><!-- end of #post-<?php the_ID(); ?> -->

<?php endwhile; ?> 
<?php if (  $wp_query->max_num_pages > 1 ) : ?>
              <div class="container">

              <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                  <hr>
              <nav>
                <ul class="pager">
                 <li class="previous"><?php next_posts_link( __( '&#8249; Older posts', 'gents' ) ); ?></li>
                 <li class="next"><?php previous_posts_link( __( 'Newer posts &#8250;', 'gents' ) ); ?></li>
               </ul><!-- end of .navigation -->
             </nav>
           </div>
         </div>
       </div>

<?php endif; ?>
<?php else : ?>

   <article id="post-not-found" class="hentry clearfix">
     <header>
       <h1 class="title-404"><?php _e('No posts have been yet published!', 'gents'); ?></h1>
     </header>
     <section>
        <p><?php _e('Don&#39;t be impatient, and wait for new posts to arrive.', 'gents'); ?></p>
     </section>
     <footer>
     </footer>
   </article>

<?php endif; ?>  
</div> <!-- /col-lg-8 -->
<?php get_footer(); ?>