$.prototype.az_select = function(class1){
	this.each(function(){
		var az_this = $(this);
		var select = $(this).find('select');
		var option = $(this).find('select option');
		var str = '<div class="az-options ' + class1['class'] + '">';
		for(var i=0; i<option.length; i++){
			str+= '<div data-val="' +option.eq(i).val() + '"><span>' + option.eq(i).text() + '</span></div>'
		}
		str+= '</div>';
		$(this).html($(this).html() + str);
		$(this).click(function(){
			$(this).find('.az-options').slideToggle(0);
			$(this).toggleClass('focus');
		});
		$(this).find('select').mousedown(function(){
			return false;
		});
		$(this).mouseup(function(){
			select.focus();
		});
		$(this).find('.az-options div[data-val]').click(function(){
			az_this.find('select').val($(this).attr('data-val'));
		});
		$(this).find('select').focusout(function(){
			if(!az_this.is(':hover')){
				az_this.find('.az-options').slideUp(0);
				az_this.removeClass('focus');
			}
		});
		$(this).css('position', 'relative');
		$(this).find('.az-options').css({'display': 'none', 'position': 'absolute'});
	});
}
// alert(1);