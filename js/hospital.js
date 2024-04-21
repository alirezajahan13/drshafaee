var $ = jQuery;



$(document).ready(function(){
    $('.categoryVideosButtonMob').click(function(){ 
        $(".categorySecParentMob").fadeIn(400);
    });
    $("#closeCatMenu").click(function(){
        $(".categorySecParentMob").fadeOut(400);
    });
});