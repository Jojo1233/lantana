$(document).ready(function() {

    $(".single_image").fancybox();

    $("a[rel=group]").fancybox({
    'transitionIn' : 'none',
        'transitionOut' : 'none',
        'titlePosition' : 'over',
        'titleFormat' : function(title, currentArray, currentIndex, currentOpts) {
            return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
        }
    });


  $('a[name=modal-thanks]').click(function(e) {
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

  $('.window2 .close').click(function (e) {
    e.preventDefault();
    $('#mask, .window2').hide();
  }); 
  $('.ocenka .close').click(function (e) {
    e.preventDefault();
    $('#mask, .ocenka').hide();
  }); 
  $('.window-map .close').click(function (e) {
    e.preventDefault();
    $('#mask, .window-map').hide();
  }); 
  $('.video-window .close').click(function (e) {
    e.preventDefault();
    $('#mask, .video-window').hide();
  }); 

  $('#mask').click(function () {
      $(this).hide();
      $('.window2').hide();
      $('.ocenka').hide();
      $('.window-map').hide();
      $('.video-window').hide();
  }); 

  $("#top-form_submit").click(function () {
    var empty = true;
    $('.top-form  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      //alert('sssssss');
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.top-form').serialize(),
        success: function(data) {
        }
      });
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });

  $("#form2_submit").click(function () {
    var empty = true;
    $('.form2  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.form2').serialize(),
        success: function(data) {
        }
      });
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });


  $("#form3_submit").click(function () {
    var empty = true;
    $('.form3  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.form3').serialize(),
        success: function(data) {
        }
      });
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });


  $("#zvonok_form_submit").click(function () {
    var empty = true;
    $('.zvonok_form  input[name="tel"]').each(function(o){
        if ($(this).val() == ""){empty = false;}
    });
    if (empty == false){
      alert("Заполните, пожалуйста, Ваш телефон");
    }else{
      $.ajax({
        type: 'POST',
        url: '/sendmessage.php',
        data: $('.zvonok_form').serialize(),
        success: function(data) {
        }
      });
      $('.ocenka .close').trigger('click');
      $('a[href=#thanks]').trigger('click');
    }
    var empty = true;
    return false;
  });




  $('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText:['<span class="next arrs"></span>','<span class="prev arrs"></span>'],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:4,
            nav:false
        },
        1000:{
            items:4,
            nav:true,
            loop:false
        }
    }
  });

  $('.review-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText:['<span class="next2 arrs2"></span>','<span class="prev2 arrs2"></span>'],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:4,
            nav:false
        },
        1000:{
            items:3,
            nav:true,
            loop:false
        }
    }
  });

$('.result-carousel').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    navText:['',''],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
            nav:false
        },
        1000:{
            items:1,
            nav:true,
            loop:false
        }
    }
  });
  

  $(".phone").mask("+7 (999) 999-9999?");

});

