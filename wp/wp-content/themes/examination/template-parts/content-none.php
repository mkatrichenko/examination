<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examination
 */

?>

<section class="no-results not-found">
	<header class="text-block">
		<h1 class="title">
			<?php the_field('search_empty_title', 'option'); ?>
		</h1>
	</header><!-- .page-header -->

	<div class="page-content">
		<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'examination' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>
			<div class="text-block">
				<div class="description"><?php the_field('search_empty_text', 'option'); ?></div>
			</div> <?php
			

		else :
			?>
			<div class="text-block">
				<p class="description">
					<?php the_field('search_empty_var2', 'option'); ?>
				</p>
			</div>
			<?php
			get_search_form();

		endif;
		?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
