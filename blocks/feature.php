<?php

//-----------------------------------------------------
// ACF fields
//-----------------------------------------------------

$background_image_url = wp_kses_post( get_field( 'background' ) );
$tint_rgba = wp_kses_post( get_field( 'tint' ) );

?>
		
<div class="bg-center bg-cover" style="background-image: url('<?php echo $background_image_url; ?>');">
	
	<div class="py-24 lg:py-48" style="background-color: <?php echo $tint_rgba; ?>;">
		
		<div class="container prose text-center text-white">
			
			<?php echo $content; ?>
			
		</div>
		
	</div>
	
</div>