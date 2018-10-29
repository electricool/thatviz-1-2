§<?php get_header(); ?>



<div class="container">

	<div class="row">
		
		<div class="col-sm-8 blog-main">
			<div class="space-plus">
</div>
			<?php 
			if ( have_posts() ) : while ( have_posts() ) : the_post();
				get_template_part( 'content', get_post_format() );
			endwhile; ?>
		
				<nav>
					<ul class="pager">
						<li><?php previous_posts_link( 'Previous' ); ?></li>
						<li><?php next_posts_link( 'Next' ); ?></li>
						
					</ul>
				</nav>
				<?php endif; ?>
		</div>	<!-- /.blog-main -->
		<div class="space-plus">
</div>
		<?php get_sidebar(); ?>
	</div> 	<!-- /.row -->
	
<?php get_footer(); ?>
