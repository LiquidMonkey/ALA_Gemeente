window.onload = function(){
	for(var i = 0; i < document.getElementsByTagName('table').length; i++){
        var element = document.getElementsByClassName(i)[0];
        if(element != undefined){
        	element.style.border = "#111 dashed";
	        var color = getRandomColor();
	   		element.style.background = color;
	   		//element.style.color = invert(color);
	   		element.style.color = '#000';
	   	}
    }

    $('.updateInit').click(function(){
		$(this).closest('form').children('input').not('.exclude').removeAttr('disabled');

		$(this).closest('form').find('.updateInit').addClass('hidden');
		$(this).closest('form').find('.updateCommit').removeClass('hidden');
	});

    $('.updateCommit').click(function(){

    	$(this).closest('form').find('.updateCommit').addClass('hidden');
		$(this).closest('form').find('.updateInit').removeClass('hidden');
    });
};

    function getRandomColor() {
	    var letters = '0123456789ABCDEF'.split('');
	    var color = '#';
	    for (var i = 0; i < 6; i++ ) {
	        color += letters[Math.floor(Math.random() * 16)];
	    }
	    return color;
	}
	function invert(color) {
	    var split = color.split('#');

	    var colorCode = split[1].split("");

	    color = colorCode.reverse().toString().replace(',', "").replace(',', "").replace(',', "").replace(',', "").replace(',', "");
	    color = "#" + color;

	    return color;
	}

	