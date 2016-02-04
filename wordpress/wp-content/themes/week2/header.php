<!doctype html>
<html class="no-js" lang="">
    <head>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
        <title><?php bloginfo('name'); ?></title>  
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type')?>; charset=<?php bloginfo('charset') ?>">
        <?php wp_head(); ?>     
        
    </head>
    <body <?php body_class($class); ?>>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <header class="blue">
            <div class="row">
                <div class="col-sm-3">
                    <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/AAA_logo.png">
                </div>
                <div class="col-sm-6">
                    <h1><?php bloginfo('name'); ?></h1>
                    <h2>schedule an appointment today (952)888-3805</h2>
                </div>
                <div class="col-sm-3">
                    <img src="<?php echo bloginfo('url'); ?>/wp-content/themes/week2/images/BoschServiceLogo.jpg">
                </div>
           </div>
           <nav id="mainNav" class="navbar navbar-default">
              <div class="container-fluid">
                    <div class="navbar-header">
                      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                      </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                      <ul class="nav navbar-nav">
                       <!--  <?php wp_nav_menu( array( 'menu' => 'MainNav') ); ?>?> -->
                        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
                        <li><a href="#maintenance">Maintenance</a></li>
                        <li><a href="#repair">Repairs</a></li>
                        <li><a href="#import">Imports</a></li>
                        <li><a href="#contact">Contact</a></li>
                      </ul>
                     
                    </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
        </header>