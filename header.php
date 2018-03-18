<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8"/>
		<link rel="icon" href="favicon.ico" type="image/x-icon" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo get_bloginfo( 'name' ); ?>: <?php echo get_bloginfo( 'description' ); ?></title>
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo get_bloginfo('template_directory'); ?>/css/style.css" />
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    <?php wp_head(); ?>
	</head>
	<body>
		<nav class="navbar navbar-inverse navbar-static-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				</div>
				<div id="bs-example-navbar-collapse-1" class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li class="navigationItem"><a class ="navLink" href="#About">About</a></li>
						<li class="navigationItem"><a class ="navLink" href="#Portfolio">Portfolio</a></li>
						<li class="navigationItem"><a class ="navLink" href="#Services">Services</a></li>
						<li class="navigationItem"><a class ="navLink" href="https://knightglen.com/blog">Blog</a></li>
						<li class="navigationItem"><a class ="navLink" href="docs/Resume.pdf">Resume</a></li>
					</ul>
				</div>
			</div>
		</nav>
