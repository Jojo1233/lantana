$(document).ready(function() {
    // var str = location.href;
    
    // if(str.indexOf('/ru/') + 1) {
    //     $(".lang-box li").removeClass('active');
    //     $(".ru").addClass('active');
        
    // }
    // var entrue = true; 
    // $('.lang-box ul li a').each(function(o){
    //     var str = $(this).attr('href')+'/$';
    //     if (location.href.search(str) >= 0){
    //         $(this).parent('li').addClass('active');
    //         entrue = false;
    //     }
    // });
    // if (entrue) {
    //     $(".en").addClass('active');
    // }

    // $("#current-lang").click(function () {
    //     $('ul.lang-switcher').css('display', 'block');
    // });   
    // $(".lang-switcher li").click(function () {
    //     //alert(t);
    //     $("#current-lang").html($(this).html());
    //     $('ul.lang-switcher').css('display', 'none');
    // });

    // $(".lang-switcher").mouseleave(function () {
    //     $('ul.lang-switcher').css('display', 'none');
    // });

    

    $('.header a[href^="#"]').click(function(){ 
      var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
      if($element.length == 1) { 
         $('html, body').animate({ scrollTop: $element.offset().top }, 500); 
      }     
      return false;
    });

    $(".main_menu_button").click(function() {  //main_menu_button-выбираем кнопку меню
        $(".header-fade").slideToggle("slow"); //main_menu ul- выбираем верхнее меню, прячеми показываем его
    });
    
    $('.menu-ico').click(function(){
        if ($('.menu').css('display')=='none') {
            $('.menu').css('display','block');
        }else{
            $('.menu').css('display','none');
        }
    });

    $('.main-menu li a').click(function () {
        $('.main-menu li a').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        return true;
    });

    $('.main-menu li').removeClass('current-menu-item');
    
    $('.main-menu li a').click(function () {
      $('.main-menu li').removeClass('current-menu-item');
        $('.main-menu li').each(function () {
            //$(this).removeClass('current-menu-item');
        });
        
        return true;
    });
    $('.slider').owlCarousel({
        loop: true,
        margin:70,
        responsiveClass:true,
        nav: true,
        
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items: 3
            }
        }
    });
//$('.parallax-window').parallax({imageSrc: '/video/avd2.jpg'});

    $('a[name=modal]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+150);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });
    $('.window .close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask, .an-exit__krest').click(function () {
        $('#mask').hide();
        $('.window').hide();
    }); 


   function cleanTnakns(form){
        $('input[type="text"]').removeClass("error-input");
        $("input[type=text], textarea").val("");
        $('.window').hide();
        $('a[href=#thanks]').trigger('click');
        
    }


    $('input[type="text"]').mousedown(function() { 
        $('input[type="text"]').removeClass("error-input");
    });

    $(".form1").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });
    $(".form2").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });
     $(".brief").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });
    $(".form-contact").submit(function() { 
        var tel = $(this).find('input[name="tel"]');
        var empty = false;
        if (tel.val() == ""){
            empty = true;
        }
        if (empty == true){
            tel.addClass("error-input");
            tel.focus();
        }else{
            var form_data = $(this).serialize(); 
            $.ajax({
                type: "POST", 
                url: "/sendmessage.php", 
                data: form_data,
                success: function() {
                    cleanTnakns(this);
                }
            });
        }
        return false;
    });



  
 
  $("#order-service_submit").click(function () {

    var empty = true;
    $('.order-service  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });

    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      //alert('sssssss');
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.order-service').serialize(),
        success: function(data) {
        }
      });
      //$('body,html').animate({scrollTop:0},500); 
      $('a[href=#thank-spage3_form]').trigger('click');
    }
    
    return false;
  });
 




	$("li.sub").hover(function() {
		var wth = $(this).css('width');
		wth = wth.substr(0,3);
		
		var pos =Math.floor( wth / 2 );
		//alert(pos);
		//$(this).find('ul:before').css('margin-left','200px');

	});

	$(".years-item").mouseover(function() {
		//alert('dd');
		$(this).find('.y1').css('display','none')

	});
	$(".years-item").mouseout(function() {
		//alert('dd');
		$(this).find('.y1').css('display','block')

	});

	$(".gde-bloc_item").mouseover(function() {
		$(this).find('img').css('height','150%');
	});
	$(".gde-bloc_item").mouseout(function() {
		$(this).css('height','100%');
	});


	//alert(div(10, 3));

	//Таймер обратного отсчета
	//Документация: http://keith-wood.name/countdown.html
	//<div class="countdown" date-time="2015-01-07"></div>
	var austDay = new Date($(".countdown").attr("date-time"));
	$(".countdown").countdown({until: austDay, format: 'yowdHMS'});

	//Попап менеджер FancyBox
	//Документация: http://fancybox.net/howto
	//<a class="fancybox"><img src="image.jpg" /></a>
	//<a class="fancybox" data-fancybox-group="group"><img src="image.jpg" /></a>
	$(".fancybox").fancybox();

	//Навигация по Landing Page
	//$(".top_mnu") - это верхняя панель со ссылками.
	//Ссылки вида <a href="#contacts">Контакты</a>
	$(".top_mnu").navigation();

	//Добавляет классы дочерним блокам .block для анимации
	//Документация: http://imakewebthings.com/jquery-waypoints/
	$(".block").waypoint(function(direction) {
		if (direction === "down") {
			$(".class").addClass("active");
		} else if (direction === "up") {
			$(".class").removeClass("deactive");
		};
	}, {offset: 100});

	//Плавный скролл до блока .div по клику на .scroll
	//Документация: https://github.com/flesler/jquery.scrollTo
	$("a.scroll").click(function() {
		$.scrollTo($(".div"), 800, {
			offset: -90
		});
	});



	//Документация:
	//http://api.jquery.com/scrolltop/
	//http://api.jquery.com/animate/
	$("#top").click(function () {
		$("body, html").animate({
			scrollTop: 0
		}, 800);
		return false;
	});
	
	//Аякс отправка форм
	//Документация: http://api.jquery.com/jquery.ajax/
	$("form").submit(function() {
		$.ajax({
			type: "GET",
			url: "mail.php",
			data: $("form").serialize()
		}).done(function() {
			alert("Спасибо за заявку!");
			setTimeout(function() {
				$.fancybox.close();
			}, 1000);
		});
		return false;
	});

});




	




function navigation_scroll(){
    var offset = $('.header').height() || $(window).height() || 50;
    var scroll = $(document).scrollTop();

    if (scroll < 100) {
        $('.header-top')
            .toggleClass('header-no-fixed', false)
             .toggleClass('header-fixed', false);
       
            
           
     }     
    else if (scroll >= offset) {
        $('.header-top')
            .toggleClass('header-no-fixed', false)
            .toggleClass('header-fixed', true);
            
    }
    else if (scroll < offset - 50) {
        $('.header-top')
            .toggleClass('header-fixed', true)
            .toggleClass('header-no-fixed', false);
            
    }
}


$(document).scroll(function(){
    navigation_scroll();
});

