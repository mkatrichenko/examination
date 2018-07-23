<?php get_header(); ?>
<div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <div class="wrapper container">
      	<div class="text-block">
			<div class="title">Search page</div>
		</div>
     	<?php get_search_form(); ?>
      </div>
      	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<div class="text-block">
            	<h3 class="description">
            		<?php
					printf( esc_html__( 'Search Results for: %s', 'examination' ),get_search_query());
					?>
            	</h3>
            	<span class="description"><?php get_search_query(); ?></span>
          	</div>
			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section>
	<?php get_template_part( 'template-parts/works');?>
    <?php get_template_part( 'template-parts/search');?>
    <?php get_template_part( 'template-parts/contact-gallery');?>
</div>

<?php get_footer();
