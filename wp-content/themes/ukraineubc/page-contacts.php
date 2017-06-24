<?php get_header(); ?>
<div class="content with-bottom-line">
    <div class="content-width">
    	<div class="content-block row">
			<h1><?php the_title(); ?></h1>
			<div class="half">
				<script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Q2568AceMld5ougOJrNmAjC0VZjyYAMF&amp;width=470&amp;height=350&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true" async="" type="text/javascript" charset="utf-8"></script>
			</div>
			<div class="half">
				<?php if (have_posts()): while (have_posts()): the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; endif; ?>
			</div>
	  	</div>
	</div>
</div>


<div class="content">
    <div class="content-width">
		<div class="content-block">
			<h4>Киев</h4>
		    ул. Авиаконструктора Игоря Сикорского 6, офис 3 (рядом с Посольством США) <br>
		    info@ukraine-ubc.kiev.ua <br>
			Тел.: +38 (044) 458 4457, +38 (066) 299 4965, +38 (093) 811 9690 <br>
		</div>
	</div>
</div>
<?php get_footer(); ?>