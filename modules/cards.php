<?php 

//-----------------------------------------------------
// Cards module
//-----------------------------------------------------

?>

<div class="container">
	
	<?php
	
	// Save ACF field data to variable
	$cards = get_sub_field( 'cards' );
	
	// Determine how many columns we need
	if ( count( $cards ) > 2 ) {
		$columns = 3; 
	}
	else {
		$columns = count( $cards );
	}
	
	?>
	
	<?php if ( $cards ) : ?>
		
		<div class="gap-6 grid lg:grid-cols-<?php echo $columns; ?>">
	
			<?php foreach ( $cards as $card ) : ?>
			
				<div class="bg-<?php echo $card['background_colour']; ?> px-6 py-9 text-white lg:px-8">
					
					<h4 class="mb-6">
						<?php echo $card['heading']; ?>
					</h4>
					
					<p class="mb-6">
						<?php echo $card['details']; ?>
					</p>
					
				</div>
	
			<?php endforeach; ?>
		
		</div>
	
	<?php endif; ?>
	
</div>