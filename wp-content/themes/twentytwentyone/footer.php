<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
</main><!-- #main -->
</div><!-- #primary -->
</div><!-- #content -->

<!-- Footer -->
<footer id="colophon">
    <section id="footer">
		<?php if ( has_nav_menu( 'footer' ) ) : ?>
            <nav aria-label="<?php esc_attr_e( 'Secondary menu', 'twentytwentyone' ); ?>" class="footer-navigation">
                <ul class="footer-navigation-wrapper">
					<?php
					// wp_nav_menu(
					// 	array(
					// 		'theme_location' => 'footer',
					// 		'items_wrap'     => '%3$s',
					// 		'container'      => false,
					// 		'depth'          => 1,
					// 		'link_before'    => '<span>',
					// 		'link_after'     => '</span>',
					// 		'fallback_cb'    => false,
					// 	)
					// );
					?>
                </ul><!-- .footer-navigation-wrapper -->
            </nav><!-- .footer-navigation -->
		<?php endif; ?>
        <div class="container">
            <div class="row text-center text-xs-center text-sm-left text-md-left">
				<?php get_template_part( 'template-parts/footer/footer-widgets' ); ?>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                    <ul class="list-unstyled list-inline social text-center">
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-facebook"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-twitter"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-instagram"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02"><i
                                        class="fa fa-google-plus"></i></a></li>
                        <li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i
                                        class="fa fa-envelope"></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
                    <p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a
                        Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp,
                        Minneapolis,
                        MN]</p>
                    <p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com"
                                                          target="_blank">Sunlimetech</a></p>
                </div>
            </div>
        </div>
    </section>
</footer>
<!-- ./Footer -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
