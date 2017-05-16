<?php get_header(); ?>

<?php if (have_posts()) : ?>
	<div class="content with-bottom-line">
		<div class="content-width row">
			<div class="content-block">
				<h1><?php the_title(); ?></h1>
				<?php while(have_posts()) {
					the_post();
					the_content();
				} ?>
			</div>
			<div class="more-block f-l"></div>
		</div>
	</div>
<?php endif; ?>

<div class="content">
    <div class="content-width row">
    	<div class="content-block">
			<?php
			  $children = wp_list_pages('title_li=&child_of='.$post->ID.'&echo=0&depth=2');
			  if ($children): ?>
				  <ul class="list-pages">
				  	<?php echo $children; ?>
				  </ul>
			  <?php endif; ?>
		  </div>
	</div>
</div>

<?php get_footer(); ?>