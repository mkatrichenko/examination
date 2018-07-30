<?php get_header(); ?>

	
     <div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <section class="article">
        <div class="wrapper container franchisee">
          <div class="text-block page404">
            <h3 class="title"><?php the_field('404_title', 'option'); ?></h3>
            <p class="description"><?php the_field('404_description', 'option'); ?></p>
          </div>
        </div>
      </section>
      <?php get_template_part( 'template-parts/contact-gallery');?>
    </div>
<?php get_footer();
