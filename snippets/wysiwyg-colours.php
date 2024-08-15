<?php

//-----------------------------------------------------
// Customise ACF colour picker
//-----------------------------------------------------

function tm31_customise_acf_colour_picker() { ?>
	<script type="text/javascript">
	acf.add_filter( 'color_picker_args', function( args, field ) {
		args.palettes = [
			'#291f1f', // Black
			'#2557ff', // Blue
			'#dabca2', // Clay
			'#d7dacf', // Pebble
			'#ba5815', // Rust
			'#ffffff', // White
		];
		return args;
	});
	</script>
<?php }

add_action('acf/input/admin_footer', 'tm31_customise_acf_colour_picker');
