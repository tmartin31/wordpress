<?php 

//-----------------------------------------------------
// Links module
//-----------------------------------------------------

?>

<div class="container">
	
	<div class="gap-6 grid lg:grid-cols-3">
		
		<?php $links = get_sub_field( 'links' ); ?>
	
		<?php if ( $links ) : ?>
	
			<?php foreach ( $links as $link ) : ?>
			
				<div class="bg-blue-500 flex">
					
					<a class="flex items-center justify-between p-6 text-white hover:bg-black hover:bg-opacity-20" href="<?php echo $link['url']; ?>" <?php if ( $link['external_link'] ) { echo 'target="_blank"'; } ?>>
					
						<span>
							<?php echo $link['text']; ?>
						</span>
							
						<svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g transform="matrix(2,0,0,2,0,0)"><path d="M7.21,23.75l12.47-11h0a1.06,1.06,0,0,0,0-1.54L7.21.25A1,1,0,0,0,6.48,0a1,1,0,0,0-.69.36L4.24,2.21A1,1,0,0,0,4,3a1,1,0,0,0,.35.69l9.45,8.17a.27.27,0,0,1,0,.38L4.35,20.36a1,1,0,0,0-.35.69,1,1,0,0,0,.23.74l1.56,1.85a1,1,0,0,0,.69.36A1,1,0,0,0,7.21,23.75Z"></path></g></svg>
					
					</a>
					
				</div>
	
			<?php endforeach; ?>
	
		<?php endif; ?>
		
	</div>
	
</div>