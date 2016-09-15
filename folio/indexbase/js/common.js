
$(document).ready(function(){
   
    $("#current").click(function () {
        $('ul.lang-switcher').css('display', 'block');
    });   
    $(".lang-switcher li").click(function () {
        //alert(t);
        $("#current").html($(this).html());
        $('ul.lang-switcher').css('display', 'none');
    });

    $(".lang-switcher").mouseleave(function () {
        $('ul.lang-switcher').css('display', 'none');
    });

    $("#top-slider .item").hover(function () {
        $(this).find('img').toggle();

        $(this).find('.case-box').html('<img src="img/t4.png">');
    });
    $("#top-slider .item").mouseleave(function () {
        $(this).find('.case-box').html('');
    });


   

   
    $("#top-slider").owlCarousel({
        loop:false,
        margin:0, 
        nav:false, 
        autoplay:false, 
        responsive:{ 
            0:{
                items:4
            },
            600:{
                items:5
            },
            1000:{
                items:10
            },
            1200:{
                items:15
            }
        }
    });

});

function navigation_scroll(){
    var offset = $('.slider-wrap').height() || $(window).height() || 150;
    var scroll = $(document).scrollTop();

    if (scroll < 50) {
        $('.slider-wrap')
            .toggleClass('header-no-fixed', false)
             .toggleClass('slider-wrap-fixed', false);
       
            
           
     }     
    else if (scroll >= offset) {
        $('.slider-wrap')
            .toggleClass('header-no-fixed', false)
            .toggleClass('slider-wrap-fixed', true);
            
    }
    else if (scroll < offset - 50) {
        $('.slider-wrap')
            .toggleClass('slider-wrap-fixed', true)
            .toggleClass('header-no-fixed', false);
            
    }
}


$(document).scroll(function(){
    navigation_scroll();
});
