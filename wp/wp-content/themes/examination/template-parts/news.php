<section class="news">
        <div class="text-block">
          <h3 class="title"><?php the_field('news_title')?></h3>
        </div>
        <div class="wrapper container">
         	<?php $args = array( 'post_type' => 'news', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
			  	$link = get_field('news_link');
				while ( $loop->have_posts() ) : $loop->the_post();?>
            <?php 
				$date = get_field('date', false, false);
				$date = new DateTime($date);
			?>
            <div class="news__item grid">
            <div class="date">
              <p class="month"><?php echo $date->format('M'); ?></p>
              <p class="day"><?php echo $date->format('j'); ?></p>
            </div>
            <div class="avatar">
            	<?php $img = get_the_post_thumbnail_url(); ?>
            	<img src="<?php echo $img; ?>" alt="News image">
            </div>
            <div class="news__item-text">
              <div class="title"><?php the_title(); ?></div>
              <div class="description">
                <p><?php the_field('text'); ?></p>
                <a class="link" href='<?php the_permalink(); ?>'><?php echo $link; ?></a>
              </div>
            </div>
            <div class="author"> BY <?php  $auth = get_the_author(); echo $auth ?></div>
          </div>
			<?php endwhile;
			wp_reset_postdata();?>
        </div>
        <a class="btn" ><?php the_field('news_button')?></a>
      </section>