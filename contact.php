<?php
/**
 * Template Name: Contact Page
 */
?>

<?php get_header(); ?>

	<!-- Contact -->
	<div id="contact" class="section md-padding">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row text-center">
				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-phone"></i>
						<h3>Phone</h3>
						<a href="tel:00448444876979">+44 (0) 844 487 6979</a>
					</div>
				</div>
				<!-- /contact -->
				
				<!-- /Section-header -->
				<div class="col-sm-4">
					<!-- Section-header -->
				<div class="section-header text-center">
					<h2 class="title">Get in touch</h2>
				</div>
				
				</div>
				<!-- /Section-header -->

				<!-- contact -->
				<div class="col-sm-4">
					<div class="contact">
						<i class="fa fa-envelope"></i>
						<h3>Email</h3>
						<a href="mailto:sales@thatviz.com">sales@thatviz.com</a>
					</div>
				</div>
				<!-- /contact -->

				
				<!-- map -->
				
				<div id="testimonial" class="section md-padding">
				
				<div class="container-full">
						    
						<div class="row text-center">
							    
								<div class="col-md-12">
											
										<!-- Add Google Maps -->
										
											<div id="googleMap" style="width:100%;height:500px;"></div>
											
											<script>
												
											function myMap()
											{
											  myCenter=new google.maps.LatLng(51.5198858,-0.161984); 
											  var mapOptions= {
											    center:myCenter,
											    zoom:16, scrollwheel: false, draggable: false,
											    mapTypeId:google.maps.MapTypeId.ROADMAP
											  };
											  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);
											
											  var marker = new google.maps.Marker({
											    position: myCenter,
											    animation: google.maps.Animation.BOUNCE
											  });
											  marker.setMap(map);
											}
											
											</script>
											
											<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCMqVXnHhPYnhcnMhd7T9otooE4htiLcsE&callback=myMap"></script>
											<!--
											To use this code on your website, get a free API key from Google.
											Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
											-->
								</div>
								
						    </div>
						    
					    </div>	
					    
				</div>
				
									<hr/>
					
					<!-- /map -->


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