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
      <section class="nav">
        <div class="wrapper container">
          <div class="breadcrumbs">
          	 <?php
    if(function_exists('bcn_display'))
    {
            bcn_display();
    }?>
          </div>
        </div>
      </section>
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
              					<img src="<?php $gallery_img = get_field('gallery_image'); echo $gallery_img['url']; ?>" />
              				</div>
              				</a>
				<?php $post = $save;endwhile; ?>
            </div>
          </div>
        </div>
      </section>
	
    </div>
    <?php get_footer(); ?>