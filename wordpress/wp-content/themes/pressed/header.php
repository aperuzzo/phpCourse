<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	<title><?php bloginfo('name'); ?></title>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type')?>; charset=<?php bloginfo('charset') ?>">
    <?php wp_head(); ?>  
	<script src="http://use.edgefonts.net/josefin-slab.js"></script>
	<script src="http://use.edgefonts.net/merriweather.js"></script>
</head>
	<body <?php body_class($class); ?> class="home">
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<nav>
        <ul>
        	 <?php wp_nav_menu( array( 'menu' => 'MainNav') ); ?>
          <!-- <li>Home</li>
          <li>WordPress</li> -->
        </ul>
			</nav>
		</header>