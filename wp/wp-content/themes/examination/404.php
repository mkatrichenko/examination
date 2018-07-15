<?php get_header(); ?>

	<style type="text/css">
		<?php $img = get_field('article_banner');?>
		.page .banner-short {
    		background: url('<?php bloginfo('template_directory') ?>/./img/service-banner.jpg') center no-repeat;
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
      <section class="article">
        <div class="wrapper container franchisee">
          <div class="text-block">
            <h3 class="title">Page Not Found</h3>
            <p class="description">We're sorry, the page you're looking for could not be found.</p>
          </div>
        </div>
      </section>
      <section class="contact-block new">
        <div class="wrapper container">
          <div class="contact">
            <div class="text">
              <div class="title">Contact Us Today</div>
              <div class="description">Need more information about our services or insurance claims? Select who from Storm Guard you would like information from and fill the out form. </div>
            </div>
            <form><a class="footer-btn">Contact Your Local Storm Guard Franchise</a><a class="footer-btn">Contact the Storm Guard Corporate Office</a></form>
          </div>
          <div class="gallery">
            <div class="text">
              <div class="title">Check Out Our Past Projects</div>
              <div class="description">Want to see examples of our past work? Check out the gallery below to see projects we have completed in the past.</div>
            </div>
            <div class="box">
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
              <div class="gallery__item"><img src="<?php bloginfo('template_directory') ?>/./img/house.png"/></div>
            </div>
          </div>
        </div>
      </section>
    </div>
<?php
get_footer();
