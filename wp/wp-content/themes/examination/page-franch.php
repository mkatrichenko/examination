   <?php get_header(); ?>
    <style type="text/css">
		<?php $img = get_field('article_banner');?>
		.page .banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
	</style>
     <div class="page">
      <section class="banner-short franch"></section>
      <?php get_template_part( 'template-parts/navigation');?>
      <section class="article">
        <div class="wrapper container franchisee">
          <div class="text-block">
            <h3 class="title">
            	<?php the_field('article_title')?>
            	<div class="avatar right">
            		<img src="<?php $img = get_field('article_image'); echo $img['url']; ?>" />
            	</div>
            		
            </h3>
            <p class="description"><?php the_field('article_text')?></p>
            <?php
				if( have_rows('franchisee_articles') ):
					while ( have_rows('franchisee_articles') ) : the_row();?>
						<h3 class="title"><?php the_sub_field('fr_article_title'); ?></h3>
            			<p class="description"><?php the_sub_field('fr_article_text'); ?></p>
			<?php	endwhile;
		 		else :
				endif;

			  ?>
          </div>
        </div>
      </section>
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