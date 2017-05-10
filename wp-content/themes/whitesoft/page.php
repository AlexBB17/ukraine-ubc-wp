<?php get_header(); ?>
<div class="row">
    <div class="content">
        <div class="inner-content">
			<div class="main-heading">
				<h1><?php the_title(); ?></h1>
			</div>
			<?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>

			<?php
			  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2');
			  if ($children): ?>
				  <ul>
				  	<?php echo $children; ?>
				  </ul>
			  <?php endif; ?>
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>