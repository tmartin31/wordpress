<?php 

//-----------------------------------------------------
// Tabs module
//-----------------------------------------------------

?>

<div class="container" x-data="{ tab: 1 }">
	
	<?php $tabs = get_sub_field( 'tabs' ); ?>
	
	<?php if ( $tabs ) : ?>

		<div class="lg:grid grid-cols-4">
			
			<?php $count = 1; ?>
		
			<?php foreach ( $tabs as $tab ) : ?>
			
				<div class="cursor-pointer p-6 text-center" x-bind:class="{ 'bg-black': tab == <?php echo $count; ?> }" x-on:click="tab = <?php echo $count; ?>">
				
					<?php echo $tab['title']; ?>
				
				</div>
				
				<?php $count++; ?>	
	
			<?php endforeach; ?>
			
		</div>
		
		<div class="p-6">
			
			<?php $count = 1; ?>
		
			<?php foreach ( $tabs as $tab ) : ?>
			
				<div class="prose" x-show="tab == <?php echo $count; ?>" x-cloak>
					
					<?php echo $tab['details']; ?>
					
				</div>
				
				<?php $count++; ?>	
	
			<?php endforeach; ?>
			
		</div>
	
	<?php endif; ?>
	
</div>