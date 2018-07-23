<section class="contact-block new">
        <div class="wrapper container">
          <div class="contact">
            <div class="text">
              <div class="title"><?php the_field('contact_title', 'option')?></div>
              <div class="description"><?php the_field('contact_subtitle', 'option')?></div>
            </div>
            <form>
            	<a class="footer-btn"><?php the_field('contact_button_2', 'option')?></a>
            	<a class="footer-btn"><?php the_field('contact_button_3', 'option')?></a>
            </form>
          </div>
          <div class="gallery">
            <div class="text">
              <div class="title"><?php the_field('gallery_title', 'option')?></div>
              <div class="description"><?php the_field('gallery_subtitle', 'option')?></div>
            </div>
            <div class="box">
              <?php 	$args = array( 'post_type' => 'gallery', 'posts_per_page' => 10 );
						$loop = new WP_Query( $args );
			  			$save = $post;
						while ( $loop->have_posts() ) : $loop->the_post();?>
          					<a href="<?php the_permalink(); ?>">
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