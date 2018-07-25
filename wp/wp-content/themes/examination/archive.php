<?php get_header(); ?>
	
	<div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<div class="wrapper container search-page">
			<div class="text-block">
				<div class="title">
					<?php the_archive_title() ?>
				</div>
			</div>
			<?php get_search_form(); ?>
		</div>
		<div class="wrapper container ">
		<?php if ( have_posts() ) : ?>


			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->
	
		<?php get_template_part( 'template-parts/works');?>
      	<?php get_template_part( 'template-parts/search');?>
      	<?php get_template_part( 'template-parts/contact-gallery');?>
    </div>

<?php
get_footer();
