$(document).ready(function() {

$('a[href^="#"]').click(function(){ 
  var $element = $('a[name=' + $(this).attr('href').substr(1) + ']');
  if($element.length == 1) { 
     $('html, body').animate({ scrollTop: $element.offset().top }, 500); 
  }     
  return false;
});


$('.arrow').click( function(event){ 
    var val = $(this).html();
    if (val.trim() == '<i class="fa fa-chevron-up"></i>') {
        $(this).parent().parent().parent().parent().find('.inner-list').slideToggle();
        $(this).html('<i class="fa fa-chevron-down"></i>');
        $(this).closest('li').removeClass("down");
    }else{
        $(this).parent().parent().parent().parent().find('.inner-list').slideToggle();
        $(this).html('<i class="fa fa-chevron-up"></i>');
        $(this).closest('li').addClass("down");
        
    }
    return false;
});


   $('a[name=modal-order]').click(function(e) {
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
 
$('a[name=modal-video]').click(function(e) {
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
    var vcont = $('#video-frame').html();
    vcont=vcont.replace(/autoplay=0/g,"autoplay=1");
    $('#video-frame').html(vcont);
    $(id).fadeIn(500); 
  
  });
  $('.window2 .close').click(function (e) {
    e.preventDefault();
    $('#mask, .window2').hide();
  }); 
  $('.order .close').click(function (e) {
    e.preventDefault();
    $('#mask').hide();
  }); 
  $('.video-window .close').click(function () {
   $('.video-window').hide();
    $('#mask').hide();
  }); 

  $('#mask').click(function () {
      $(this).hide();
    
      $('.order').hide();
      $('.video-window').hide();
  }); 



  $(".button-1").click(function () {
    
    return false;
  });



  $(".form-1_submit").click(function () {
    var empty = true;
    $('.form-1  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.form-1').serialize(),
        success: function(data) {
        }
      });
      
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });

$(".form-2_submit").click(function () {
    var empty = true;
    $('.form-2  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.form-2').serialize(),
        success: function(data) {
        }
      });
      
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });

$('.slider').owlCarousel({
    loop:true,
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



  $(".phone").mask("+ 7 (999) 9999 99 99?"); 

});

