<?php 

//-----------------------------------------------------
// 50/50 module
//-----------------------------------------------------

?>

<div class="container prose">
	
	<?php $content = get_sub_field( '50_50' ); ?>
	
	<?php if ( $content['heading'] ) : ?>
			
		<h2 class="mb-9">
			<?php echo $content['heading']; ?>
		</h2>
		
	<?php endif; ?>
		
	<div class="grid lg:gap-12 lg:grid-cols-2">
		
		<div>
			
			<?php echo $content['left']; ?>
			
		</div>
		
		<div>
			
			<?php echo $content['right']; ?>
			
		</div>
		
	</div>
	
</div>