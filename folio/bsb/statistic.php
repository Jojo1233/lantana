<!doctype html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Статистика</title>

	<link rel="stylesheet" href="libs/bootstrap/bootstrap-grid-3.3.1.min.css" />
	<link rel="stylesheet" href="libs/font-awesome-4.2.0/css/font-awesome.min.css" />
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.css" rel="stylesheet">
	<link rel="stylesheet" href="libs/fancybox/jquery.fancybox.css" />
	<link rel="stylesheet" href="libs/owl.carousel/assets/owl.carousel.css" />
	<link rel="stylesheet" href="libs/wow/animate.css">
	<link type="text/css" href="css/jquery.jscrollpane.css" rel="stylesheet" media="all" />

	<link rel="shortcut icon" href="favicon.ico" />
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/style5.css">

</head>
<body>
	<script src="libs/jquery/jquery-1.11.1.min.js"></script>
	<script src="libs/owl.carousel/owl.carousel.js"></script>
	<script src="libs/fancybox/jquery.fancybox.pack.js"></script>
	<script src="libs/wow/wow.min.js"></script>
	<script type="text/javascript" src="js/jquery.mousewheel.js"></script>
	<script type="text/javascript" src="js/jquery.jscrollpane.min.js"></script>

	<script>
    	new WOW().init();
    </script>

	<script src="js/responsiveTabs.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/common.js"></script>

	<?php require_once('includes/header.php'); ?>
	<div class="clearfix"></div>
	<section class="main-content">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1>СТАТИСТИКА</h1>						
				</div>
				<div class="clear"></div> 
				<div class="col-md-12">
					<ul class="male">
						<li><a href="#">МУЖЧИНЫ</a></li>
						<li><a href="#">ЖЕНЩИНЫ</a></li>
					</ul>	
				</div>
				<div class="clear"></div>
				<div class="col-md-3">
					<span class="gamers">
						<span>По</span>
						<span><a href="#">5</a></span>
						<span><a href="#">10</a></span>
						<span><a href="#">25</a></span>
						<span><a href="#">50</a></span>
						<span><a href="#">100</a></span>
						<span>игроков</span>
					</span>
				</div>
				<div class="col-md-3">
					<div  class="az-select az-margin-bottom10 az-select">
						<select name="" id="" > 
							<option value="1">Лига Белова</option>
							<option value="2">Лига Петрова</option>
							<option value="3">Суперфинал</option>
							<option value="4">Дивизионы</option>
							<option value="5">АСБ ФЕСТ</option>
							<option value="6">Матчи звезд</option>
							<option value="7">3x3</option>
							<option value="8">Сборная</option>
							<option value="9">Тренировачный лагерь</option>
							<option value="10">Разное</option>
						</select>						
					</div>
				</div>	
				<div class="col-md-3">
					<div class="az-select az-margin-bottom10 az-select">
						<select name="" id="" > 
							<option value="1">Все дивизионы</option>
						</select>								
					</div>
				</div>
				<div class="col-md-3">
					<div class="az-select az-margin-bottom10 az-select">
						<select name="" id="" > 
							<option value="1">Очки за игру</option>
							<option value="2">Передачи за игру</option>
							<option value="3">Перехваты за игру</option>
							<option value="4">Подборы за игру</option>
							<option value="5">Потери за игру</option>
							<option value="6">Точность штрафных</option>
							<option value="7">Удачные штрафные за игру</option>	
						</select>					
					</div>
				</div>
					<div class="clear"></div>
				<div class="col-md-12">	
					<span class="points">Очки за игру (Минимально игр: 2)</span>
					<table class="table_statistic" >
						<tr class="bg_color1" >
							<td class="ab-simbol">№</td>						
							<td>Игрок</td>
							<td>Команда</td>						
							<td>Игр</td>
							<td>Очки</td>						
							<td>Очки за игру</td>
						</tr>
						<tr>
							<td>1</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>				
							<td>4</td>
							<td>147</td>						
							<td>36.8</td>
						</tr>
						<tr class="bg_color">
							<td>2</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>					
							<td>2</td>
							<td>71</td>						
							<td>36.0</td>
						</tr>
						<tr>
							<td>3</td>						
							<td>Русаков Владимир</td>
							<td>ОРУ(Оренбург)</td>					
							<td>3</td>
							<td>66</td>						
							<td>35.5</td>
						</tr>
						<tr class="bg_color">
							<td>4</td>						
							<td>Герасимов Станислав</td>
							<td>ВГУЭС(Владивосток)</td>				
							<td>2</td>
							<td>120</td>						
							<td>34.8</td>
						</tr>
						<tr>
							<td>5</td>						
							<td>Кочегаров Илья</td>
							<td>ТГУ(Тольяти)</td>					
							<td>5</td>
							<td>104</td>						
							<td>33.2</td>
						</tr>
						<tr class="bg_color">
							<td>6</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>				
							<td>3</td>
							<td>76</td>						
							<td>33</td>
						</tr>
						<tr>
							<td>7</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>					
							<td>2</td>
							<td>58</td>						
							<td>31.6</td>
						</tr>
						<tr class="bg_color">
							<td>8</td>						
							<td>Русаков Владимир</td>
							<td>ОГУ(Оренбург)</td>					
							<td>4</td>
							<td>100</td>						
							<td>30.9</td>
						</tr>
						<tr>
							<td>9</td>						
							<td>Герасимов Станислав</td>
							<td>ВГУЭС(Владивосток)</td>				
							<td>2</td>
							<td>93</td>						
							<td>30.9</td>
						</tr>
						<tr class="bg_color">
							<td>10</td>						
							<td>Кочегаров Илья</td>
							<td>ТГУ(Тольяти)</td>					
							<td>2</td>
							<td>93</td>						
							<td>30.2</td>
						</tr>
						<tr>
							<td>11</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>				
							<td>2</td>
							<td>87</td>						
							<td>28.7</td>
						</tr>
						<tr class="bg_color">
							<td>12</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>					
							<td>2</td>
							<td>147</td>						
							<td>28</td>
						</tr>
						<tr>
							<td>13</td>						
							<td>Русаков Владимир</td>
							<td>ОГУ(Оренбург)</td>					
							<td>3</td>
							<td>71</td>						
							<td>27.9</td>
						</tr>
						<tr class="bg_color">
							<td>14</td>						
							<td>Герасимов Станислав</td>
							<td>ВГУЭС(Владивосток)</td>				
							<td>2</td>
							<td>66</td>						
							<td>27.4</td>
						</tr>
						<tr>
							<td>15</td>						
							<td>Кочегаров Илья</td>
							<td>ТГУ(Тольяти)</td>				
							<td>2</td>
							<td>120</td>						
							<td>27.3</td>
						</tr>
						<tr class="bg_color">
							<td>16</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>				
							<td>2</td>
							<td>104</td>						
							<td>27.3</td>
						</tr>
						<tr>
							<td>17</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>					
							<td>2</td>
							<td>76</td>						
							<td>27.3</td>
						</tr>
						<tr class="bg_color">
							<td>18</td>						
							<td>Русаков Владимир</td>
							<td>ОГУ(Оренбург)</td>					
							<td>2</td>
							<td>58</td>						
							<td>27</td>
						</tr>
						<tr>
							<td>19</td>						
							<td>Герасимов Станислав</td>
							<td>ВГУЭС(Владивосток)</td>				
							<td>4</td>
							<td>100</td>						
							<td>26.4</td>
						</tr>
						<tr class="bg_color">
							<td>20</td>						
							<td>Кочегаров Илья</td>
							<td>ТГУ(Тольяти)</td>					
							<td>2</td>
							<td>93</td>						
							<td>26.4</td>
						</tr>
						<tr>
							<td>21</td>						
							<td>Новиков Павел</td>
							<td>БелГТУ(Белгород)</td>				
							<td>3</td>
							<td>93</td>						
							<td>25.7</td>
						</tr>
						<tr class="bg_color">
							<td>22</td>						
							<td>Шепелев Никита</td>
							<td>СамГТУ(Самара)</td>					
							<td>2</td>
							<td>87</td>						
							<td>25.5</td>
						</tr>
						<tr>
							<td>23</td>						
							<td>Русаков Владимир</td>
							<td>ОГУ(Оренбург)</td>					
							<td>2</td>
							<td>79</td>						
							<td>25.2</td>
						</tr>
						<tr class="bg_color">
							<td>24</td>						
							<td>Герасимов Станислав</td>
							<td>ВГУЭС(Владивосток)</td>				
							<td>2</td>
							<td>78</td>						
							<td>24.6</td>
						</tr>
						<tr>
							<td>25</td>						
							<td>Кочегаров Илья</td>
							<td>ТГУ(Тольяти)</td>				
							<td>2</td>
							<td>69</td>						
							<td>24.1</td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</section>
	<?php require_once('includes/footer.php'); ?>

	
</body>
</html>