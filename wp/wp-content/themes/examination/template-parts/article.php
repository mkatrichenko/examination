 <style type="text/css">
		<?php $img = get_field('article_banner');?>
		.page .banner-short {
    		background: url('<?php echo $img['url']; ?>') center no-repeat;
			background-size: cover;
		}
</style>
       

       
<section class="article">
        <div class="wrapper container">
          <div class="avatar">
          	<img src="<?php $article_img = get_field('article_image');echo $article_img['url'];?>"/>
          </div>
          <div class="text-block">
            <h3 class="title"><?php the_field('article_title');?></h3>
            <p class="description"><?php the_field('article_text');?></p>
          </div>
        </div>
</section>