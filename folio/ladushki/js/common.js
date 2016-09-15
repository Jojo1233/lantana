$(document).ready(function() {

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
      
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    }); 


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

    $('.testimonials').owlCarousel({
        loop:true,
        margin:30,
        responsiveClass:true,
        nav: true,
        navText:['<span class="next arrs"><i class="fa fa-arrow-circle-o-right"></i></span>','<span class="prev arrs"><i class="fa fa-arrow-circle-o-left"></i></span>'],
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

    $("#page3-form_submit").click(function () {
        var empty = true;
        $('.page3-form  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.page3-form').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#form-tarif-standart_submit").click(function () {
        var empty = true;
        $('.form-tarif-standart  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-tarif-standart').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#form-tarif-biznes_submit").click(function () {
        var empty = true;
        $('.form-tarif-biznes  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-tarif-biznes').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#form-tarif-premium_submit").click(function () {
        var empty = true;
        $('.form-tarif-premium  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.form-tarif-premium').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });

    $("#any-form_submit").click(function () {
        var empty = true;
        $('.any-form input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш email");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.fany-form').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href=#thanks]').trigger('click');
        }
        var empty = true;
        return false;
    });



    //$(".phone").mask("+ 7 (999) 9999 99 99?"); 

});

