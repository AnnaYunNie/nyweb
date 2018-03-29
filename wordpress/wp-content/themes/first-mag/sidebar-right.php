<?php if ( get_theme_mod( 'rigth-sidebar-check', 1 ) != 0 ) : ?>
	<aside id="sidebar" class="col-md-<?php echo absint( get_theme_mod( 'right-sidebar-size', 3 ) ); ?> rsrc-right" role="complementary">
		<?php 
		if ( first_mag_is_preview() ) {
			first_mag_preview_right_sidebar();
		} else {
			dynamic_sidebar( 'first-mag-right-sidebar' ); 
		}
		?>
	</aside>
<?php endif; ?>