<?php get_header(); ?>

<div class="row">
	<div class="wallpaper"></div>
    <div class="content">
        <div class="inner-content">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
				<?php the_content(); ?>
			<?php endwhile; endif; ?>
        </div>
    </div>
    <?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>