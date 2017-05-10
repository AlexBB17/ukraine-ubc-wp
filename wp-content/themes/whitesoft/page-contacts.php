<?php get_header(); ?>
<div class="row">
	<div class="content">
		<div class="inner-content">

			<div class="block block-100">
				<div class="block-width">
					<strong><u>Офис</u>:</strong> <br> Киев, ул. Авиаконструктора Игоря Сикорского 6, офис 3 (рядом с Посольством США) <br>
					<strong><u>Тел</u>:</strong> <br>
					+38 (066) 299 4965 <br>
					+38 (093) 811 9690 <br>
					<strong><u>e-mail</u>:</strong> megano@ukr.net

					<div class="contacts-title">Карта проезда:</div>
					<script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Q2568AceMld5ougOJrNmAjC0VZjyYAMF&amp;width=100%&amp;height=450&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true" async="" type="text/javascript" charset="utf-8"></script>
				</div>
			</div>
		</div>
	</div>
	<?php get_template_part('sidebar-contacts'); ?>
</div>
<?php //while(have_posts()): the_post(); the_content(); endwhile; ?>
<?php get_footer(); ?>