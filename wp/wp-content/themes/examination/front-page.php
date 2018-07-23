<?php get_header(); ?>
	<style type="text/css">
		<?php $img = get_field('banner_image');?>
		.banner {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
		.page .search .wrapper .text-block {
			<?php $searchImg = get_field('search_image', 'option');?>
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
            <h3 class="title"><?php the_field('search_title', 'option')?></h3>
            <p class="description"><?php the_field('search_description', 'option')?></p>
          </div>
          <form class="input-block">
            <input placeholder="<?php the_field('search_input', 'option');?>"/>
            <a class="search-btn"><?php the_field('search_button', 'option');?></a>
          </form>
        </div>
      </section>
      <?php get_template_part( 'template-parts/services');?>
      <?php get_template_part( 'template-parts/works');?>
      <section class="feedback">
        <div class="text-block">
          <h3 class="title"><?php the_field('feedback_title'); ?></h3>
        </div>
        <div class="wrapper container">
          <div class="feedback-slider">
          <?php
				if( have_rows('feedback') ):
					while ( have_rows('feedback') ) : the_row();?>
						<div class="slide">
              				<div class="content"><?php the_sub_field('feedback_text'); ?></div>
              					<div class="description">
              						<p class="author"><?php the_sub_field('feedback_author'); ?></p>
              						<p class="place"><?php the_sub_field('feedback_place'); ?></p>
              					</div>
            			</div>
			<?php	endwhile;
		 		else :
				endif;
			  ?>
          </div>
        </div>
      </section>
      <?php get_template_part( 'template-parts/news');?>
      <section class="contact-block">
        <div class="wrapper container">
          <div class="contact">
            <div class="text">
              <div class="title"><?php the_field('contact_title')?></div>
              <div class="description"><?php the_field('contact_subtitle')?></div>
            </div>
            <?php echo do_shortcode('[contact-form-7 id="315" title="Contact form 1"]') ?>
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
              						<?php $img = get_the_post_thumbnail_url(); ?>
            			<img src="<?php echo $img; ?>" alt="gallery image">
              					</div>
							</a>
				<?php $post = $save;endwhile; ?>
              <a class="footer-btn" href="<?php the_field('gallery_link')?>"><?php the_field('gallery_button')?></a>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php get_footer(); ?>
