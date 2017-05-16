<?php get_header(); ?>

<div class="middle">
	<div class="middle-content">
		<div class="transparent-background content-width">
			<div class="middle-content about-us">
				<h4 class="about-us-title">Кто мы?</h4>
				<div class="about-us-description">
					Мы команда профессиональных дипломированных специалистов с многолетним стажем работы в сфере иммиграционных и неиммиграционных процессов.
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content with-bottom-line">
	<div class="content-width row">
		<div class="content-block">
			<h4>Что мы можем?</h4>
			<ul class="content-list">
				<li>Подготовить документы для всех типов неиммиграционных виз США</li>
				<li>Оформить документы на получение иммиграционных виз США</li>
				<li>Подготовить документы для Посольства Великобритании и Канады на такие типы виз как: гостевая, туристическая, бизнес</li>
				<li>Помощь при заключении брака или бракоразводном процессе с иностранцами</li>
				<li>Составление брачных контрактов, подготовка нотариальных документов, Аппостиль</li>
				<li>Оформление документов для Посольств после отказов в визе и многое другое</li>
			</ul>
		</div>
		<div class="more-block">
			<a href="#" class="more-link">Подробнее</a>
		</div>
	</div>
</div>

<div class="content with-bottom-line">
	<div class="content-width">
		<div class="content-block">
			<h4>Наша команда</h4>
			<div class="images row">
				<div class="img-content">
					<img class="img-circle" src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/Sergey-Stupak-150x150.jpg" alt="">
					<div class="employeer-name">Ступак Сергей</div>
					<div class="employeer-description">Директор Ukraine-UBC</div>
				</div>
				<div class="img-content">
					<img class="img-circle" src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/Marina-Averina-1-150x150.jpg" alt="">
					<div class="employeer-name">Аверина Марина</div>
					<div class="employeer-description">Специалист Ukraine-UBC</div>
				</div>
				<div class="img-content">
					<img class="img-circle" src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/Lyudmila-CHerkass-150x150.jpg" alt="">
					<div class="employeer-name">Людмила Черкасс</div>
					<div class="employeer-description">Специалист Ukraine-UBC</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="content">
	<div class="content-width">
		<div class="content-block row">
			<div class="half">
				<h4>Давайте начнем</h4>
				<div>
					Для того чтобы мы смогли оценить ваши шансы на получение той или иной визы, вам достаточно заполнить анкету США, Великобритании или Канады и прислать их нам на электронную почту через форму справа или лично привести их вместе со своими заграничными паспортами к нам в офис для консультации.
				</div>
				<div class="questionnaires">
					<h4 class="title">Анкеты</h4>
					<div class="flags-block row">
						<a target="_blank" class="flag" href="#">
							<img src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/usa.png" alt="">
							<div>США</div>
						</a>
						<a target="_blank" class="flag" href="#">
							<img src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/britain.png" alt="">
							<div>Великобритания</div>
						</a>
						<a target="_blank" class="flag" href="#">
							<img src="http://ukraine-ubc.kiev.ua/wp-content/uploads/2017/05/canada.png" alt="">
							<div>Канада</div>
						</a>
					</div>
				</div>
			</div>
			<div class="half">
				<h4>Свяжитесь с нами</h4>
				<?php while(have_posts()): the_post(); the_content(); endwhile; ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>