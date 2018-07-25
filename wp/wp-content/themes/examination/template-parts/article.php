 <style type="text/css">
		<?php $img = get_field('article_banner');?>
		.page .banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
</style>
       

       
<section class="article">
        <div class="wrapper container">
         	<?php the_post(); the_content();?>
        </div>
</section>
