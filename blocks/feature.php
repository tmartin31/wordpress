<?php

//-----------------------------------------------------
// ACF fields
//-----------------------------------------------------

$background = get_field( 'background' );
$tint = get_field( 'tint' );

?>
		
<div class="bg-center bg-cover" style="background-image: url('<?php echo $background; ?>');">
	
	<div class="py-24 lg:py-48" style="background-color: <?php echo $tint; ?>;">
		
		<div class="container prose text-center text-white">
			
			<?php echo $content; ?>
			
		</div>
		
	</div>
	
</div>