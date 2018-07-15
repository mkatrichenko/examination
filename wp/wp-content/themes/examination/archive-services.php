
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
           				<img src="<?php $service_img = get_field('image');echo $service_img['url'];?>"/>
        			</a>
        			<div class="services__item-textblock">
						<div class="title"><?php the_title();?></div>
						<div class="description"><?php the_field('description')?></div>
					</div>
				</div>
				<?php endwhile; ?>
			</div>
	 </section>
</div>

<!--
<?php 
$args = array( 'post_type' => 'services', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
 
  <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  
	<div class="entry-content">
		<?php  echo the_content();?>
	</div>
<?php endwhile; ?>
-->



<?php get_footer(); ?>