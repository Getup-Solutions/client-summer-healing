jQuery(document).ready(function($){

    $(".parentMenuItem").click(function(){
        //add collapse class when click
        $(this).find('ul.nav').addClass("in");
        $(this).parents(".parentMenuItem").siblings().find('ul.nav').removeClass("in");

        //add to url for getting current menu after relod opage
        var currenturl = window.location.href; 
        //alert(currenturl);
        //var url = new URL(currenturl,"test");
        //var datapageval = $(this).attr("data-page");
        url.searchParams.set("w", "test");


    



    });

});