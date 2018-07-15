

<!--
<?php 
$args = array( 'post_type' => 'car', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();?>
 
  <a href="<?php the_permalink(); ?>"><?php the_title();?></a>
  
	<div class="entry-content">
		<?php  echo the_content();?>
	</div>
<?php endwhile; ?>
-->

<?php $brands = get_terms('brand');
	foreach ($brands as $brand) : ?>
	<li class="archive-categories__item">
 		<?php 	$term_link = get_term_link($brand, 'brand'); 
				$term = get_term( $brand, 'brand' );
				$slug = $term->slug;?>
		<a href="<?php echo $term_link; ?>">ссылка на раздел <?php  echo $slug; ?></a>
	</li>
<?php endforeach; ?>


