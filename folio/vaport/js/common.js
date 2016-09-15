$(document).ready(function() {

    $('.main-menu li a').click(function () {
        $('.main-menu li a').each(function () {
            $(this).removeClass('active');
        });
        $(this).addClass('active');
        return true;
    });

    $('.main-menu a[href^="#"]').click(function(){ 
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

    $(".single_image").fancybox();

    $("a[rel=group]").fancybox({
      'transitionIn' : 'none',
      'transitionOut' : 'none',
      'titlePosition' : 'over',
      'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
       return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
       }
    });
    $("a[rel=group2]").fancybox({
      'transitionIn' : 'none',
      'transitionOut' : 'none',
      'titlePosition' : 'over',
      'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
       return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
       }
    });

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

    $('a[name=modal-card]').click(function(e) {
        e.preventDefault();
        var id = $(this).attr('href');
        var maskHeight = $(document).height();
        var maskWidth = $(window).width();
        $('#mask').css({'width':maskWidth,'height':maskHeight});
        $('#mask').fadeTo("slow",0.8); 
        var winH = $(window).height();
        var winW = $(window).width();
        posTop = (window.pageYOffset !== undefined) ? window.pageYOffset : (document.documentElement || document.body.parentNode || document.body).scrollTop;
        $(id).css('top',  posTop+100);
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });
     
    $('.window .close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    }); 

$('.loop').owlCarousel({
    center: true,
    items:2,
    loop:true,
    margin:3,
    nav: true,
    navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
    responsive:{
        600:{
            items:5
        }
    }
});

    $('.slider').owlCarousel({
        loop: false,
        margin:30,
        responsiveClass:true,
        nav: false,
        
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items: 1
            }
        }
      });

    $('.page2 .arrs').click(function () {
        $('.slider').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav: true,
             
            navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items: 1
                }
            }
          });
        var $carousel = $('slider');        
    $carousel.data('owl.carousel')._invalidated.width = true;
    $carousel.trigger('refresh.owl.carousel');

    }); 


    $('.page2-slider').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        nav: true,
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:2
            },
            600:{
                items:5
            },
            1000:{
                items: 5
            }
        }
      });
    
    $('.page4-slider').owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        nav: true,
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items: 2
            }
        }
      });

    $('.page9-slider-1').owlCarousel({
        loop:false,
        margin:30,
        responsiveClass:true,
        nav: true,
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items: 4
            }
        }
      });

    $('.page9-slider-1').owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        nav: true,
        navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items: 4
            }
        }
      });

    $("#tab1").click(function () {
          $('.page9-slider-1').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav: true,
            navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                },
                1000:{
                    items: 4
                }
            }
          });
    });

    $("#tab2").click(function () {
          $('.page9-slider-2').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav: true,
            navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                },
                1000:{
                    items: 4
                }
            }
          });
    });

    $("#tab3").click(function () {
          $('.page9-slider-3').owlCarousel({
            loop:true,
            margin:30,
            responsiveClass:true,
            nav: true,
            navText:['<span class="next arrs"><i class="fa fa-chevron-right"></i></span>','<span class="prev arrs"><i class="fa fa-chevron-left"></i></span>'],
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:4
                },
                1000:{
                    items: 4
                }
            }
          });
    });

    $("#page2-form-1_submit").click(function () {
      
        var empty = true;
        $('.page2-form-1  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.page2-form-1').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#page2-form-2_submit").click(function () {
        
        var empty = true;
        $('.page2-form-2  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.page2-form-2').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#page5-form_submit").click(function () {
        var empty = true;
        $('.page5-form  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.page5-form').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });


    $("#form-zvonok_submit").click(function () {
        var empty = true;
        $('.form-zvonok  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-zvonok').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#form-master_submit").click(function () {
        var empty = true;
        $('.form-master  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-master').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

   
    $("#form-card_submit").click(function () {
        var empty = true;
        $('.form-card  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-card').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#form-order_submit").click(function () {
        var empty = true;
        $('.form-order  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-order').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $(".tab-content .button1").click(function () {
        var tovar = $(this).parent().parent().find('.title').html();
        $('#tovar').html(tovar);
    });


    $(".phone").mask("+ 7 (999) 9999 99 99?"); 

});


function navigation_scroll(){
    var offset = $('.header-top').height() || $(window).height() || 150;
    var scroll = $(document).scrollTop();

    if (scroll < 50) {
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
