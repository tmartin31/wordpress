<?php 

//-----------------------------------------------------
// Feature module
//-----------------------------------------------------

?>

<?php $feature = get_sub_field( 'feature' ); ?>

<div class="container">
	
	<!-- Black and white filter on background image -->
	<div class="bg-blend-saturation bg-center bg-cover text-center text-white" style="background-image: linear-gradient(#000, #000), url('<?php echo $feature['background_image']; ?>');">
	
		<div class="bg-<?php echo $feature['background_colour']; ?> <?php if ( $feature['background_image'] ) { echo 'bg-opacity-60'; } ?> px-12 py-24 lg:px-20 lg:py-32">
			
			<h2>
				<?php echo $feature['heading']; ?>
			</h2>
			
			<p>
				<?php echo $feature['paragraph']; ?>
			</p>
			
			<?php if ( $feature['button_text'] ) : ?>
				<a href="<?php echo $feature['button_link']; ?>">
					<?php echo $feature['button_text']; ?>
				</a>
			<?php endif; ?>
			
		</div>
		
	</div>

</div>