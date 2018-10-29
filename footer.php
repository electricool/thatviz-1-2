    </div> <!-- /.container -->
    
<!--<div class="svg-colour-3">
	
  <svg width="100%" viewBox="0 0 100 8.84">
  <polygon points="0,8.84 100,8.84 100 0" />
  
</svg>

</div>-->
	<!-- Footer -->
	
	<footer id="footer" class="sm-padding bg-dark">
		
			<div class="container">
				
				<div class="row-text-center">
					
					<div class="col-md-4">
		
						<div id="footer-sidebar1">
						<?php
						if(is_active_sidebar('footer-sidebar-1')){
						dynamic_sidebar('footer-sidebar-1');
						}
						?>
						</div>
					
					</div>
						
					<div class="col-md-4">
								
						<div id="footer-sidebar2">
						<?php
						if(is_active_sidebar('footer-sidebar-2')){
						dynamic_sidebar('footer-sidebar-2');
						}
						?>
						</div>
					
					</div>
								
					<div class="col-md-4">
								
						<div id="footer-sidebar3">
						<?php
						if(is_active_sidebar('footer-sidebar-3')){
						dynamic_sidebar('footer-sidebar-3');
						}
						?>
						</div>
					
					</div>
					
				</div>
					
			</div>
			
			

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">
					
					

					<!-- footer logo -->
		<div class="footer-logo">
						<!--<a href="/"><img src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/img/thatviz-new.svg" width="100" alt="logo"></a>
					</div>-->
					<!-- /footer logo -->

					<!-- footer follow -->
					<ul class="footer-follow">
						<!--<li><a href="#"><i class="fa fa-facebook"></i></a></li>-->
						<li><a href="https://www.twitter.com/thatviz"><i class="fa fa-twitter"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
						<li><a href="https://instagram.com/thatvizcom"><i class="fa fa-instagram"></i></a></li>
						<li><a href="https://www.linkedin.com/in/thatviz"><i class="fa fa-linkedin"></i></a></li>
						<!--<li><a href="#"><i class="fa fa-youtube"></i></a></li>-->
					</ul>
					<!-- /footer follow -->

					<!-- footer copyright -->
					<div class="footer-copyright">
						
						<?php
						echo "<p>Copyright &copy; 2015-" . date("Y") . " <?php echo esc_url( home_url( '/' ) ); ?>www.thatviz.com</p>";
						?>
							
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	

	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->


<?php wp_footer(); ?> 

<!-- scripts -->
<script src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/js/particles.js"></script>
<script src="https://www.thatviz.com/wp-content/themes/thatviz-1-2/js/app.js">

<script>
  var count_particles, stats, update;
  stats = new Stats;
  stats.setMode(0);
  stats.domElement.style.position = 'absolute';
  stats.domElement.style.left = '0px';
  stats.domElement.style.top = '0px';
  document.body.appendChild(stats.domElement);
  count_particles = document.querySelector('.js-count-particles');
  update = function() {
    stats.begin();
    stats.end();
    if (window.pJSDom[0].pJS.particles && window.pJSDom[0].pJS.particles.array) {
      count_particles.innerText = window.pJSDom[0].pJS.particles.array.length;
    }
    requestAnimationFrame(update);
  };
  requestAnimationFrame(update);
</script>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>

  </body>
</html>
