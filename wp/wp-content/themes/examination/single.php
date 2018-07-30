<?php get_header(); ?>
	<style type="text/css">
		.page .archive{
			margin-bottom: 150px;
		}
	</style>

	<div class="page">
      <?php get_template_part( 'template-parts/default_banner');?>
      <?php get_template_part( 'template-parts/navigation');?>
      <div class="wrapper container">
      	<div class="text-block single">
      		<div class="title"><?php the_title() ?></div>
      		<div class="avatar">
      			<?php the_post_thumbnail(); ?>
      		</div>
      		<div class="description"><?php the_post(); the_content(); ?></div>
      	</div>
      </div>
      <?php get_template_part( 'template-parts/works');?>
      <?php get_template_part( 'template-parts/search');?>
      <?php get_template_part( 'template-parts/contact-gallery');?>
    </div>
<?php get_footer();
