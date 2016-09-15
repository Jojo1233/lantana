$(document).ready(function() {

	$(".menu-ico").click(function(){
    //$(this).parent().parent().find('.menu-box').css('display', 'block');
  });

$('.menu-ico').click(function(){
    if ($('.menu-box').css('display')=='none') {
       $('.menu-box').css('display','block');
    }else{
      $('.menu-box').css('display','none');
    }
});

$('.footer-menu-toggle').click(function(){
 
    if ($('.footer-menu').css('display')=='none') {
       $('.footer-menu').css('display','block');
    }else{
      $('.footer-menu').css('display','none');
    }
});




$('.tab-button').click(function(){
  $('.calc-box .tab-button').each(function(i,elem) {
    $(this).removeClass('active-tab');
  });
  $(this).addClass('active-tab');
});

$('.minus').click(function(){
  elem = $('#page-input');
  val = $('#page-input').val();
  if (val != ""){
    if ((val-1)< 1){
      val = 1;  
    }
    elem.val(val-1);
  }
});

$('.plus').click(function(){
  elem = $('#page-input');
  val = $('#page-input').val();
  if (val != ""){
   
    elem.val(parseInt(val)+1);
  }
});

$(function(){
  $('select').selectric();
});


  //Docs: http://owlgraphic.com/owlcarousel/
  var owl = $("#clients-carousel");
 
  owl.owlCarousel({
    
      items : 2, //10 items above 1000px browser width
      itemsDesktop : [1000,2], //5 items between 1000px and 901px
      itemsDesktopSmall : [900,1], // betweem 900px and 601px
      itemsTablet: [600,1], //2 items between 600 and 0
      itemsMobile : false// itemsMobile disabled - inherit from itemsTablet option

     
  });
 
  // Custom Navigation Events
  $(".next").click(function(){
    owl.trigger('owl.next');
  })
  $(".prev").click(function(){
    owl.trigger('owl.prev');
  })
  $(".play").click(function(){
    owl.trigger('owl.play',1000); //owl.play event accept autoPlay speed as second parameter
  })
  $(".stop").click(function(){
    owl.trigger('owl.stop');
  })


  $(".down").hide();
  $("span h3").click(function(){
    $(this).find('span').toggleClass('expand expand2');
    $(this).parent().next().slideToggle();
  });


  $(".top").click(function(){

    $(this).find('span').toggleClass('expand-up expand-down');
    $(this).next().slideToggle();
     $(this).toggleClass('top-up top-down');
  });


});

