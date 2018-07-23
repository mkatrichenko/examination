		<style type="text/css">
		.page .search .wrapper .text-block {
			<?php $searchImg = get_field('search_image', 'option');?>
  			background: url('<?php echo $searchImg['url']; ?>') no-repeat;
		}
		</style>
       
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