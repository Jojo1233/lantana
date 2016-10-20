<div class="clearfix"></div>

<section class="ah-contakt">
    <div class="container">
	    <div class="row">
	    <span class="ah-contakt-span2">Наши контакты</span>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Москва</span>
						<span class="ah-contakt-span1">8 (495) 502-93-30</span>
					</div>
					<div class="ah-contakt-bottom">
						<!-- <div id="map"></div> -->
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Санкт-Петербург</span>
						<span class="ah-contakt-span1">8 (812) 012-12-12</span>
					</div>
					<div class="ah-contakt-bottom">
						<!-- <div id="map1"></div> -->
					</div>
				</div>
			</div>

			<div class="clearfix"></div>

		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Воронеж</span>
						<span class="ah-contakt-span1">8 (495) 502-93</span>
					</div>
					<div class="ah-contakt-bottom">
						<!-- <div id="map2"></div> -->
					</div>
				</div>
			</div>
		    <div class="col-md-6 col-sm-6 col-xs-12">
				<div class="ah-contakt-wrapper">
					<div class="ah-contakt-top">
						<span class="ah-contakt-span">Нижний Новгород</span>
						<span class="ah-contakt-span1">8 (554) 054-45-45</span>
					</div>
					<div class="ah-contakt-bottom">
						<!-- <div id="map3"></div> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="clearfix"></div>


<script src="//api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
 <script type="text/javascript">
   ymaps.ready(init);
     var myMap,
		 myMap1,
		 myMap2,
		 myMap3,
		 myPlacemark,
		 myPlacemark1,
		 myPlacemark2,
         myPlacemark3;

	function init(){

		myMap = new ymaps.Map("map", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap1 = new ymaps.Map("map1", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap2 = new ymaps.Map("map2", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

		myMap3 = new ymaps.Map("map3", {
		 center: [55.73521577724309,37.6503515],
		 zoom: 16,
		 controls: []
		});

        myMap.behaviors.disable('scrollZoom');
        myMap1.behaviors.disable('scrollZoom');
        myMap2.behaviors.disable('scrollZoom');
        myMap3.behaviors.disable('scrollZoom');

		var myPlacemark = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark1 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark2 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});

		var myPlacemark3 = new ymaps.Placemark([55.73521577724309,37.6503515], {}, {
			iconLayout: 'default#image',
			iconImageHref: '/img/balun.png',
			iconImageSize: [48, 57],
			iconImageOffset: [-3, -42]
		});
		
		myMap.geoObjects.add(myPlacemark);
		myMap1.geoObjects.add(myPlacemark1);
		myMap2.geoObjects.add(myPlacemark2);
		myMap3.geoObjects.add(myPlacemark3);
	}
 </script>