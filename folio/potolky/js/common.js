

$(document).ready(function(){




    // $('.az-select').each(function(){
    //     var select = $(this);    
    //     var option = select.find('select option');
    //     var str = '<div class="az-options">';
    //     select.find('option').each(function(){
    //         str+= '<div data-val="' +$(this).val() + '">' + $(this).text() + '</div>'
    //     });
    //     str+= '</div>';
    //     select.html(select.html() + str);

    //     select.find('select').mousedown(function(){
    //         return false;
    //     });
    //     select.mouseup(function(){
    //         select.find('select').focus();
    //     });
    //     select.find('.az-options div[data-val]').click(function(){
    //         select.find('select').val($(this).attr('data-val'));
    //     });
    //     select.find('select').focusout(function(){
    //         if(!select.is(':hover')){
    //             select.find('.az-options').slideUp(0);
    //             select.removeClass('az-select-focus');
    //         }
    //     });
    // });

    // $(".az-select").click(function(){
    //     $(this).find('.az-options').slideToggle(0);
    //     $(this).toggleClass('az-select-focus');
    // });

    var nums = new Array;
    var az_num2 = $('.az-num2');
    az_num2.each(function(){
        nums.push(Number($(this).text()));
    });
    var max_num = Math.max.apply(null, nums);
    az_num2.each(function(index){
        $(this).prev('.az-num1').css('width', (nums[index]/max_num)*40 + 10 + '%');
    });

    if(window.matchMedia('(min-width: 992px)').matches){
        var left = $('.az-content-left .az-border');
        var right = $('.az-content-right .az-border');
        var height = Math.max(left.height(), right.height());
        setTimeout(left.height(height), 500);
        setTimeout(right.height(height), 500);
    }

 });


