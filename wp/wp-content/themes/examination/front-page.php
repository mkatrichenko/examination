<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package examination
 */

get_header();
?>
	<style type="text/css">
		<?php $img = get_field('banner_image');?>
		.banner {
    		background: url('<?php echo $img['url']; ?>') no-repeat;
			background-size: cover;
		}
		.page .search .wrapper .text-block {
			<?php $searchImg = get_field('search_image');?>
  			background: url('<?php echo $searchImg['url']; ?>') no-repeat;
		}
	</style>
	<section class="banner">
      <div class="wrapper container">
        <div class="content">
          <div class="text">
            <p><?php the_field('banner_text')?></p>
          </div>
          <a class="btn"><?php the_field('banner_button')?></a>
        </div>
      </div>
    </section>
    <div class="page">
      <section class="search">
        <div class="wrapper container">
          <div class="text-block">
            <h3 class="title"><?php the_field('search_title')?></h3>
            <p class="description"><?php the_field('search_description')?></p>
          </div>
          <form class="input-block">
            <input placeholder="<?php the_field('search_input');?>"/>
            <a class="search-btn"><?php the_field('search_button');?></a>
          </form>
        </div>
      </section>
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
 				<div class="services__item">
					<a class="avatar" href="<?php the_permalink(); ?>">
           				<img src="<?php $service_img = get_field('image');echo $service_img['url'];?>"/>
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
        </div><a class="btn" href='../services'><?php the_field('services_button');?></a>
      </section>
      <section class="works">
        <div class="text-block">
          <h3 class="title"><?php the_field('works_title')?></h3>
          <h4 class="description"><?php the_field('works_subtitle')?></h4>
        </div>
        <div class="wrapper container">
         	<?php $works_args = array( 'post_type' => 'works', 'posts_per_page' => 10 );
				$works_loop = new WP_Query( $works_args );
			  	$save = $post;
				while ( $works_loop->have_posts() ) : $works_loop->the_post();?>
				<div class="works__item">
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
      <section class="feedback">
        <div class="text-block">
          <h3 class="title"><?php the_field('feedback_title'); ?></h3>
        </div>
        <div class="wrapper container">
          <div class="feedback-slider">
           <?php $args = array( 'post_type' => 'feedback', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
			  	$save = $post;
				while ( $loop->have_posts() ) : $loop->the_post();?>
 				<div class="slide">
              <div class="description"><?php the_field('text'); ?></div>
              <p class="author"><?php the_field('author'); ?></p>
              <p class="place"><?php the_field('place'); ?></p>
            </div>
			<?php $post = $save;endwhile; ?>
          </div>
        </div>
      </section>
      <section class="news">
        <div class="text-block">
          <h3 class="title"><?php the_field('news_title')?></h3>
        </div>
        <div class="wrapper container">
         	<?php $args = array( 'post_type' => 'news', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
			  	$save = $post;
				while ( $loop->have_posts() ) : $loop->the_post();?>
            <?php 
				$date = get_field('date', false, false);
				$date = new DateTime($date);
			?>
            <div class="news__item">
            <div class="date">
              <p class="month"><?php echo $date->format('M'); ?></p>
              <p class="day"><?php echo $date->format('j'); ?></p>
            </div>
            <div class="avatar">
            	<img src="<?php $news_img = get_field('news_image'); echo $news_img['url']; ?>" />
            </div>
            <div class="news__item-text">
              <div class="title"><?php the_title(); ?></div>
              <div class="description">
                <p><?php the_field('text'); ?></p>
                <a class="link">Read More</a>
              </div>
            </div>
            <div class="author"><?php the_field('author'); ?></div>
          </div>
			<?php $post = $save;endwhile; ?>
        </div>
        <a class="btn"><?php the_field('news_button')?></a>
      </section>
      <section class="contact-block">
        <div class="wrapper container">
          <div class="contact">
            <div class="text">
              <div class="title"><?php the_field('contact_title')?></div>
              <div class="description"><?php the_field('contact_subtitle')?></div>
            </div>
            <form>
              <input placeholder="<?php the_field('1_input')?>"/>
              <input placeholder="<?php the_field('2_input')?>"/>
              <input placeholder="<?php the_field('3_input')?>"/>
              <input placeholder="<?php the_field('4_input')?>"/>
              <label class="selectGeneral" placeholder="<?php the_field('select_placeholder')?>">
                <input type="radio" name="OS"/>
                <div>
                  <input type="radio" name="OS" value="Linux" id="list[0]"/>
                  <label for="list[0]"><?php the_field('select_option_1')?></label>
                  <input type="radio" name="OS" value="Windows" id="list[1]"/>
                  <label for="list[1]"><?php the_field('select_option_1')?></label>
                  <input type="radio" name="OS" value="Other" id="list[2]"/>
                  <label for="list[2]"><?php the_field('select_option_1')?></label>
                </div>
              </label>
              <textarea class="comments" placeholder="<?php the_field('coment')?>"></textarea>
              <a class="footer-btn"><?php the_field('contact_button')?></a>
            </form>
          </div>
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
              <a class="footer-btn"><?php the_field('gallery_button')?></a>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>
