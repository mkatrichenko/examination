<?php get_header();?>
     <div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <section class="contact-block new archive gallery-archive">
        <div class="wrapper container">
          <div class="gallery">
            <div class="text">
              <div class="title"><?php the_field('gallery_title')?></div>
              <div class="description"><?php the_field('gallery_subtitle')?></div>
            </div>
            <div class="box">
              <?php 	$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
			  			$save = $post;
						while ( $loop->have_posts() ) : $loop->the_post();?>
          					<a href="<?php the_permalink();?>">
           					<div class="gallery__item">
              					<?php $img = get_the_post_thumbnail_url(); ?>
            			<img src="<?php echo $img; ?>" alt="gallery image">
              				</div>
              				</a>
				<?php $post = $save;endwhile; ?>
            </div>
          </div>
        </div>
      </section>
     	<?php get_template_part( 'template-parts/works');?>
      <?php get_template_part( 'template-parts/search');?>
      <?php get_template_part( 'template-parts/contact-gallery');?>
    </div>
    
   <?php get_footer();?>