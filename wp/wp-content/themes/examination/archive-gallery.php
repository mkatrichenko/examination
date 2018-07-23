<?php get_header();?>
     <div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <section class="contact-block new archive">
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
              					<img src="<?php $gallery_img = get_field('gallery_image'); echo $gallery_img['url']; ?>" />
              					
              				</div>
              				</a>
				<?php $post = $save;endwhile; ?>
            </div>
          </div>
        </div>
      </section>
      <section class="works">
        <div class="wrapper container">
         	<?php $works_args = array( 'post_type' => 'works', 'posts_per_page' => 10 );
				$works_loop = new WP_Query( $works_args );
			  	$save = $post;
				while ( $works_loop->have_posts() ) : $works_loop->the_post();?>
				<div class="works__item grid">
            		<div class="works__item-avatar">
            			<img src="<?php $works_img = get_field('works_image');echo $works_img['url'];?>"/>
            		</div>
            		<div class="works__item-link">
              			<p href="<?php the_permalink(); ?>"><?php the_title();?></p>
            		</div>
          		</div>
			<?php $post = $save; endwhile; ?>
        </div>
      </section>
      
      <?php get_template_part( 'template-parts/search');?>
      <?php get_template_part( 'template-parts/contact-gallery');?>
    </div>
    
   <?php get_footer();?>