$(document).ready(function(){
	setTimeout(updateNextPrevButtonBackgrounds, 0);

	$("#verken").click(function(){
		$(this).closest('.container-fluid').addClass('hidden').next().removeClass('hidden');
	});
	$("*").attr('draggable', 'false');;
});

function updateNextPrevButtonBackgrounds(){
	var sizeTotal = parseInt( $('.carousel-inner').css('width') );
	var sizeTaken = parseInt( $('.item.active img').css('width') );
	var sizeAvailable = (sizeTotal - sizeTaken) / 2;
	$('.carousel-control').style('width', "'"+sizeAvailable+"px'", 'important');

	var current = $(".item.active");
	var items = $(".item");
	var currentIndex = items.index(current);
	if(currentIndex+1 == items.length){
		currentIndex = -currentIndex;
		var nextImg = items.eq(currentIndex-1);
		var prevImg = items.eq(currentIndex+1);
	} else {
		var nextImg = items.eq(currentIndex+1);
		var prevImg = items.eq(currentIndex-1);
	}

	$(".carousel-control.left").css({'background-image': 'url('+prevImg.children('img').attr('src')+')'});
	$(".carousel-control.right").css({'background-image': 'url('+nextImg.children('img').attr('src')+')'});

	setTimeout(updateNextPrevButtonBackgrounds, 50);
}