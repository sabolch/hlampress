

$(document).ready(function(){
    $('.az-select').each(function(){
        var select = $(this);    
        var option = select.find('select option');
        var str = '<div class="az-options">';
        select.find('option').each(function(){
            str+= '<div data-val="' +$(this).val() + '"><span>' + $(this).text() + '</span></div>'
        });
        str+= '</div>';
        select.html(select.html() + str);

        select.find('select').mousedown(function(){
            return false;
        });
        select.mouseup(function(){
            select.find('select').focus();
        });
        select.find('.az-options div[data-val]').click(function(){
            select.find('select').val($(this).attr('data-val'));
        });
        select.find('select').focusout(function(){
            if(!select.is(':hover')){
                select.find('.az-options').slideUp(0);
                select.removeClass('az-select-focus');
            }
        });
    });

    $(".az-select").click(function(){
        $(this).find('.az-options').slideToggle(0);
        $(this).toggleClass('az-select-focus');
    });
    // setTimeout(function(){
    //     alert($('.az-options div[data-val]').eq(0).css('width'));
    // }, 1000);
    
    $('.az-border').width(54);
    // ********************************

    // $(".phone").mask("+ 7 (999) 999 - 99 - 99?");

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
        $(id).css('top',  posTop+0); //posTop+10 например это регулировка отображения окна по высоте можно больше можно меньше
        $(id).css('left', winW/2-$(id).width()/2);
        $(id).fadeIn(500); 
    });
     
    $('.window .ah-close').click(function (e) {
        e.preventDefault();
        $('#mask, .window').hide();
        $('.window').hide();
    }); 
      
    $('#mask').click(function () {
        $(this).hide();
        $('.window').hide();
    }); 

    $("#ah-form1-submit").click(function () {
        var empty = true;
        $('.ah-form1  input[name="tel"]').each(function(o){
            if ($(this).val() == ""){empty = false;}
        });
        if (empty == false){
          alert("Заполните, пожалуйста, Ваш телефон");
        }else{
          $.ajax({
            type: 'POST',
            url: '/sendmessage.php',
            data: $('.ah-form1').serialize(),
            success: function(data) {
            }
          });
          $('.window').hide();
          $('a[href="#thanks"]').trigger('click');
        }
        var empty = true;
        return false;
    });

    
    // ********************************



$('.nav a[href^="#"]').click(function(){ 
  var $element = $('a[name=' + $(this).attr('href').substr() + ']');
  if($element.length == 1) { 
     $('html, body').animate({ scrollTop: $element.offset().top }, 500); 
  }     
  return false;
});


 });

