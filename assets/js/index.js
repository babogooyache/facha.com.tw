jQuery(document).ready(function() {
	// 等loading完
	$(window).load(function (){
	    $('#loading').fadeOut(1000);
	    new WOW().init();
	});
	
    
});