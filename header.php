<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<!-- mobile meta (hooray!) -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<!-- or, set /favicon.ico for IE10 win -->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	    <link href='http://fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
		<!-- wordpress head functions -->
		<?php wp_head(); ?>
		<!-- end of wordpress head -->

		<!-- drop Google Analytics Here -->
		<!-- end analytics -->

	</head>

	<body <?php body_class(); ?>>

	    <header class='site-header'>
	        <div class='site-header-content container'>
	            <div class='pull-left'>
	                <h1 class='site-title'>
						<a href="<?php echo home_url(); ?>" rel="nofollow">Xenia Tay</a>
					</h1>
	                <h2 class='site-subheading'>Design and Development</h2>
	                <h3 class='site-desc'>Computer Science, University of Waterloo</h3>
	            </div>
	            <div class='social pull-right'>
	                <ul class='social-links'>
	                    <li>
	                        <a href='http://www.github.com/xeniatay' title='Github' class='social-github'>Github</a>
	                    </li>
	                    <li>
	                        <a href='http://www.twitter.com/xeniatay' title='Twitter' class='social-twitter'>Twitter</a>
	                    </li>
	                    <li>
	                        <a href='http://ca.linkedin.com/in/xeniatay/' title='LinkedIn' class='social-linkedin'>LinkedIn</a>
	                    </li>
	                    <li>
	                        <a href='http://xeniatay.com/Xenia_Tay_Resume.pdf' title='Resume' class='social-resume'>Resume</a>
	                    </li>
	                </ul>
	            </div>
	        </div>
	    </header>