<title><?php wp_title( '|', true, 'right' ); ?></title>

<?php wp_head(); ?>

<body <?php body_class(); ?>>
	<h1>Welcome</h1>
</body>


<?php 
	
	// Add to template code
	custom_footer();

?>

<?php wp_footer(); ?>