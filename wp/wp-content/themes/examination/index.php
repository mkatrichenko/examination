<?php get_header(); ?>
	
    <div class="page">
       <?php get_template_part( 'template-parts/default_banner');?>
       <div class="post-list">
       		<div class="wrapper container">
       			<?php
					$wpb_all_query = new WP_Query(array('post_type'=>0, 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
					<?php if ( $wpb_all_query->have_posts() ) : ?>
 						<ul>
        				<?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
							<li>
								<a href="<?php the_permalink(); ?>">
									<div class="box">
									<?php the_post_thumbnail('post_list');?>
									<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?></a>
								</div>
								</a>
							<?php the_excerpt() ?></li>
						<?php endwhile; ?>
						</ul>
  					<?php wp_reset_postdata(); ?>
					<?php else : ?>
						<p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
					<?php endif; ?>
    		</div>
       </div> 
      <?php get_template_part( 'template-parts/works');?>
      <?php get_template_part( 'template-parts/search');?>
      <?php get_template_part( 'template-parts/contact-gallery');?>
    </div>

<?php get_footer();
