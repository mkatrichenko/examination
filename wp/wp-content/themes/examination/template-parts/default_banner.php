<style type="text/css">
		<?php $img = get_field('gallery_archive_banner', 'option');?>
		.page .banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
</style>

<section class="banner-short"></section>