
<?php get_header();	?>


<style type="text/css">
		<?php $img = get_field('services_archive_banner');?>
		.banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
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
    }?>
          </div>
        </div>
      </section>
		<section class="services">
        <div class="text-block">
          <h3 class="title">What We Offer</h3>
          <h4 class="description">
            From home upgrades to storm restoration, Storm Guard offers 
            a range of services to help you with your home.
          </h4>
        </div>
        <div class="wrapper container">
          <?php $args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
				$loop = new WP_Query( $args );
				while ( $loop->have_posts() ) : $loop->the_post();?>
 				<div class="services__item">
					<a class="avatar" href="<?php the_permalink(); ?>">
           				<?php the_post_thumbnail(); ?>
        			</a>
        			<div class="services__item-textblock">
						<div class="title"><?php the_title();?></div>
						<div class="description"><?php the_field('description')?></div>
					</div>
				</div>
				<?php endwhile; ?>
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




<?php get_footer(); ?>