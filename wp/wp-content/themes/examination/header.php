<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  	<title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
  	<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" type="image/x-icon">
    <?php wp_head();	?>
  </head>
  <body>
    <div class="header">
      <div class="header-top">
        <div class="wrapper container"><a class="find" href="<?php the_field('head_title_link', 'option'); ?>"><?php $txt = get_field('head_title', 'option'); echo $txt; ?></a>
		<?php
				wp_nav_menu( [
					'theme_location' => 'top-header-menu',
				] );
			?>
        </div>
      </div>
      <div class="header-bottom">
        <div class="wrapper container">
          <a class="logo" href="<?php  $link = get_home_url(); echo $link; ?>"><img src="<?php $img = get_field('head_logo', 'option'); echo $img['url'];  ?>"/><a>
          <?php
				wp_nav_menu( [
					'theme_location' => 'bottom-header-menu',
				] );
			?>
          
          <ul class="menu">
            <div class="menu__icon"><i class="fas fa-bars"></i></div>
            <?php
				wp_nav_menu( [
					'theme_location' => 'mobile-menu',
				] );
			?>
          </ul>
        </div>
      </div>
    </div>