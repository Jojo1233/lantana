
<div class="clearfix"></div>
<section class="ah-slider">
	<div class="container container_style2">
		<span class="ah-slider-title">— Популярные категории —</span>
		<div class="choose_slider">
			<div id="btn_prev2"></div>
			<div class="choose_slider_items">
				<ul id="mySlider2">
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider1.png" alt="ah-slider1">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">Абстракция</span>
					        </div>
				        </div>
				    </li>
				    <li class="current_item">
						<div class="current_item1">
							<div class="ah-slideimg">
								<img src="img/ah-slider2.jpg" alt="ah-slider2">
							</div>
							<div class="ah-current-wrapp">
						        <span class="item-title">Африканские</span>
					        </div>
				        </div>			    
			        </li>
				    <li class="current_item">
						<div class="current_item1">
							<div class="ah-slideimg">
								<img src="img/ah-slider3.jpg" alt="ah-slider3">
							</div>
							<div class="ah-current-wrapp">
						        <span class="item-title">пейзаж</span>
					        </div>
				        </div>			    
			        </li>
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider4.jpg" alt="ah-slider4">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">цветы</span>
					        </div>
				        </div>                               
				    </li>
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider5.jpg" alt="ah-slider5">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">город</span>
					        </div>
				        </div>                               
				    </li>
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider1.png" alt="ah-slider1">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">Абстракция</span>
					        </div>
				        </div>                                
				    </li>
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider2.jpg" alt="ah-slider2">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">Африканские</span>
					        </div>
				        </div>                                
				    </li>
				    <li class="current_item">
				        <div class="current_item1">
					        <div class="ah-slideimg">
								<img src="img/ah-slider3.jpg" alt="ah-slider3">
							</div>
					        <div class="ah-current-wrapp">
						        <span class="item-title">пейзаж</span>
					        </div>
				        </div>                                
				    </li>
				    <li class="current_item">
						<div class="current_item1">
							<div class="ah-slideimg">
								<img src="img/ah-slider4.jpg" alt="ah-slider4">
							</div>
							<div class="ah-current-wrapp">
								<span class="item-title">цветы</span>
							</div>
						</div>                               
				    </li>
				</ul>
			</div>
			<div id="btn_next2"></div>
		</div>
	</div>
</section>
<div class="clearfix"></div>


<script>
    function func1() {
        $('.current_item1').addClass('current_item2')
        $('.current_item .current_item1').removeClass('current_item2');
        // $('.item-title').addClass('hide')
        $('.current_item .item-title').removeClass('hide');
        // $('.item-someth').addClass('hide')
        $('.current_item .item-someth').removeClass('hide');
    }
    $(function() {
        $("#mySlider2").AnimatedSlider( { prevButton: "#btn_prev2", 
            nextButton: "#btn_next2",
            visibleItems: 5,
            infiniteScroll: true,
            willChangeCallback: function(obj, item) { $("#statusText").text("Will change to " + item); },
            changedCallback: function(obj, item) { $("#statusText").text("Changed to " + item); }
        });
        $('#btn_next2, #btn_prev2').click(function(){
            func1();
        });
            func1();
    });
</script>