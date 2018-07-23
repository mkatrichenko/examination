<section class="services">
        <div class="text-block">
          <h3 class="title"><?php the_field('services_title');?></h3>
          <h4 class="description"><?php the_field('services_subtitle');?></h4>
        </div>
        <div class="wrapper container">
          <?php $args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				$save = $post;
				while ( $loop->have_posts() ) : $loop->the_post();?>
 				<div class="services__item grid">
					<a class="avatar" href="<?php the_permalink(); ?>">
       					<?php $img = get_the_post_thumbnail_url(); ?>
            			<img src="<?php echo $img; ?>" alt="service image">
        			</a>
        			<div class="services__item-textblock">
						<div class="title"><?php the_title();?></div>
						<div class="description"><?php the_field('description');?></div>
					</div>
				</div>
				
			<?php	
				
				endwhile;
				 wp_reset_postdata()
			?>  
          <div class="line container"></div>
        </div><a class="btn" href="<?php the_field('services_link')?>"><?php the_field('services_button');?></a>
      </section>