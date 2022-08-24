$(function(){


$(".realisation-graphisme").hide();


var li=$(".realisation .ul-competence li");

$(li[0]).addClass("active");


$(li[0]).on("click",function(){


$(".realisation-web").show();
$(".realisation-graphisme").hide();
$(li[0]).addClass("active");
$(li[1]).removeClass("active");

});//fin li 0 function click




$(li[1]).on("click",function(){

$(".realisation-web").hide();
$(".realisation-graphisme").show();
$(li[1]).addClass("active");
$(li[0]).removeClass("active");

});//fin li 0 function click



});// Fin fonction