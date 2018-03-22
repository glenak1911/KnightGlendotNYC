<?php get_header(); ?>
		<div class="jumbotron">
			<div class="container">
				<div class="col-md-6">
						<h1 class="glenName"><?php echo get_bloginfo( 'name' ); ?></h1>
						<h2 class="glenTagLine typewriter"><?php echo get_bloginfo( 'description' ); ?></h2>
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
				<div class="col-md-4 portfolioblock">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/gamma.png" alt="Portfolio Item" class="portfolioItem">
					<h2>Gamma:Photo Sharing App</h2>
					<p>A demo site for a ficticious photo sharing app.</p>
					<a class="btn btn-default btn-lg" href="<?php echo get_bloginfo('template_directory'); ?>/photoAppSite/index.html" role="button">View Site</a>
					<a class="btn btn-default btn-lg" href="https://github.com/glenak1911/photoAppSite" role="button">View Code</a>
				</div>
				<div class="col-md-4 portfolioblock">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/yannipaul.png" alt="Portfolio Item" class="portfolioItem">
					<h2>Yanni Paul</h2>
					<p>A Place For Those With Too Many Interests</p>
					<br><br>
					<a class="btn btn-default btn-lg" href="https://yannipaul.com" role="button">View Site</a>
					<a class="btn btn-default btn-lg" href="https://github.com/glenak1911/Yannipaul" role="button">View Code</a>
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
<?php get_footer(); ?>
