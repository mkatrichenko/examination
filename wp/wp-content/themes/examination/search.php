<?php get_header(); ?>
<div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <div class="wrapper container search-page">
      	<div class="text-block">
			<div class="title">Search page</div>
		</div>
     	<?php get_search_form(); ?>
      </div>
      <div class="wrapper container">
      	<section id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>
			<div class="text-block">
            	<div class="title">
            		<?php the_field('search_title_option', 'option');the_search_query(); ?> 
            	</div>
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
	</div>
	<?php get_template_part( 'template-parts/works');?>
    <?php get_template_part( 'template-parts/search');?>
    <?php get_template_part( 'template-parts/contact-gallery');?>
</div>

<?php get_footer();
