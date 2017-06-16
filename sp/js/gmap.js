if(navigator.userAgent.indexOf('Android') > 0) {
    $(".openmap").each(function(){
       url = $(this).attr("href").replace("maps:","http://maps.google.com?");
       $(this).attr("href",url);
    });
}