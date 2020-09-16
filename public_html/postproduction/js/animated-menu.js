$(document).ready(function() {
    $("li").mouseover(function(e){
        if ($(e.target).parents("ul").attr("id")=="rasta"){
            $(this).stop().animate({height:'150px'},{queue:false, duration:600, easing: 'easeOutBounce'})
        }
    });
    $("li").mouseout(function(){
        $(this).stop().animate({height:'50px'},{queue:false, duration:600, easing: 'easeOutBounce'})
    });
});