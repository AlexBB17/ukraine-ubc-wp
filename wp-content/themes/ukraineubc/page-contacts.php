<?php get_header(); ?>
<div class="content with-bottom-line">
    <div class="content-width">
    	<div class="content-block row">
			<h1><?php the_title(); ?></h1>
			<div class="half">
				<script src='https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCVwe7RbUaftu7OLzQL8XrWbQswXMtop0M'></script><div style='overflow:hidden;height:350px;width:470px;'><div id='gmap_canvas' style='height:350px;width:470px;'></div><div><small><a href="http://www.googlemapsgenerator.com/ru/">карты</a></small></div><div><small><a href="https://gefalltmirbutton.org/de/">hier</a></small></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style></div><script type='text/javascript'>function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(50.46500881744761,30.42994597804864),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(50.46530881744791,30.42882577800864)});infowindow = new google.maps.InfoWindow({content:'<strong>Ukraine-UBC</strong><br>ул. Авиаконструктора Игоря Сикорского 6<br>'});google.maps.event.addListener(marker, 'click', function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
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