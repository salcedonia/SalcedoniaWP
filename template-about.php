<?php
/**
 * Template Name: About
 */
?>
<?php get_header(); ?>

<!-- About Section -->
<section id="about-intro-section" data-speed="4" data-type="background">
  <h2>
    <i class="fa fa-quote-left"></i> A person who never made a mistake never tried anything new.<i class="fa fa-quote-right"></i> – Albert Einstein
  </h2>
</section>

<!-- About Section -->
<section id="about-about-section" data-speed="4" data-type="background">
  <div class="container pt">
    <div class="row">
    <div class="col-lg-8 col-lg-offset-2">
      	<!-- Columns Section -->
	<div class="row mt centered">
    	  <h2>Random Facts</h2>
    	  <br/>
    	  <br/>
    	  <?php 
    	    $about_col = rwmb_meta( 'wtf_about_col' );
            foreach ( $about_col as $value ) { ?>

            <div class="col-lg-3">
              <?php echo $value; ?>
           </div>
	  <?php } ?>
	</div><!-- /.row -->

	<div class="row mt">
	  <!-- About Left Text-->
	  <div class="col-lg-7">
      	    <?php echo rwmb_meta( 'wtf_about_left_txt' ); ?>
           </div><!-- /.colg-lg-7 --> 

	  <!-- About Right Text-->
	  <div class="col-lg-3 col-lg-offset-1">
      	    <?php echo rwmb_meta( 'wtf_about_right_txt' ); ?>
    	  </div><!-- /.colg-lg-3 --> 
	</div><!-- /.row -->
    </div><!-- /.col-lg-8 -->
  </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /section -->

<!-- Comments Section -->
<section id="about-comments-section" data-speed="4" data-type="background">
  <div class="container pt">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
	<?php comments_template('', true); ?>
      </div><!-- /.col-lg-8 -->
    </div><!-- /.row -->
  </div><!-- /.container -->
</section><!-- /section -->

<?php get_footer(); ?>