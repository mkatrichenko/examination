   <?php 
	/*  Template name: Franchise  */
	get_header(); ?>
    <style type="text/css">
		<?php $img = get_field('article_banner');?>
		.page .banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
	</style>
     <div class="page franchisee">
      <section class="banner-short franch"></section>
      <?php get_template_part( 'template-parts/navigation');?>
      <?php get_template_part( 'template-parts/article');?>
      <section class="advertisement">
        <div class="wrapper container">
          <div class="text-block">
            <h3 class="title"><?php the_field('adv_title')?></h3>
            <p class="description"><?php the_field('adv_text')?></p>
          </div>
          <div class="left"><a class="btn"><?php the_field('adv_button')?></a></div>
        </div>
      </section>
      <?php get_template_part( 'template-parts/contact-gallery');?>
	
    </div>
    <?php get_footer(); ?>