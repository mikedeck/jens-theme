<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   <meta charset="<?php bloginfo( 'charset' ); ?>" />
   <title><?php
   wp_title( '|', true, 'right' );
   bloginfo( 'name' );
   $site_description = get_bloginfo( 'description', 'display' );
   if ( $site_description && ( is_home() || is_front_page() ) ) {
      echo " | $site_description";
   }
   ?></title>

   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
   <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
   <header id="page-header">
      <div class="container">
         <div class="row">
            <div id="logo" class="col-sm-4">&nbsp;</div>
            <hgroup id="site-title" class="col-sm-8">
               <h1 class="sitename">see<b>mac</b>run.</h1>
               <h2>A girl, her dog, and a mission</h2>
            </hgroup>
         </div>
      </div>
      <nav class="navbar navbar-default" role="navigation">
         <div class="container">
            <div class="navbar-header">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
               </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
               <?php get_header_nav(); ?>
               <form class="navbar-form navbar-right" role="search">
                  <div class="input-group site-search">
                     <span class="input-group-addon"><span class="glyphicon glyphicon-search"></span></span>
                     <input type="text" class="form-control" placeholder="Search">
                  </div>
               </form>
            </div><!-- /.navbar-collapse -->
         </div>
      </nav>
   </header>