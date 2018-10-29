<?php
/**
 * Template Name: Front Page
 */
?>

<?php get_header(); ?>

<div class="container-colour">

<div id="particles-js"></div>


<!-- home wrapper -->

		<div class="home-wrapper">
			
			<div class="container">
				
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						
						<div class="home-content">
							
							<h1 class="white-text"><?php the_field( 'home_hero_h1' ); ?></h1>
							
							<h2 class="white-text"><?php the_field( 'home_hero_h2' ); ?></h2>
							
							
						</div>
					</div>
					<!-- /home content -->

				</div>
			</div>
		</div>
</div>

<div class="space">
	
</div>
	
<div class="bg-1">
		
	<div class="svg-colour-1">
		
		<div id="navbar">
			
		<!-- Nav -->	
		<nav id="nav" class="navbar nav-transparent">
			
			<div class="container">

				<!--  Second navigation  -->
				<ul class="main-nav nav navbar-nav navbar-right">
					
				<!--<ul class="second-nav nav navbar-nav navbar-right">-->
						<li><a href="#about">About</a></li>
						<li><a href="#portfolio">Portfolio</a></li>
						<li><a href="#services">Services</a></li>
						<li><a href="#planning">Planning</a></li>
						<li><a href="#pricing">Pricing</a></li>
						<li><a href="#team">Team</a></li>
				</ul>
				<!-- /Second navigation -->

			</div>
			
		</nav>
		<!-- /Nav -->
		
	</div>
					
	<!--<svg width="100%" viewBox="10 10 45 10">
		
		<polygon points="0,0 0,9 110,20"/>
		
	</svg>-->	
		
	</div>	

<!-- Backgound 1 -->
<div class="up"></div>

	<!-- About -->
	<div id="about" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
							
				<hr/>
					
					<h2><?php the_field( 'home_sub_2' ); ?></h2>



					<h3><?php the_field( 'home_sub_h3_t1' ); ?></h3>



					<h3><?php the_field( 'home_sub_h3_t2' ); ?></h3>


				</div>
				<!-- /Section header -->
				

					<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-cogs" style="color:#000;"></i>
						<h3>Fully Customisable</h3>
						
						<p></p>
						
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-magic" style="color:#000;"></i>
						<h3>Awesome Features</h3>
						<p></p>
						<!--<a href="#">Read more</a>-->
					</div>
				</div>
				<!-- /about -->

				<!-- about -->
				<div class="col-md-4">
					<div class="about">
						<i class="fa fa-mobile" style="color:#000;"></i>
						<h3>Fully Responsive</h3>
						
						<p></p>
						
					</div>
				</div>
				<!-- /about -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /About -->
	
</div>

<div class="svg-colour-2">
	<svg width="100%" viewBox="10 10 45 10">
		
		<polygon points="0,0 0,9 110,20"/>
		
		</svg>
		
</div>
<!-- /Backgound 1 -->

	<!-- Portfolio -->
	<div id="portfolio" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Featured Works</h2>
				</div>
				<!-- /Section header -->

				<!-- Work -->
				<div class="col-sm-3 col-xs-6 work">
					<img class="img" src="https://s3.eu-west-2.amazonaws.com/thatviz/cbd-logo.svg" alt="CB Digital">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Smart Technology</span>
						<h3>CB Digital</h3>
						<div class="work-link">
							<a href="https://www.cbdigital.co.uk"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/work1.jpg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-sm-3 col-xs-6 work">
					<img class="img" src="https://s3.eu-west-2.amazonaws.com/thatviz/natural-cbd-evolution-logo.jpg" alt="Artfull Dodger">
					<div class="overlay"></div>
					<div class="work-content">
						<span>CBD E-liquid Shop</span>
						<h3>Natural CBD Evolution</h3>
						<div class="work-link">
							<a href="http://www.naturalcbdevolution.com"><i class="fa fa-external-link "></i></a>
							<a class="lightbox" href="https://s3.eu-west-2.amazonaws.com/thatviz/natural-cbd-evolution-logo.jpg"><i class="fa fa-search"></i></a>			
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-sm-3 col-xs-6 work">
					<img class="img" src="https://s3.eu-west-2.amazonaws.com/thatviz/song.svg" alt="Donna Summer">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Hommage</span>
						<h3>Donna Summer</h3>
						<div class="work-link">
							<a href="http://www.romanjones.co.uk/other-websites/maj/work/song/"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="https://s3.eu-west-2.amazonaws.com/thatviz/song.svg"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-sm-3 col-xs-6 work">
					<img class="img" src="https://s3.eu-west-2.amazonaws.com/thatviz/indep-logo.jpg" alt="Independent London">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Estate Agent</span>
						<h3>Independent London</h3>
						<div class="work-link">
							<a href="https://www.independentlondon.co.uk"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="https://www.independentlondon.co.uk"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				
			</div>
			
		</div>
				
				<!-- /Work -->

				<!-- Work -->
				
				<div class="container">
					
					<div class="row">
				
				<div class="col-md-6 col-xs-6 work">
					<img class="img-responsive" src="https://s3.eu-west-2.amazonaws.com/thatviz/tv-responsive-pi.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Webdesign</span>
						<h3>Pro Integration</h3>
						<div class="work-link">
							<a href="https://www.prointegration.co.uk"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="https://s3.eu-west-2.amazonaws.com/thatviz/tv-responsive-pi.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

				<!-- Work -->
				<div class="col-md-6 col-xs-6 work">
					<img class="img-responsive" src="https://s3.eu-west-2.amazonaws.com/thatviz/tv-responsive-ad-no-bg.png" alt="">
					<div class="overlay"></div>
					<div class="work-content">
						<span>Your Project</span>
						<h3>Create you project</h3>
						<div class="work-link">
							<a href="#"><i class="fa fa-external-link"></i></a>
							<a class="lightbox" href="https://s3.eu-west-2.amazonaws.com/thatviz/tv-responsive-ad-no-bg.png"><i class="fa fa-search"></i></a>
						</div>
					</div>
				</div>
				<!-- /Work -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Portfolio -->


	<!-- Service -->
	<div id="services" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">What we offer</h2>
				</div>
				<!-- /Section header -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Web Design</h3>
						<!--<p>We create a fully designed website.</p>-->
						<!--<h3><?php the_field( 'service_box_1' ); ?></h3>-->
						<p><?php the_field( 'service_box_1' ); ?></p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-rocket"></i>
						<h3>Graphic Design</h3>
						<!--<p>With design and project management experience, your brand is in expert hands.</p>-->
						<p><?php the_field( 'service_box_2' ); ?></p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-cogs"></i>
						<h3>Creative Idea</h3>
						<p>We have great idea for your website so why not give us try for UX?</p>
						<p><?php the_field( 'service_box_3' ); ?></p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-diamond"></i>
						<h3>Marketing</h3>
						<p>Marketing strategies that suit your budget.</p>
						<p><?php the_field( 'service_box_4' ); ?></p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-pencil"></i>
						<h3>Awesome Support</h3>
						<p>We give great support and that gives our clients piece of mind for their project.</p>
						<p><?php the_field( 'service_box_5' ); ?></p>
					</div>
				</div>
				<!-- /service -->

				<!-- service -->
				<div class="col-md-4 col-sm-6">
					<div class="service">
						<i class="fa fa-flask"></i>
						<h3>Brand Design</h3>
						<p>You want a logo or some branding? Then come to us we'll get it all sorted for you.</p>
						<p><?php the_field( 'service_box_6' ); ?></p>
					</div>
				</div>
				<!-- /service -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Service -->
	
	
	
	<div class="container">
				
				<div class="row">

					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						
							
							<img class="img-responsive" src="https://s3.eu-west-2.amazonaws.com/thatviz/tv-responsive-ad-no-bg.png" alt="">
							

					</div>
					<!-- /home content -->

				</div>
			</div>


	<!-- Why Choose Us -->
	<div id="planning" class="section md-padding bg-grey">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- why choose us content -->
				<div class="col-md-12">
					<div class="section-header">
						<h2 class="title">Why Choose Us</h2>
					</div>
					<h3>THatViz pride ourselves on get you website up and running</h3>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Starting out & planning</p>

<p>We make it our primary concern to understand your vision through in-depth client brainstorming. This is your chance to show us what worked well, what not so well and what you’d like to achieve.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Wire framing</p>

<p>Every design has the customer in mind and our wire frames will document the customer journey from start to finish ensuring a natural flow and progression.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Look and feel</p>

<p>We work to your specifications to present an appealing design that captures the essence of your brand. Our code is written with the end design in mind as our designers are dual compliant as developers, resulting in clean code purposefully designed for your brand.</p>
					</div>
					<div class="feature">
						<i class="fa fa-check"></i>
						<p>Theme build</p>

<p>Clean code equals fast websites. We use the best developer tools to ensure you theme is well engineered, top quality and consistent throughout all of your site and pages.</p>
					</div>
						<div class="feature">
						<i class="fa fa-check"></i>
						<p>Testing and launch</p>

						<p>All stores go through rigorous user acceptance testing and final quality assurance checks.</p>
						
						<div class="section-header">
						<h2 class="title">Considerations</h2>
					</div>
						
						<i class="fa fa-question-circle"></i><p>Budget for your website as a start?</p>
						<i class="fa fa-question-circle"></i><p>What type of website it will be?</p>
						<i class="fa fa-question-circle"></i><p>Is it a new website or an existing website that you need to make changes on?</p>
						<i class="fa fa-question-circle"></i><p>Do you need hosting or a domain?</p>
						<i class="fa fa-question-circle"></i><p>Will it need to be SSL (Secure Sockets Layer) for security?</p>
						<i class="fa fa-question-circle"></i><p>Do you need S.E.O (Search Engine Optimisation)?</p>
						
						
						<p>Helping people and giving them an idea of want we can do for them in regards to branding and their online experience.</p>

					</div>
				</div>
				
			</div>
			
		</div>
		
	</div>

<!-- Why Choose Us -->

<div id="features" class="section md-padding bg-grey">

	<div class="container">
		
		<div class="row">
			
			<div class="col-md-10 col-md-offset-1">
		
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
				    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				    <li data-target="#myCarousel" data-slide-to="1"></li>
				    <li data-target="#myCarousel" data-slide-to="2"></li>
				  </ol>
				
				  <!-- Wrapper for slides -->
				  <div class="carousel-inner">
				    <div class="item active">
				      <!--<img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/social-uni.jpg" alt="Chania">-->
				      <?php $sub_image_1 = get_field( 'sub_image_1' ); ?>
						<?php if ( $sub_image_1 ) { ?>
							<img src="<?php echo $sub_image_1['url']; ?>" alt="<?php echo $sub_image_1['alt']; ?>" />
						<?php } ?>
				      <div class="carousel-caption">
				        <h3>Los Angeles</h3>
				        <p>LA is always so much fun!</p>
				      </div>
				    </div>
				
				    <div class="item">
				      <!--<img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/social-uni.jpg" alt="Chicago">-->
				      <?php $sub_image_1 = get_field( 'sub_image_1' ); ?>
						<?php if ( $sub_image_1 ) { ?>
							<img src="<?php echo $sub_image_1['url']; ?>" alt="<?php echo $sub_image_1['alt']; ?>" />
						<?php } ?>
				      <div class="carousel-caption">
				        <h3>Chicago</h3>
				        <p>Thank you, Chicago!</p>
				      </div>
				    </div>
				
				    <div class="item">
				      <!--<img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/social-uni.jpg" alt="New York">-->
				      <?php $sub_image_1 = get_field( 'sub_image_1' ); ?>
						<?php if ( $sub_image_1 ) { ?>
							<img src="<?php echo $sub_image_1['url']; ?>" alt="<?php echo $sub_image_1['alt']; ?>" />
						<?php } ?>
				      <div class="carousel-caption">
				        <h3>New York</h3>
				        <p>We love the Big Apple!</p>
				      </div>
				    </div>
				  </div>
				
				  <!-- Left and right controls -->
				  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				    <span class="glyphicon glyphicon-chevron-left"></span>
				    <span class="sr-only">Previous</span>
				  </a>
				  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				    <span class="glyphicon glyphicon-chevron-right"></span>
				    <span class="sr-only">Next</span>
				  </a>
				  
			</div>
	
		</div>
		
	</div>
	
</div>

	<!-- Pricing -->
	<div id="pricing" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Pricing Table</h2>
				</div>
				<!-- /Section header -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">BEGINNER WEBSITE</span>
							<div class="price">
								<h3>£500<span class="duration">Complete</span></h3>
							</div>
						</div>
						<ul class="price-content">
							<li>
								<p>WordPress Site</p>
							</li>
							<li>
								<p>WordPress Hosting</p>
							</li>
							<li>
								<p>Maximum 3 Pages</p>
							</li>
							<li>
								<p>No Support</p>
							</li>
						</ul>						<div class="price-btn">
							<a href="#contact"><button class="outline-btn">Get In Touch</button></a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">E-COMMERCE WEBSITE</span>
							<div class="price">
								<h3>£1500<span class="duration">Complete</span></h3>
							</div>
						</div>
						
						<ul class="price-content">
							<li>
								<p>WordPress Site</p>
							</li>
							<li>
								<p>WordPress Hosting</p>
							</li>
							<li>
								<p>Maximum 50 Products & Pages</p>
							</li>
							<li>
								<p>Limited Support</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="#contact"><button class="outline-btn">Get In Touch</button></a>
						</div>					
		
					</div>
				</div>
				<!-- /pricing -->

				<!-- pricing -->
				<div class="col-sm-4">
					<div class="pricing">
						<div class="price-head">
							<span class="price-title">ADVANCED WEBSITE</span>
							<div class="price">
								<h3>Call<span class="duration">CHAT</span></h3>
							</div>
						</div>
							<ul class="price-content">
							<li>
								<p>WordPress Site</p>
							</li>
							<li>
								<p>WordPress Hosting</p>
							</li>

							<li>
								<p>Unlimited Pages</p>
							</li>
							<li>
								<p>Full Support</p>
							</li>
						</ul>
						<div class="price-btn">
							<a href="#contact"><button class="outline-btn">Get In Touch</button></a>
						</div>
					</div>
				</div>
				<!-- /pricing -->

			</div>
			<!-- Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Pricing -->

	<!-- Testimonial -->
	<div id="testimonial" class="section md-padding">

	<!-- Background Image -->
	
		<div class="bg-img">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Testimonial slider -->
				<div class="col-md-10 col-md-offset-1">
					<div id="testimonial-slider" class="owl-carousel owl-theme">

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/perso1.jpg" alt="">
								<h3 class="black-text">Mike Millano</h3>
								<span>Business Development</span>
							</div>
							<p class="black-text">ThatViz were very precise about what needed to achieve with our website.</p>
						</div>
						<!-- /testimonial -->

						<!-- testimonial -->
						<div class="testimonial">
							<div class="testimonial-meta">
								<img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/perso2.jpg" alt="">
								<h3 class="black-text">Byan Brown</h3>
								<span>Sale And Marketing</span>
							</div>
							<p class="black-text">Matt found out about our strengths and capitalised on creating a wonderful website.</p>
						</div>
						<!-- /testimonial -->

					</div>
				</div>
				<!-- /Testimonial slider -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Testimonial -->

	<!-- Team -->
	<div id="team" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<!-- Section header -->
				<div class="section-header text-center">
					<h2 class="title">Our Team</h2>
				</div>
				<!-- /Section header -->
				
						<!-- team -->
				<div class="col-sm-3 col-xs-6">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://thatviz.com/wp-content/uploads/2017/08/game.png" alt="">
							<div class="overlay">
								<div class="team-social">
									<!---<a href="thatviz"><i class="fa fa-linkedin"></i></a>
									<a href="thatviz"><i class="fa fa-twitter"></i></a>-->
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Roman Jones</h3>
							<span>VR Gaming</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-3 col-xs-6">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://thatviz.com/wp-content/uploads/2017/08/game.png" alt="">
							<div class="overlay">
								<div class="team-social">
									<!--<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-google-plus"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>-->
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Victoria Jones</h3>
							<span>H.R</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-3 col-xs-6">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://thatviz.com/wp-content/uploads/2017/08/game.png" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://linkedin.com/in/thatviz"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Matt Jones</h3>
							<span>Web Developer</span>
						</div>
					</div>
				</div>
				<!-- /team -->

				<!-- team -->
				<div class="col-sm-3 col-xs-6">
					<div class="team">
						<div class="team-img">
							<img class="img-responsive" src="https://thatviz.com/wp-content/uploads/2017/08/game.png" alt="">
							<div class="overlay">
								<div class="team-social">
									<a href="https://linkedin.com/in/cb-digital-group-2475a835"><i class="fa fa-linkedin"></i></a>
								</div>
							</div>
						</div>
						<div class="team-content">
							<h3>Micheal Jones</h3>
							<span>C.E.O</span>
						</div>
					</div>
				</div>
				<!-- /team -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Team -->




				<!-- body widget -->
						<div id="body-sidebar">
						<?php
						if(is_active_sidebar('body-sidebar')){
						dynamic_sidebar('body-sidebar');
						}
						?>
				</div>
				</div>
				<!-- /body widget -->

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</div>
	<!-- /Contact -->

<?php get_footer(); ?>