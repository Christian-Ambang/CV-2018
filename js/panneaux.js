$(function(){


$(".paneaux-formation .descriptif").hide();

var descriptifFormation=$(".tranche .descriptif");
// var descriptifFormation=$(".paneaux-formation  .descriptif");
var titreFormation=$(".paneaux-formation .tranche-titre");

$(".paneaux-formation .tranche").on("click",function(){

// $(".paneaux-formation  .descriptif").toggle();

// $(".tranche .descriptif").toggle();

$(this).find(".descriptif").toggle();
$(this).find(".glyphicon").toggleClass("glyphicon-menu-down");
$(this).find(".glyphicon").toggleClass("glyphicon-menu-up");



});//fin tranche function click


});// Fin fonction




// $(".tranche-titre").on("click",function(){

// // $(".paneaux-formation  .descriptif").toggle();

// // $(".tranche .descriptif").toggle();

// $(this).find("++.descriptif").toggle();
// $(this).find(".glyphicon").toggleClass("glyphicon-menu-down");
// $(this).find(".glyphicon").toggleClass("glyphicon-menu-up");



// });//fin tranche function click



