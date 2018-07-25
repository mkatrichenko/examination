<section class="works">
        <div class="text-block">
          <h3 class="title"><?php the_field('works_title')?></h3>
          <h4 class="description"><?php the_field('works_subtitle')?></h4>
        </div>
        <div class="wrapper container">
         	<?php $works_args = array( 'post_type' => 'works', 'posts_per_page' => 10 );
				$works_loop = new WP_Query( $works_args );
				while ( $works_loop->have_posts() ) : $works_loop->the_post();?>
				<div class="works__item grid">
            		<div class="works__item-avatar">
            			<?php $img = get_the_post_thumbnail_url(); ?>
            			<img src="<?php echo $img?>" alt='Works image is missing'/>
            		</div>
            		<div class="works__item-link">
              			<p href="<?php the_permalink(); ?>"><?php the_title();?></p>
            		</div>
          		</div>
			<?php endwhile;
			wp_reset_postdata();?>
        </div>
      </section>