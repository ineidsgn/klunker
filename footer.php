<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

            </div>
		</div><!-- .site-content -->

		<footer id="colophon" class="site-footer" role="contentinfo">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
	                    <?php if ( has_nav_menu( 'primary' ) ) : ?>
                            <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Primary Menu', 'twentysixteen' ); ?>">
			                    <?php
			                    wp_nav_menu( array(
				                    'theme_location' => 'primary',
				                    'menu_class'     => 'primary-menu',
			                    ) );
			                    ?>
                            </nav><!-- .main-navigation -->
	                    <?php endif; ?>

                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">&copy; 2017 Klunker</div>
                    </div>
                </div>
            </div>

		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
