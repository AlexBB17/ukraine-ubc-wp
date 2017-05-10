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
		</div>
	</div>
	<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>