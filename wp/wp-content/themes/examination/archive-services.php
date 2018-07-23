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
	<?php get_template_part( 'template-parts/navigation');?>
	<?php get_template_part( 'template-parts/services');?>
	<?php get_template_part( 'template-parts/search');?>
	<?php get_template_part( 'template-parts/contact-gallery');?>
</div>

<?php get_footer(); ?>