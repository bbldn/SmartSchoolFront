$(window).resize(function(){
	if ($(window).width() >= '970' && $(window).width() < '1440'){
        $('.c_3').html("Оконч.");
        $('.c_5').html("Аудит.");

    } else {
    	$('.c_3').html("Окончание");
        $('.c_5').html("Аудитория");
    }

    if ($(window).width() >= '970' && $(window).width() < '1140'){
        $('.c_3').html("Оконч.");
    } else {
    	$('.c_3').html("Окончание");
    }

    // var flag = false;

    // if ($(window).width() >= '970' && $(window).width() < '1140'){
    //     if(!flag){
    //         $('.lesInR1').append("</br>");
    //         flag = true;
    //     }
    // } else {
    //     if(flag){
    //         $('.lesInR1').remove("</br>");
    //         flag = false;
    //     }
    // }
});