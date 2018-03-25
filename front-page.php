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
				<p><?php the_author_meta( 'description' ); ?> </p>
				<p>Glen Knight here, IT Professional based in Brooklyn, New York.</p>
				<p>I graduated from Florida International University in 2013, with a Bachelor's Degree in Information Technology. I pursued a career in IT because of a love for technology, and a driving sense of curiosity to figure out how things work, and build cool things for the benefit of others and myself.</p>
				<p>This site and blog are meant to function as a portfolio, as well as document my thought processes as I move deeper into the world of tech. I primarily work in the world of DevOps and Web Development, which are my primary areas of interest. I am also interested in IoT and developing on the Raspberry PI and Arduino platforms as well.</p>
				<p>My hope is that as I deepen my understanding, and experiment with different projects, others on the same path can benefit from my findings and experiences.</p>
				<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
			<div class="portfolioContent">
				<hr />
				<h1 id="Portfolio">Portfolio</h1>
				<div class="col-md-4 ">
					   <img src="<?php echo get_bloginfo('template_directory'); ?>/img/gamma.png" alt="Portfolio Item" class="portfolioItem">
					    <h2>Gamma</h2>
					    <p>A demo site for a ficticious photo sharing app.</p>
					    <a class="btn btn-default btn-lg" href="<?php echo get_bloginfo('template_directory'); ?>/photoAppSite/index.html" role="button">View Site</a>
					    <a class="btn btn-default btn-lg" href="https://github.com/glenak1911/photoAppSite" role="button">View Code</a>
				</div>
				<div class="col-md-4">
					<img src="<?php echo get_bloginfo('template_directory'); ?>/img/yannipaul.png" alt="Portfolio Item" class="portfolioItem">
					<h2>Yanni Paul</h2>
					<p>A Place For Those With Too Many Interests</p>
					<a class="btn btn-default btn-lg" href="https://yannipaul.com" role="button">View Site</a>
					<a class="btn btn-default btn-lg" href="https://github.com/glenak1911/Yannipaul" role="button">View Code</a>
				</div>
				</div>
				<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
			<div class="servicesContent">
				<hr />
				<h1 id="Skillset">Services</h1>
				<br>
				<h2>What I Do</h2>
				<p>I work as sort of a jack of all trades. I have experience working on the infrastructure side, as well as the development side, and also in the middle coordinating and minimizing bottlenecks between both sides.</p>
				<p>I enjoy doing development work, and a goal for this year is to contribute more to open source projects. I have enjoy working with cloud based technology, especially Amazon Web Services. I have obtained the associate level certificates and plan to sit the professional level exams within the next year.</p>
				<p>In the meantime, I plan to continue studying, and to continue getting better.</p>
				<br>
				<h2>Skills Inventory</h2>
				<div class="row">
					<div class="col-md-4">
						<h3>Platforms</h3>
						<ul id="serviceList">
							<li>Amazon Web Services</li>
							<li>Wordpress</li>
							<li>Databases(MSSQL/MySql)</li>
						</ul>
			    </div>
					<div class="col-md-4">
						<h3>Languages</h3>
						<ul id="serviceList">
							<li>HTML/CSS</li>
							<li>Python</li>
		          <li>Ruby</li>
							<li>Javascript</li>
							<li>Java</li>
							<li>SQL</li>
						</ul>
			    </div>
					<div class="col-md-4">
						<h3>Frameworks</h3>
						<ul id="serviceList">
							<li>Bootstrap</li>
							<li>AngularJS</li>
							<li>ExpressJS</li>
							<li>JQuery</li>
							<li>Node.js</li>
						</ul>
			    </div>
			</div>
			<p><a class="topPage" href="#"mainHero>Top</a></p>
			</div>
<?php get_footer(); ?>
