window.onload = function(){
	for(var i = 0; i < document.getElementsByTagName('table').length; i++){
        var element = document.getElementsByClassName(i)[0];
        element.style.border = "#111 dashed";
        var color = getRandomColor();
   		element.style.background = color;
   		//element.style.color = invert(color);
   		element.style.color = '#000';
    }

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
};