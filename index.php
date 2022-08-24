<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    
	<title>CV Ambang Christian | Mr Ambang.com</title>
	  

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet" type="text/css" />
  
	  
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-88246207-1', 'auto');
  ga('send', 'pageview');

</script>
	  
	  
  </head>
<body>
<div id="MessageErreurAnimate"></div>
<div class="container-fluid">
<!-- debut Nav bar header -->
<section class="clear row Acceuil" id="particles-js" >
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <header>
        <img src="img/logo-mr-ambang.png" alt="logo-mr-ambang" class="img-responsive inline-block-left taille-logo"/>
            <nav class="navbar navbar-default inlinde-block-rigth" role="navigation"> 
                <div class="container-fluid reset-css-nav">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li><a href="#presentation">Présentation</a></li>
                            <li><a href="#competence">Compétences</a></li>
                            <li><a href="#formation">Formations</a></li>
                            <li><a href="#experience">Expériences</a></li>
                            <li><a href="#realisation">Réalisations</a></li>
                            <li><a href="#divers">Divers</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </header>
        <div class="nav-responsive clear liste-style">
          <ul>
                        <li><a href="#presentation">Présentation</a></li>
                        <li><a href="#competence">Compétences</a></li>
                        <li><a href="#formation">Formations</a></li>
                        <li><a href="#experience">Expériences</a></li>
                        <li><a href="#realisation">Réalisations</a></li>
                        <li><a href="#divers">Divers</a></li>
                        <li><a href="#contact">Contact</a></li>
            </ul>
        </div>
        <article class="clear Web-Designer">
          <h1>Développeur Web</h1>
		  <?php if($_GET["type"]=="apprentissage"){?>	
          <h4>Mobile sur toute l’île-de-france (&nbsp;Contrat d'apprentissage&nbsp;)</h4>
		  <?php } else if ($_GET["type"]=="professionnalisation") { ?>
		  <h4>Mobile sur toute l’île-de-france (&nbsp;Contrat de professionnalisation&nbsp;)</h4>
		  <?php } else { ?>
		  <h4>Mobile sur toute l’île-de-france</h4>
		  <?php } ?>
			
          <h5><span class="glyphicon glyphicon-ok style-ok"></span>Actuellement en poste</h5>
        </article>
    </div>
</section>


<!-- Fin Nav bar header -->




<!-- debut Presentation -->


<section class="presentation row" id="presentation">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="block-photo col-md-5 col-xs-12">
                <img src="img/photo-ambang-christian.jpg" class="img-circle" alt="Photo-Ambang-Christian" height="auto" width="100%"/>
                <h4><strong>Ambang Christian</strong></h4>
            </div>
        </section>
    </div>
</section>
<section class="row address-section">
    <div class="col-md-8 col-md-offset-2">
        <article class="col-md-12 address-article">
            <?php
         
                function Age($date_naissance)
                {
                    $arr1 = explode('/', $date_naissance);
                    $arr2 = explode('/', date('d/m/Y'));
                        
                    if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
                    return $arr2[2] - $arr1[2];

                    return $arr2[2] - $arr1[2] - 1;
                }
             
            ?>
            <address class="address">
                    <p><span class="Bold">Tel :</span> <span>06 00 00 00 00</span></p>
                    <p><span class="Bold">Mail :</span>  <span>contact@mr-ambang.com</span></p>
                    <p><span class="Bold">Adresse :</span>  <span>1 Rue du Tourbillon</span></p>
                    <p><span class="Bold">Ville : </span>  <span>77500 Chelles</span></p>
                    <p><span class="Bold">Né le :</span> <span>10 juin 1990 (<?php $ma_date_de_naissance ='10/06/1990'; $mon_age = Age($ma_date_de_naissance);
                    echo $mon_age.' ans'; ?>)</span></p>
                    <p><span class="Bold">Nationalité: </span> <span>Française</span></p>
            </address>
        </article>
    </div>
</section>

<!--  Fin presentation -->


<!-- debut competence -->

<section class="row competence" id="competence">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="titre-competence col-md-12" ><h1>Compétences</h1></div>

            <nav class="menu-competence col-md-12"> 
                <ul class="ul-competence">
                  <li class=""><a href="#competence">Back end</a></li><li><a href="#competence">Front end</a></li><li><a href="#competence">Design</a></li><li><a href="#competence">Langues</a></li>
                </ul>
            </nav>

            <article class="img-competence col-md-6 col-xs-12">
                <img src="" class="img-responsive Img-competence" alt="image-competence-ambang-christian"/>
            </article>

            <aside class="aside-competence  back-competence col-md-6 col-xs-12">
                <h1>Mes Compétences en développement Back end</h1>
                <div class="niveaux-competence">niveau:
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                </div>
                <p class="text-competence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                </p>
            </aside>




            <aside class="aside-competence  front-competence col-md-6 col-xs-12">
                <h1>Mes Compétences en développement Front end</h1>
                <div class="niveaux-competence">niveau:
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                </div>
                <p class="text-competence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                </p>
            </aside>




            <aside class="aside-competence  design-competence col-md-6 col-xs-12">
                <h1>Mes Compétences en Design web</h1>
                <div class="niveaux-competence">niveau:
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                </div>
                <p class="text-competence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.</p>
            </aside>




            <aside class="aside-competence  langue-competence col-md-6 col-xs-12">
                <h1>Mes Compétences Linguistiques</h1>
                <div class="niveaux-competence">niveau:
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                    <span class="glyphicon glyphicon-star-empty star"></span>
                </div>
                <p class="text-competence">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.</p>
            </aside>
        </section>
    </div>
</section>



<!-- Fin competence -->


<!-- Debut experience -->

<section class="row experience" id="experience">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="col-md-12 titre-formation"><h1>Expériences</h1></div>
            <article class="col-md-12">
                
                <div class="paneaux-formation">
                   
                    <div class="tranche tranche-6">
                        <div class="tranche-titre tranche-titre-6"> <span class="full-left pull-left">2017 à aujourd'hui </span><span class="full-right pull-right">Intégrateur web&nbsp;(Vertical-mail)&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                            <hr class="hr-paneaux">
                        <div class="descriptif">
                            <p class="align-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                            </p>
                            <hr class="hr-paneaux">
                        </div>
                    </div> 
                    
                    <div class="tranche tranche-5">
                        <div class="tranche-titre tranche-titre-5"> <span class="full-left pull-left">Depuis juin 2018 </span><span class="full-right pull-right">Sportif de haut niveau tae&minus;kwon&minus;do&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                            <hr class="hr-paneaux">
                        <div class="descriptif">
                            <p class="align-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                            </p>
                            <hr class="hr-paneaux">
                        </div>
                    </div> 


                    <div class="tranche tranche-4">
                        <div class="tranche-titre tranche-titre-4"> <span class="full-left pull-left">2011 / 2013 </span><span class="full-right pull-right">Graphiste free&nbsp;lance&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                            <hr class="hr-paneaux">
                        <div class="descriptif">
                            <p class="align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.</p>
                            <hr class="hr-paneaux">
                        </div>
                    </div>


                   <div class="tranche tranche-3">
                    <div class="tranche-titre tranche-titre-3"> <span class="full-left pull-left">2008 / 2012</span><span class="full-right pull-right">Vendeur fitness&nbsp;(Decathlon)&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux">
                    <div class="descriptif">
                        <p class="align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.</p>
                    <hr class="hr-paneaux">
                   </div>
                   </div>


                   <div class="tranche tranche-2">
                    <div class="tranche-titre tranche-titre-2"> <span class="full-left pull-left">2008 / 2011</span><span class="full-right pull-right">Entraîneur de tae&minus;kwon&minus;do&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux">
                    <div class="descriptif">
                        <p class="align-left">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.</p>
                    <hr class="hr-paneaux">
                   </div>
                   </div>




                   <div class="tranche tranche-1">
                    <div class="tranche-titre tranche-titre1"> <span class="full-left pull-left">2005 / 2008</span><span class="full-right pull-right">Sportif de haut niveau tae&minus;kwon&minus;do&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux-fin">
                    <div class="descriptif">
                    <hr class="hr-paneaux">
                    <p class="align-left-fin">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                    </p>
                    <hr class="hr-paneaux-fin">
                   </div>
                  </div>

                </div>
            </article>
        </section>
    </div>
</section>


<!-- Fin Experience -->


<!-- Debut formation -->

<section class="row formation" id="formation">
	<hr class="hr-experience">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="col-md-12 titre-formation"><h1>Formations</h1></div>
            <article class="col-md-12">
                
                <div class="paneaux-formation">
                   
                    <div class="tranche tranche-5">
                        <div class="tranche-titre tranche-titre-5"> <span class="full-left pull-left">2015 / 2016 </span><span class="full-right pull-right">Bachelor concepteur web Efficom<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                            <hr class="hr-paneaux">
                        <div class="descriptif">
                            <p class="align-left">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                            </p>
                            <hr class="hr-paneaux">
                        </div>
                    </div>


                   <div class="tranche tranche-4">
                    <div class="tranche-titre tranche-titre-4"> <span class="full-left pull-left">2011 / 2012</span><span class="full-right pull-right">Communication graphique&nbsp;IIM&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux">
                    <div class="descriptif">
                        <p class="align-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.                        </p>
                    <hr class="hr-paneaux">
                   </div>
                   </div>


                   <div class="tranche tranche-3">
                    <div class="tranche-titre tranche-titre-3"> <span class="full-left pull-left">2010 / 2011</span><span class="full-right pull-right">Année préparatoire&nbsp;IIM&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux">
                    <div class="descriptif">
                        <p class="align-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.                        </p>
                    <hr class="hr-paneaux">
                   </div>
                   </div>


                   <div class="tranche tranche-2">
                    <div class="tranche-titre tranche-titre-2"> <span class="full-left pull-left">2008 / 2009</span><span class="full-right pull-right">Diplôme d’instructeur&nbsp;fédérale&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux">
                    <div class="descriptif">
                    <p class="align-left">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.                    </p>
                    <hr class="hr-paneaux">
                   </div>
                   </div>


                   <div class="tranche tranche-1">
                    <div class="tranche-titre tranche-titre-1"> <span class="full-left pull-left">2007 / 2008</span><span class="full-right pull-right">Baccalauréat&nbsp;scientifique&nbsp;<span class="glyphicon glyphicon-menu-down glyph"></span></span></div>
                    <hr class="hr-paneaux-fin">
                    <div class="descriptif">
                    <hr class="hr-paneaux">
                    <p class="align-left-fin">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla luctus lacinia risus. Nullam sit amet lectus in libero fermentum mollis et id eros. In bibendum massa a mauris vulputate finibus. Duis vel odio non turpis volutpat bibendum ut vitae purus. Phasellus quam mauris, convallis non lorem ut, convallis condimentum nunc. Nullam laoreet ipsum neque, ac imperdiet ligula ultrices pharetra. Morbi posuere consectetur condimentum. Curabitur scelerisque ante neque, eu porta quam pellentesque ac. Nam molestie nisl vitae ex vehicula gravida auctor quis lorem. Vestibulum in est nisi. In congue tortor in aliquet egestas. Vivamus egestas elit lorem, vel lacinia enim ultricies vel. Curabitur sed enim vitae dolor placerat egestas.
                    </p>
                    <hr class="hr-paneaux-fin">
                   </div>
                   </div>

                </div>



            </article>
        </section>
    </div>
</section>



<!-- Fin formation -->

<!-- Debut realisation -->


<section class="row realisation" id="realisation">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="titre-competence col-md-12" ><h1>Réalisations</h1></div>

            <nav class="menu-competence col-md-12"> 
            <ul class="ul-competence">
              <li class=""><a href="#realisation">Web</a></li><li><a href="#realisation">Graphisme</a></li>
            </ul>
            </nav>


            <!-- Debut web -->


            <article class="col-md-12 realisation-web">
            <!-- Bouton debut -->
            <a href="#realisation" class="btn-real"><button class="btn-realisation">
              <span class="contenu-btn-realisation">Site immobilier</span>
              <hr class="hr-realisation">
              <span class="contenu-btn-realisation">En construction</span>
            </button></a>
            <!-- Bouton fin -->


            </article>



            <!-- debut graphisme -->



            <article class="col-md-12 realisation-graphisme">
            <!-- Bouton debut -->
            <a href="PDF/realisation-graphique.pdf" target="_blank" class="btn-real"><button class="btn-realisation">
              <span class="contenu-btn-realisation">Création de Logo</span>
              <hr class="hr-realisation">
              <span class="contenu-btn-realisation">Format PDF</span>
            </button></a>
            <!-- Bouton fin -->
            </article>
        </section>
    </div>
</section>

<!-- Fin realisation -->


<!-- Debut divers -->
<section class="row divers" id="divers">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="col-md-12 titre-formation"><h1>Divers</h1></div>
            <article class="divers-border">
               <span> <span class="Bold">Chansons culte :</span> <a href="https://www.youtube.com/watch?v=U5TqIdff_DQ" target="blank_">I feel good (Jame Browns)  <span class="underline">écouter</span></a></span><br>
               <span> <span class="Bold">Film culte :</span> <a href="http://www.youtube.com/watch?v=CE8XKeN0zk4" target="blank_">Kick Boxer (Jean Claude Van damme)  <span class="underline">voir extrait</span></a></span><br>
               <span> <span class="Bold">Repas culte:</span> Banh bao / kondré / Cheesecake / Bubble tea</span><br>
               <span> <span class="Bold">Sport pratiqué :</span> Taekwondo (1ère dan)</span><br>
               <span> <span class="Bold">Activités  :</span> Cuisine, photographie, randonnée pédestre</span><br>
               <span> <span class="Bold">Citation :</span> Un grand pouvoir implique de grandes responsabilités (Benjamin Parker)</span><br>
            </article>
        </section>    
    </div>        
</section>
<!-- Fin divers -->


<!-- Debut contact -->
<section class="row contact" id="contact">
    <hr class="hr-experience">
    <div class="col-md-12 col-lg-8 col-lg-offset-2 col-xs-12">    
        <section class="row">
            <div class="col-md-12 titre-formation"><h1>Contact</h1></div>
                <article class=" col-md-12 contact-form">
                    <form class="contact-mr-ambang" method="POST">
                        <div class="form-contact">
                        <label for="nom">Nom</label>
                        <input id="nom" name="Nom" type="text">
                        <label class="MessageErreurNom MessageErreurContactStyle"></label>

                        <br>
                        <label for="pnom">Prénom</label>
                        <input id="pnom" name="Pnom" type="text">
                        <label class="MessageErreurPnom MessageErreurContactStyle"></label>

                        <br>
                        <label for="mail">Mail</label>
                        <input id="mail" name="Mail" type="text">
                        <label class="MessageErreurMail MessageErreurContactStyle"></label>

                        <br>
                        <label for="entreprise">Entreprise</label>
                        <input id="entreprise" name="Entreprise" type="text">
                        <label class="MessageErreurEntreprise MessageErreurContactStyle"></label>

                        <br>
                        <label for="objet">Objet</label>
                        <input id="objet" name="Objet" type="text">
                        <label class="MessageErreurObjet MessageErreurContactStyle"></label>

                        <br>
                        <textarea id="message" name="Message" placeholder="Tapez votre message"></textarea>
                        <label class="MessageErreurMessage MessageErreurContactStyle"></label>

                        <br>
                        <br>
                        <button type="submit" class="btn btn-success">Envoyer</button>

                    </div>
                    </form>
                </article>
        </section>        
    </div>       
</section>
<!-- Fin contact -->


<section class="row pdf" id="pdf">
    <div class="col-md-12 col-lg-8 col-lg-offset-2">
        <section class="row">
		    <?php if($_GET["type"]=="apprentissage"){ ?>
			<a href="redirection/link_pdf_cv_apprentissage_redirection.php" target="_blank" class="btn-pdf" onClick=" ga('send', 'event', 'Button', 'Click', 'Click CV PDF Apprentissage');" >Télécharger le CV au format PDF</a>
			<?php }else { ?>
            <a href="redirection/link_pdf_cv_redirection.php" target="_blank" class="btn-pdf" onClick=" ga('send', 'event', 'Button', 'Click', 'Click CV PDF');" >Télécharger le CV au format PDF</a>
        	<?php } ?>
		</section>
    </div>        
</section>




</div>  <!-- FIN container fuid -->    

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/navbar-responsive.js"></script>
    <script src="js/competence.js"></script>
    <script src="js/panneaux.js"></script>
    <script src="js/realisation.js"></script>
    <script src="js/contact.js"></script>
<?php 

if(isset($_GET["bienvenue"]) && $_GET["bienvenue"]=="true" && isset($_GET["contact"]) && $_GET["contact"]!=""){
?>	
<script>
	$("#MessageErreurAnimate").show(0,function(){ $("#MessageErreurAnimate").html("<?php echo $_GET["contact"]; ?>");$("#MessageErreurAnimate").addClass("MessageBienvenue");}).delay(4000).hide(0);
</script>
<?php
}
?>


<?php
    
    if ($_GET['utm_source']!="" && isset($_GET['utm_source'])) {
        include ("connexion_bdd.php");
        $sourceIdContact=$_GET['utm_source'];
        $rqId = "SELECT * FROM `contact` WHERE `id`=$sourceIdContact";
        $queryID = $pdo->query($rqId);
        $resultat = $queryID->fetch();
        $email=$resultat['email'];
        $titre=$resultat["civilite"];
        $nom=$resultat["nom"];
        $formulePolitesse= $titre." ".$nom;
        $autoreplyStatut=$resultat["autoreply"];
		if($_GET["type"]=="apprentissage"){$source="../contact/autoreply-apprentissage.php";}else{
		 $source="../contact-2/autoreply.php";	
		}
        $Html=file_get_contents("$source");
        $tagAutoreplyMessage=str_replace("[id_contact]","$sourceIdContact",$Html);
    }

    if($email!="" && isset($email) && $autoreplyStatut!="true" && isset($_GET["autoreply"]) && $_GET["autoreply"]=="true"){

     // ===================== Mail Début

     $to      = "$email";
	 if($_GET["type"]=="apprentissage"){ 
	 $objet = "Autoreply Candidature Developpeur Web Contrat d'Apprentissage";
	 }else {
     $objet = 'Autoreply candidature Developpeur Web';}
     $message = str_replace("[ Titre Nom ]","$formulePolitesse",$tagAutoreplyMessage);
     $headers[] = 'MIME-Version: 1.0';
     $headers[] = 'Content-type: text/html; charset=utf-8';
     $headers[] = "From: \"Ambang Christian\"<contact@mr-ambang.com>" . "\r\n" .
     'Reply-To: contact@mr-ambang.com' . "\r\n" .
     'X-Mailer: PHP/' . phpversion();

     mail($to, $objet, $message, implode("\r\n", $headers));

    //======================= Mail Fin

    $reqAutoreply ="UPDATE `Web-liste-contact-2` SET `autoreply`='true' WHERE `id`=$sourceIdContact"; 
    $queryIAutoreply= $pdo->query($reqAutoreply);
    }
  

?>
  </body>
</html>