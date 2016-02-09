$(document).ready(function(){

	$("#makeComment").click(function(){
		$(this).next().removeClass("hidden");
		$(this).addClass('hidden');
	});

});
