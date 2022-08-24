$(function(){

$(".front-competence").hide();
$(".design-competence").hide();
$(".langue-competence").hide();

$(".Img-competence").attr("src","img/competence-back.png");

var li=$(".ul-competence li");

$(li[0]).addClass("active");




$(li[0]).on("click",function(){

$(".back-competence").show();
$(".front-competence").hide();
$(".design-competence").hide();
$(".langue-competence").hide();


$(li[0]).addClass("active");

$(li[1]).removeClass("active");
$(li[2]).removeClass("active");
$(li[3]).removeClass("active");


$(".Img-competence").attr("src","img/competence-back.png");


});//fin li 0 function click




$(li[1]).on("click",function(){

$(".back-competence").hide();
$(".front-competence").show();
$(".design-competence").hide();
$(".langue-competence").hide();

$(li[1]).addClass("active");

$(li[0]).removeClass("active");
$(li[2]).removeClass("active");
$(li[3]).removeClass("active");


$(".Img-competence").attr("src","img/competence-front.png");

});//fin li 0 function click





$(li[2]).on("click",function(){

$(".back-competence").hide();
$(".front-competence").hide();
$(".design-competence").show();
$(".langue-competence").hide();

$(li[2]).addClass("active");

$(li[0]).removeClass("active");
$(li[1]).removeClass("active");
$(li[3]).removeClass("active");


$(".Img-competence").attr("src","img/competence-design.png");

});//fin li 0 function click


$(li[3]).on("click",function(){

$(".back-competence").hide();
$(".front-competence").hide();
$(".design-competence").hide();
$(".langue-competence").show();

$(li[3]).addClass("active");

$(li[0]).removeClass("active");
$(li[2]).removeClass("active");
$(li[1]).removeClass("active");


$(".Img-competence").attr("src","img/competence-langue.png");

});//fin li 0 function click



});// Fin fonction