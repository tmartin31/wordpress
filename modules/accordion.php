<?php 

//-----------------------------------------------------
// Accordion module
//-----------------------------------------------------

?>

<div class="container space-y-3" x-data="{ accordion: 0 }">
	
	<?php $accordions = get_sub_field( 'accordion' ); ?>
	
	<?php if ( $accordions ) : ?>
	
		<?php $count = 1; ?>

		<?php foreach ( $accordions as $accordion ) : ?>
		
			<div>
				
				<div class="cursor-pointer" x-on:click="if ( accordion == <?php echo $count; ?> ) { accordion = 0 } else { accordion = <?php echo $count; ?> }">
				
					<p class="flex items-center justify-between">
						
						<span>
							<?php echo $accordion['title']; ?>
						</span>
						
						<svg class="w-5 transition" :class="{ 'rotate-45': accordion == <?php echo $count; ?> }" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48"><g transform="matrix(2,0,0,2,0,0)"><path d="M0,12a1.5,1.5,0,0,0,1.5,1.5h8.75a.25.25,0,0,1,.25.25V22.5a1.5,1.5,0,0,0,3,0V13.75a.25.25,0,0,1,.25-.25H22.5a1.5,1.5,0,0,0,0-3H13.75a.25.25,0,0,1-.25-.25V1.5a1.5,1.5,0,0,0-3,0v8.75a.25.25,0,0,1-.25.25H1.5A1.5,1.5,0,0,0,0,12Z" style="fill: #000"></path></g></svg>
						
					</p>
					
				</div>
				
				<div class="bg-white prose" x-show="accordion == <?php echo $count; ?>" x-cloak>
						
					<?php echo $accordion['details']; ?>
					
				</div>
				
			</div>
			
			<?php $count++; ?>
	
		<?php endforeach; ?>
	
	<?php endif; ?>	
	
</div>