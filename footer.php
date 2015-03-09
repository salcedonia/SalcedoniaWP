</div><!-- end of wrapper-->
<?php gents_wrapper_end(); // after wrapper hook ?>
<?php gents_container_end(); // after container hook ?>

<!-- +++++ Footer Section +++++ -->
<footer id="footer">
  <div class="container">
    <a class="back-to-top-link" href="#"><i class="fa fa-arrow-up"></i></a>
    <?php
      $count_posts = wp_count_posts();
      if ($count_posts->publish > 0) {
    ?>
      <div class="row">
        <div class="col-lg-6">
          <?php dynamic_sidebar('footer-left'); ?>
        </div>
        <div class="col-lg-6">
          <?php dynamic_sidebar('footer-middle'); ?>
        </div>
        <!--<div class="col-lg-6">
          <?php dynamic_sidebar('footer-right'); ?>
        </div> -->
      </div><!-- /row -->
      <hr/>
      <?php
      }
      ?>
      <div class="row">
        <div class="col-lg-12">
          <p>
            <strong>Javier Salcedo</strong>© 2015. All Rights Reserved. The site is built on <strong>HTML5</strong>, <strong>CSS3</strong>, <strong>Wordpress</strong>, <strong>Bootstrap</strong> and <strong>jQuery</strong> and hosted in <strong>AWS</strong>. Fonts are <strong>Arvo</strong> and <strong>Open Sans</strong>. 
         </p>
        </div> <!-- /.col-lg-12 -->
      </div> <!-- /.row -->
    </div><!-- /container -->
</footer><!-- end #footer -->

<?php wp_footer(); ?>

</body>
</html>