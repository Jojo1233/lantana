<script>
	Array.prototype.shuffle = function( b )
	{
	 var i = this.length, j, t;
	 while( i ) 
	 {
	  j = Math.floor( ( i-- ) * Math.random() );
	  t = b && typeof this[i].shuffle!=='undefined' ? this[i].shuffle() : this[i];
	  this[i] = this[j];
	  this[j] = t;
	 }
	 return this;
	};

	jQuery(document).ready(function(){
		$('.box').css('transition', 'all .5s ease-in-out');
		var awayposX = [-100, 200];
		var awayposY = [-100, 200];
		var heightbox1 = 400;
		var heightbox2 = 200;
		var size = 1;
		var box1posX = [0,0];
		var box1posY = [0,50];
		var box2posX = [0,0];
		var box2posY = [25,75];
		if(window.matchMedia('(min-width : 480px)').matches){
			size = 2;
			box1posX = [0,50];
			box1posY = [0,50];
			box2posX = [0,50];
			box2posY = [50,0];
		}
		if(window.matchMedia('(min-width : 992px)').matches){
			size = 4;
			box1posX = [0,50];
			box1posY = [0,0];
			box2posX = [25,75];
			box2posY = [0,0];
		}

		var width = 100/size;
		$('#shuffle').css('height', ((heightbox1*4)/size)+'px');
		$('#shuffle').css('width', 100+'%');
		$('#shuffle').css('z-index', '1');
		
		$('.box1').css('height', heightbox1+'px');
		$('.box2').css('height', heightbox2+'px');
		$('.box1').css('width', width+'%');
		$('.box2').css('width', width+'%');
		
		
		function az_filter(param){
			var i = 0;
			var j = 0;
			var elem = $('.box');
			var order = new Array();

			for(var k = 0; k<elem.length; k++){
				order.push(k);
			}
			order.shuffle();

			for(var k = 0; k<elem.length; k++){
			    // elem.each(function(index, value){
			    	if(elem.eq(order[k]).hasClass(param)){
				    	if(elem.eq(order[k]).hasClass('box1')&&(i<2)){
					    	elem.eq(order[k]).css('left', box1posX[i]+'%');
					    	elem.eq(order[k]).css('top', box1posY[i]+'%');
					    	elem.eq(order[k]).css('z-index', '1');
						    	
					    	i++;
					    	// alert(i);
					    } else if(elem.eq(order[k]).hasClass('box2')&&(j<4)){
					    	if(j%2==0){
						    	elem.eq(order[k]).css('left', box2posX[j/2]+'%');
						    	elem.eq(order[k]).css('top', box2posY[j/2]+'%');
						    	elem.eq(order[k]).css('z-index', '1');
						    	
						    	// alert(25+j*50);
						    	j++;
						    } else {
						    	elem.eq(order[k]).css('left', box2posX[Math.floor(j/2)]+'%');
						    	elem.eq(order[k]).css('top', (box2posY[Math.floor(j/2)]+((50*size)/4))+'%');
						    	elem.eq(order[k]).css('z-index', '1');
						    	
						    	j++;
						    	// alert(25+j*50);
						    }
					    } else {
					    	elem.eq(order[k]).css('top', awayposY[k%2]+'%');
							elem.eq(order[k]).css('left', awayposX[order[k]%2]+'%');
							elem.eq(order[k]).css('z-index', '-1');
					    }
					} else {
						elem.eq(order[k]).css('top', awayposY[k%2]+'%');
						elem.eq(order[k]).css('left', awayposX[order[k]%2]+'%');
						elem.eq(order[k]).css('z-index', '-1');
					}
			}
		    return;
		}
		$('.az-button').click(function(){
			az_filter($(this).attr('data-class'));
		});
		// alert($('input:radio:checked').attr('id'));
		// alert($("label[for='"+ $('input:radio:checked').attr('id') +"']").attr('data-class'));
		az_filter($("label[for='"+ $('input:radio:checked').attr('id') +"']").attr('data-class'));
	});
</script>

<div class="tabs tabs__margin">
	<input id="tab_1" type="radio" name="tab" checked="checked"/>
	<input id="tab_2" type="radio" name="tab"/>
	<input id="tab_3" type="radio" name="tab" />
	<input id="tab_4" type="radio" name="tab" />
	<input id="tab_5" type="radio" name="tab" />
	<input id="tab_6" type="radio" name="tab" />
	<h2>наши работы</h2>
	<label for="tab_1" id="tab_l1" class="az-button" data-class="all">Все</label>
	<label for="tab_2" id="tab_l2" class="az-button" data-class="class1">Кирпич</label>
	<label for="tab_3" id="tab_l3" class="az-button" data-class="class2">Монолит</label>
	<label for="tab_4" id="tab_l4" class="az-button" data-class="class3">Дерево</label>
	<label for="tab_5" id="tab_l5" class="az-button" data-class="class4">Комбинированные материалы</label>
	<label for="tab_6" id="tab_l6" class="az-button" data-class="class5">Отделочные работы</label>
	
	<section id="shuffle">
		<div class="box box1 class1 all">
			<div class="az-item">
				<img src="img/az-img1.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта1</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class1 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта2</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class2 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта3</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class2 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта4</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class1 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта5</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class2 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта6</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class1 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта7</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class1 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта8</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class2 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта9</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class2 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта10</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class1 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта11</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class2 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта12</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class3 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта13</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class3 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта14</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class4 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта15</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class4 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта16</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class3 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта17</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class4 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта18</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class3 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта19</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class3 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта20</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class4 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта21</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class4 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта22</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class3 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта23</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class4 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта24</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class5 all">
			<div class="az-item">
				<img src="img/az-img2.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта25</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class5 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта26</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class5 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта27</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box1 class5 all">
			<div class="az-item">
				<img src="img/az-img3.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта28</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class5 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта29</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
		<div class="box box2 class5 all">
			<div class="az-item">
				<img src="img/az-img4.jpg" alt="">
				<div class="az-mask">
					<a href="#" class="az-photo">12</a>
					<div class="az-item-descrip">
						<span class="az-title">Название проекта30</span>
						<span class="az-qual az-left">500 м2</span>
						<span class="az-qual az-center">Монолит</span>
						<span class="az-qual az-right az-border-right-none">5 спален</span>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
