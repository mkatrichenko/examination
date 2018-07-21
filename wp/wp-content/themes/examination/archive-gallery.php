<?php get_header();?>
    <style type="text/css">
		<?php $arch_img = get_field('gallery_archive_banner', 'option');?>
		.banner-short {
    		background: url('<?php echo $arch_img['url']; ?>') center no-repeat;
			background-size: cover;
		}
		.page .search .wrapper .text-block {
			<?php $searchImg = get_field('search_image');?>
  			background: url('<?php echo $searchImg['url']; ?>') no-repeat;
		}
		.page .archive{
			margin-bottom: 150px;
		}
	</style>
     <div class="page">
      <section class="banner-short"></section>
      <section class="nav">
        <div class="wrapper container">
          <div class="breadcrumbs">
          	<?php
    			if(function_exists('bcn_display'))
    			{
            			bcn_display();
    			}
			?>
          </div>
        </div>
      </section>
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
      
      <section class="search" id="search2">
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
    
   <?php get_footer();?>