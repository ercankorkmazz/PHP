jQuery("document").ready(function($) {
    var bolum3 = $(".bolum3");
	
	$(window).scroll(function(){
		if($(this).scrollTop()>153){
			bolum3.addClass("h-bolum3");
		}else{
			bolum3.removeClass("h-bolum3");
		}
	});
});