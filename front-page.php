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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<li class="navigationItem"><a class ="navLink" href="<?php echo get_bloginfo( 'wpurl' );?>/#About">About</a></li>
						<li class="navigationItem"><a class ="navLink" href="<?php echo get_bloginfo( 'wpurl' );?>/#Portfolio">Portfolio</a></li>
						<li class="navigationItem"><a class ="navLink" href="<?php echo get_bloginfo( 'wpurl' );?>/#Services">Services</a></li>
						<li class="navigationItem"><a class ="navLink" href="<?php echo get_bloginfo( 'wpurl' );?>/blog">Blog</a></li>
						<li class="navigationItem"><a class ="navLink" href="<?php echo get_bloginfo( 'wpurl' );?>/docs/Resume.pdf">Resume</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron">
			<div class="container">
				<div class="col-md-6">
						<h1 class="glenName"><?php echo get_bloginfo( 'name' ); ?></h1>
						<h2 class="glenTagLine"><?php echo get_bloginfo( 'description' ); ?></h2>
				</div>
			</div>
		</div>
			<div class="bodyContent">
				<h1 id="About">About</h1>
				<img id="myPhoto" src="<?php echo get_bloginfo('template_directory'); ?>/img/me.jpg" />
				<p>I'm Glen Knight, and I'm a Web Developer, Web Designer and Programmer located in Brooklyn, New York.</p>
				<p>I graduated from Florida International University in 2013, with a Bachelor's Degree in Information Technology. I have experience in various technologies and aspects of the Information Technology industry.
				I have worked in Change Management, as well as the IT Service Management space. I am currently a Consultant by day, and A freelance developer by evening and weekend.</p>
				<p>I enjoy working in Web Development because everything we do is being integrated into "The Cloud", and more and more frameworks, languages, and apps are web based. Some good examples are: Google Drive, Google Maps, Spotify(Web), TurboTax, etc.</p>
				<p>I'm proficient in many web technologies, such as HTML, CSS, and Javascript, as well as Java for more desktop application programming. I'm currently learning JQuery, NodeJs, ExpressJs, and MongoDB as well as a few frameworks, such as AngularJs, Bootstrap, ReactJs, and MeteorJs.</p>
				<p>I am also becoming proficient in WordPress and custom themeing and plugin development.</p>
				<p>Please feel free to browse this site, my code repositories, Twitter, portfolio section, and blog to keep up to date with my work. Don't hesitate to connect for project inquiries, freelance work, or just to chat!</p>
				<p><b>I am available for Web Development work in New York City, or remotely for any other location</b></p>
				<p>I look forward to hearing from you!</p>
				<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
			<div class="portfolioContent">
				<hr />
				<h1 id="Portfolio">Portfolio</h1>
				<div class="col-md-4">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gamma.png" alt="Portfolio Item" class="portfolioItem">
					<h2>Gamma:Photo Sharing App</h2>
					<p>A demo site for a ficticious photo sharing app.</p>
					<a class="btn btn-default btn-lg" href="<?php echo get_bloginfo('template_directory'); ?>/photoAppSite/index.html" role="button">View Site</a>
					<a class="btn btn-default btn-lg" href="https://github.com/glenak1911/photoAppSite" role="button">View Code</a>
				</div>
				<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
			<div class="servicesContent">
				<hr />
				<h1 id="Services">Services</h1>
				<br>
				<h2>What I Do</h2>
				<p>I aim to create rich and robust desktop, server side, and web applications that are aesthetically appealing, solidly constructed, and intiuitive to use.</p>
				<p>There are many elements to consider in order to effecively run a business, and we cannot deny the importance of having an online presence. This is true across all industries, whether you are a designer, writer, mechanic, musician, etc.</p>
				<p>Let's chat and discuss your needs. I am based in New York City, but I am willing to work remotely as well.</p>
				<br>
				<h2>Technologies Utilized</h2>
				<ul id="serviceList">
					<li>HTML</li>
					<li>CSS</li>
					<li>Javascript</li>
					<li>Bootstrap</li>
					<li>Node.js</li>
					<li>AngularJS</li>
					<li>ExpressJS</li>
					<li>JQuery</li>
					<li>Relational/NoSQL DB</li>
					<li>Java</li>
					<li>Python</li>
					<li>WordPress</li>
				</ul>
			<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
		<footer class="footer footerContainer">
			<div id="footer" class="container">
					<div class="socialMedia">
						<a target = "_blank"  class="fa fa-twitter" href="https://twitter.com/Kn1ghtVisionNYC"></a>
						<a target = "_blank" class="fa fa-linkedin" href="https://www.linkedin.com/in/glen-knight-2a5b712b"></a>
						<a target = "_blank" class="fa fa-github" href="https://github.com/glenak1911"></a>
					</div>
					Copyright &#169;
					No one at all. Go to town.
			</div>
		</footer>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		  ga('create', 'UA-77914766-1', 'auto');
		  ga('send', 'pageview');
		</script>
		<!--Vendor Scripts-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>		<!--Custom Scripts-->
		<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/knightGlen.js"></script>
		<script src="<?php echo get_bloginfo('template_directory'); ?>/scripts/smoothScroll.js"></script>
	</body>
</html>
