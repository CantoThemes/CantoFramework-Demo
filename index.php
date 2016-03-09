<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php wp_head(); ?>
	</head>
	<body>
		<pre>
			<?php print_r( get_theme_mod( 'test_opt' ) ); ?>
		</pre>

		<?php wp_footer(); ?>
	</body>
</html>