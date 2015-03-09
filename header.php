<!doctype html>
<!--[if lt IE 7 ]> <html class="no-js ie6" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="no-js ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="no-js ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>

<meta charset="<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

<title><?php wp_title('&#124;', true, 'right'); ?><?php bloginfo('name'); ?></title>
<?php if( bi_get_data('custom_favicon') !== '' ) : ?>
        <link rel="icon" type="image/png" href="<?php echo bi_get_data('custom_favicon'); ?>" />
    <?php endif; ?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<!-- Google Fonts -->
<link href='http://fonts.googleapis.com/css?family=Arvo:400,700,400italic,700italic' rel='stylesheet' type='text/css' />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,800,700' rel='stylesheet' type='text/css'>

<!-- Font Awesome -->
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="<?php get_template_directory_uri();?>/js/html5shiv.js"></script>
      <script src="<?php get_template_directory_uri();?>/js/respond.min.js"></script>
    <![endif]-->

<!-- Form validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.13.1/jquery.validate.min.js"></script>

<!-- Recaptcha -->
<script src='https://www.google.com/recaptcha/api.js'></script>

<?php wp_head(); ?> 

</head>

<body <?php body_class(); ?>>
                 
<?php gents_container(); // before container hook ?>
 
  <?php gents_header(); // before header hook ?>
  <header>
   
    <?php gents_in_header(); // header hook ?>

<nav role="navigation">
  <div class="navbar navbar-inverse navbar-static-top">
    <div class="container">
      <!-- .navbar-toggle is used as the toggle for collapsed navbar content -->
      <div class="col-lg-3 left navbar-header">
        <button type="button" class="navbar-toggle pull-left" data-toggle="collapse" data-target=".navbar-responsive-collapse">
          <i class="fa fa-bars"></i>
        </button>
        <?php if( bi_get_data('custom_logo') !== '' ) { ?>
        <div id="logo">
          <a href="<?php echo home_url(); ?>/" title="<?php bloginfo( 'name' ); ?>" rel="home">
            <img src="<?php echo bi_get_data('custom_logo'); ?>" alt="<?php bloginfo( 'name' ) ?>" />
          </a>
        </div>
        <?php } else { ?>
          <?php if (is_front_page()) { ?>
          <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><b><?php bloginfo( 'name' ) ?></b></a>
          <?php } else { ?>
            <a class="navbar-brand" href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="homepage"><b><?php bloginfo( 'name' ) ?></b></a>
            <?php } } ?>
       </div><!-- /.navbar-header -->
       <div class="col-lg-6 navbar-collapse collapse navbar-responsive-collapse">
         <?php
           $args = array(
             'theme_location' => 'top-bar',
             'depth'      => 2,
             'container'  => false,
             'menu_class'     => 'nav navbar-nav navbar-right',
             'walker'     => new Bootstrap_Walker_Nav_Menu()
           );
           wp_nav_menu($args);
         ?>
       </div><!-- /.navbar-collapse -->
       <div class="col-lg-3 right social">
         <ul class="list-unstyled list-inline">
           <li><a class="fa fa-facebook" href="http://www.facebook.com/salcedonia.de.frutas" title="Facebook" target="_blank"></a></li>
           <li><a class="fa fa-linkedin-square" href="de.linkedin.com/in/javiersalcedo
" title="LinkedIn" target="_blank"></a></li>
           <li><a class="fa fa-google-plus-square" href="https://plus.google.com/110732083747783832636" title="Google+" target="_blank"></a></li>  
           <li><a class="fa fa-github" href="https://github.com/salcedonia" title="Github" target="_blank"></a></i></li>            
           <li><a class="fa fa-rss-square" href="http://www.javiersalcedo.net/?feed=rss2" title="RSS Feed" target="_blank"></a></li>
           <li>
             <button type="button" class="btn-search" data-toggle="collapse" data-target="#search-panel"><i class="fa fa-search"></i></button>
           </li>
         </ul>
       </div><!-- /.social -->
     </div> <!-- container -->
   </div> <!-- navbar -->         
 </nav> <!-- nav -->
<?php get_search_form(); ?>
</header><!-- end of header -->
<?php gents_header_end(); // after header hook ?>
<?php gents_wrapper(); // before wrapper ?>

<div id="wrapper" class="clearfix">
<?php gents_in_wrapper(); // wrapper hook ?>