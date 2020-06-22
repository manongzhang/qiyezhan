$(function(){
    $.leftTime("2019/01/22 23:45:24",function(d){
    if(d.status){
        var $dateShow1=$("#dateShow1");
            $dateShow1.find(".d").html(d.d);
            $dateShow1.find(".h").html(d.h);
            $dateShow1.find(".m").html(d.m);
            $dateShow1.find(".s").html(d.s);
    }
   });
});