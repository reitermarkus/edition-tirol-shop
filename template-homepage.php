<?php
/**
 * The template for displaying the homepage.
 *
 * This page template will display any functions hooked into the `homepage` action.
 * By default this includes a variety of product displays and the page content itself. To change the order or toggle these components
 * use the Homepage Control plugin.
 * https://wordpress.org/plugins/homepage-control/
 *
 * Template name: Homepage
 *
 * @package et_shop
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			/**
			 * @hooked et_shop_homepage_content - 10
			 * @hooked et_shop_product_categories - 20
			 * @hooked et_shop_recent_products - 30
			 * @hooked et_shop_featured_products - 40
			 * @hooked et_shop_popular_products - 50
			 * @hooked et_shop_on_sale_products - 60
			 */
			do_action( 'homepage' ); ?>

		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>
