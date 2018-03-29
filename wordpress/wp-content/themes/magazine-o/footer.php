<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Magazine_O
 */

?>

	<footer>
	    <div class="container">
	    	<?php
	    		if( is_active_sidebar( 'footer-1' ) ) :
	    	?>
	        <div class="row">
	        	<?php
	        		dynamic_sidebar( 'footer-1' );
	        	?>
	        </div>
	        <?php
	        	endif;
	        ?>
	        <div class="row">
	            <div class="ft-btm">
	                <div class="col-xs-12 ft-hr">
	                    <hr/>
	                </div>
	                <div class="col-sm-6 col-xs-12">
	                    <div class="copyright">
	                       <a href="<?php echo esc_url( __( 'http://localhost/~anna/wordpress/', 'The Passage' ) ); ?>">
							   &copy <?php
								/* translators: %s: CMS name, i.e. WordPress. */
								printf( esc_html__( '2018 %s', 'The Passage' ), 'The Passage' );
							?></a>
							<span class="sep"> | </span>
							<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'All Rights Reserved.', 'The Passage' ), 'The Passage' );
							?>
							<?php
								/* translators: 1: Theme name, 2: Theme author. */
								printf( esc_html__( 'Designer: Yun Nie', 'The Passage' ), 'The Passage' );
							?>
	                    </div>
	                </div>
	                <div class="col-sm-6 col-xs-12">
	                    <div class="ft-menu">
	                    	<?php
	                    		if( has_nav_menu( 'footer_menu' ) ) :
	                    			wp_nav_menu( array(
	                    				'theme_location' => 'footer_menu',
	                    			) );
	                    		endif;
	                    	?>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</footer>

<?php wp_footer(); ?>

</body>
</html>
