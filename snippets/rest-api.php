<?php

//-----------------------------------------------------
// Loop objects using Alpine and REST API
//-----------------------------------------------------

?>

<div x-data="{ services: [] }" x-init="services = await (await fetch('<?php echo site_url(); ?>/wp-json/wp/v2/service?acf_format=standard&include=2,4')).json()">
		
		<template x-for="service in services">
			
			<h2 x-text="service.title.rendered"></h2>
			
			<p x-text="service.acf.description" x-show="service.acf.description"></p>
			
			<a :href="service.link">View service</a>
				
		</template>
			
	</div>
	
</div>
