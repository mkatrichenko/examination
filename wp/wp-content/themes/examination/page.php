<?php get_header(); ?>


 <div class="page">
	<?php get_template_part( 'template-parts/default_banner');?>
	<div class="text-block">
		<div class="title"><?php the_post(); the_title();?>
		</div>
	</div>
	<?php get_template_part( 'template-parts/search');?>
	<?php get_template_part( 'template-parts/contact-gallery');?>
</div>

<?php get_footer(); ?>