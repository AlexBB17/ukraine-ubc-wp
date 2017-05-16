<?php get_header(); ?>
<div class="content">
    <div class="content-width row">
		<h1><?php the_title(); ?></h1>
		<?php if (have_posts()): while (have_posts()): the_post(); ?>
			<?php the_content(); ?>
		<?php endwhile; endif; ?>

		<?php
		  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2');
		  if ($children): ?>
			  <ul class="content-list">
			  	<?php echo $children; ?>
			  </ul>
		  <?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>