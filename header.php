<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>
	</head>

	<body <?php body_class(); ?>>

		<div id="container">

			<header class="header" role="banner">

				<div id="inner-header" class="wrap cf">

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<!--<p id="logo" class="h1"><?php bloginfo('name'); ?></p>-->

					<a class="logo" href="<?php echo home_url(); ?>" rel="nofollow"><img src="<?php echo get_template_directory_uri(); ?>/library/images/nyitoalairas.png " alt="Janzsó Tamás aláírása"></a>
					
					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>

                    <?php $args = array(
                        'depth'       => 1,
                        'sort_column' => 'menu_order, post_title',
                        'menu_class'  => 'menu',
                        'include'     => '',
                        'exclude'     => '',
                        'echo'        => true,
                        'show_home'   => 'Hírek',
                        'link_before' => '',
                        'link_after'  => '' );
                        
                        wp_page_menu( $args ); 
                    
                    ?> 
                        
				</div>

			</header>
