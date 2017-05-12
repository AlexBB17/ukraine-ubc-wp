<?php get_header(); ?>
<div class="row">
	<div class="content">
		<div class="inner-content">
            <div class="row">
                
                <div class="block block-50 contacts-map">
                    <div class="block-width">
                        <div class="block-title bg-blue">
                            <div class="ribbon ribbon-blue ribbon-left"></div>
                            <div class="ribbon ribbon-blue ribbon-right"></div>
                            <h5>Карта проезда</h5>
                        </div>
                        <div class="block-content">
                            <script src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=Q2568AceMld5ougOJrNmAjC0VZjyYAMF&amp;width=300&amp;height=250&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true" async="" type="text/javascript" charset="utf-8"></script>
                        </div>
                    </div>
                </div>

    			<div class="block block-50">
    				<div class="block-width">
                        <div class="block-title bg-blue">
                            <div class="ribbon ribbon-blue ribbon-left"></div>
                            <div class="ribbon ribbon-blue ribbon-right"></div>
                            <h5>Контакты</h5>
                        </div>
                        <div class="block-content">
        					<div class="contacts-title"><u>Офис:</u></div>
                            Киев, ул. Авиаконструктора Игоря Сикорского 6, офис 3 (рядом с Посольством США) <br>
        					<div class="contacts-title"><u>Телефоны:</u></div>
        					+38 (066) 299 4965 <br>
        					+38 (093) 811 9690 <br>
        					<div class="contacts-title"><u>e-mail:</u></div> 
                            info@ukraine-ubc.kiev.ua
                        </div>
    				</div>
    			</div>

            </div>

            <div class="block block-100">
                <div class="block-width">
        			<div class="block-title bg-grey">
                        <div class="ribbon ribbon-grey ribbon-left"></div>
                        <div class="ribbon ribbon-grey ribbon-right"></div>
                        <h5>Свяжитесь с нами</h5>
                    </div>
                    <div class="block-content">
        			    <?php while(have_posts()): the_post(); the_content(); endwhile; ?>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<?php get_template_part('sidebar-contacts'); ?>
</div>
<?php get_footer(); ?>