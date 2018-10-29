<?php
/**
 * Template Name: Other Pages
 */
?>

<?php get_header(); ?>

<div class="contianer">
	
	<div class="row text-center">
		
		<div class="col-md-12">
			
			<h3><?php the_field( 'text_contact' ); ?></h3>
			
			<?php $map_contact = get_field( 'map_contact' ); ?>
				<?php if ( $map_contact ) { ?>
					<?php echo $map_contact['address']; ?>
					<?php echo $map_contact['lat']; ?>
					<?php echo $map_contact['lng']; ?>
				<?php } ?>
							
			
			
		</div>
	</div>
</div>

<?php get_footer(); ?>