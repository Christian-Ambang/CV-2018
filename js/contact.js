$(function(){
$(".contact-mr-ambang").submit(function(event){

		event.preventDefault();
		var url="http://www.mr-ambang.com/mail/Cv/cv.php";
		var donnees=$(this).serialize();


$.ajax({    
                    url: url,
                    type: "POST",
                    data: donnees,
                    dataType : "html",
                    timeout: 5000,

                    success : function(msg, data, settings){
                    	
                    	if (msg=="NomInvalide"){$("#nom").addClass("borderRouge");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#nom").removeClass("borderRouge");}

                        if (msg=="PnomInvalide"){$("#pnom").addClass("borderRouge");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#pnom").removeClass("borderRouge");}
                        
                        if (msg=="MailInvalide"){$("#mail").addClass("borderRouge");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#mail").removeClass("borderRouge");}
                        
                        if (msg=="EntrepriseInvalide"){$("#entreprise").addClass("borderRouge");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#entreprise").removeClass("borderRouge");}


                        if (msg=="ObjetInvalide"){$("#objet").addClass("borderRouge");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#objet").removeClass("borderRouge");}
                        
                        if (msg=="MessageInvalide"){$("#message").addClass("borderRougeArea");$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez vérifier vos champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);}else{$("#message").removeClass("borderRougeArea");}
                        
                        if (msg=="FormInvalide"){

                            $("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("Veuillez saisir tout les champs");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(4000).hide(0);

                			$("#nom").addClass("borderRouge");
                			$("#pnom").addClass("borderRouge");
                			$("#mail").addClass("borderRouge");
                			$("#entreprise").addClass("borderRouge");
                			$("#objet").addClass("borderRouge");
                			$("#message").addClass("borderRougeArea");
           
                        }

                        if(msg=="MailEnvoyer"){
                            $(".contact-mr-ambang input,textarea").val("");
                            $("#MessageErreurAnimate").delay(1000).show(0,function(){ $("#MessageErreurAnimate").html("Mail envoyer correctement");$("#MessageErreurAnimate").addClass("MessageErreurAnimateValid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateInvalid");}).delay(4000).hide(0);

                            $("#nom").removeClass("borderRouge");
                			$("#pnom").removeClass("borderRouge");
                			$("#mail").removeClass("borderRouge");
                			$("#entreprise").removeClass("borderRouge");
                			$("#objet").removeClass("borderRouge");
                			$("#message").removeClass("borderRougeArea");
                             }
                		}, 

                    error : function(msg, string, error, data){
                        
                        $("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html(" Veuillez verifier votre connexion internet");$("#MessageErreurAnimate").addClass("MessageErreurAnimateInvalid");$("#MessageErreurAnimate").removeClass("MessageErreurAnimateValid");}).delay(5000).hide(0);
                    	
                           $("#nom").removeClass("borderRouge");
                            $("#pnom").removeClass("borderRouge");
                            $("#mail").removeClass("borderRouge");
                            $("#entreprise").removeClass("borderRouge");
                            $("#objet").removeClass("borderRouge");
                            $("#message").removeClass("borderRougeArea");



                        }

});//FIN ajax

});//Fin submit event
});// Fin fonction