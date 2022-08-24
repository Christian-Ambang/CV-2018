$(".nav-responsive").hide();

$(function(){




$(".nav-responsive").hide();

var display = $(".navbar-nav").css("display");

$(window).resize(function(e) {

$(".nav-responsive").hide();

}); //Fin resize


$(".navbar-toggle").on("click",function(){

// alert(display);

$(".nav-responsive").toggle();


});//fin button-icone function click




$(".nav-responsive a").on("click",function(){

// alert(display);

$(".nav-responsive").toggle();


});//fin button-icone function click





});// Fin fonction