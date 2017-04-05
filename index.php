
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="fr" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="fr" class="no-js"> <!--<![endif]-->
    <head>
        <!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Always force latest IE rendering engine -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- Meta Keyword -->
        <meta name="keywords" content="Francais, Simplification, simple, Facile, graduer, lexique francais, francais simple, francais educatif">
        <!-- meta character set -->
        <meta charset="utf-8">

        <!-- Site Title -->
        <title>FRFacile LIF</title>
        
        <!--
        Google Fonts
        ============================================= -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700" rel="stylesheet" type="text/css">
		
        <!--
        CSS
        ============================================= -->
        <!-- Fontawesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- Bootstrap -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Fancybox -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
        <!-- owl carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- Animate -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Main Responsive -->
        <link rel="stylesheet" href="css/responsive.css">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>	
	
		<!-- Modernizer Script for old Browsers -->
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/7.1.0/css/bootstrap-slider.css">

<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>        
<link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css" /> 
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js"></script>‌​


	<script src="js/jquery.fileDownload.js"></script>
	<script>
		$(document).ready(function () {

    (function ($) {

        $('#filter').keyup(function () {

            var rex = new RegExp($(this).val(), 'i');
            $('.searchable tr').hide();
            $('.searchable tr').filter(function () {
                return rex.test($(this).text());
            }).show();

        })

    }(jQuery));

});


$(document).ready(function(){

    $(".b1").click(function(){
        $("#toggleDemo").collapse('toggle');
    });
});

$(document).ready(function(){
    $(".b2").click(function(){
        $("#toggleDemo1").collapse('toggle');
    });
});
$(document).ready(function(){
    $(".b3").click(function(){
        $("#toggleDemo2").collapse('toggle');
    });
});
$(document).ready(function(){
    $(".b4").click(function(){
        $("#toggleDemo3").collapse('toggle');
    });
});
$(document).ready(function(){
    $(".b5").click(function(){
        $("#toggleDemo4").collapse('toggle');
    });
});
$(document).ready(function(){
    $(".b6").click(function(){
        $("#toggleDemo5").collapse('toggle');
    });
});

</script>
    </head>
	
    <body style=" line-height: 0 !important; ">



<!-- end modal ================================ -->
        <header id="navigation" class="navbar-fixed-top">
            <div class="container">

                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->

                    <!-- logo -->
                    <h1 class="navbar-brand">
                        <a href="#body">
                            <img src="img/logo.png" alt="Kasper Logo"  style="margin-top: -23px;width: 211px;    h;height: 73px; ">
                        </a>
                    </h1>
                    <!-- /logo -->

                    </div>

                    <!-- main nav -->
                    <nav class="collapse navigation navbar-collapse navbar-right" role="navigation">
                        <ul id="nav" class="nav navbar-nav">
                            <li class="current"><a href="#home">Index</a></li>
                            <li><a href="#Doc">En savoir plus</a></li>
                            <li><a href="resyf">Télécharger ReSyf</a></li>
                        </ul>
                    </nav>
                    <!-- /main nav -->
                </div>

       
        </header>

        <!-- End Fixed Navigation        ==================================== -->




        <!-- Home Slider ==================================== -->
        <section id="home">     
            <div id="home-carousel" class="carousel slide" data-interval="false">
     


                <!--/.carousel-indicators-->

              <div class="carousel-inner">

                    <div class="item active"  style="background-image: url('img/slider/bg2.jpg')" >
                        <div class="carousel-caption">
                            <div class="animated bounceInRight">
                          
                                <h2 style="margin-top: -5px;">Resyf est une ressource lexicale en fran&Ccedil;ais avec des synonymes gradués en fonction de leur niveau de difficulté. <br></h2><h3>Les degrés de difficulté ont été automatiquement obtenus à partir de corpus et grâce à un modèle prédictif qui s'appuie sur des variables lexicales et des variables psycholinguistiques mesurant la complexité lexicale (français langue première). La polysémie des entrées est également prise en compte.</h3>
				<br><br>
<div class="input-group" style="
    width: 249px;
    margin-left: auto;
    margin-right: auto;
    margin-top: 1em;
    margin-bottom: 1em;
">

      <input type="text" id="recherche" class="form-control mot" placeholder="Chercher dans Resyf ...">
      <span class="input-group-btn">
        <button class="btn btn-primary recherche" type="button" >
<span class="glyphicon glyphicon-search" aria-hidden="true"></span>
</button>
      </span>
    </div>






<div class="resyf" style=" width: 71%; margin: auto;">



</div>







		
               
                <!--/.carousel-inner-->
            
 </div>
       </div>  

 </div>
       
            </div>
        </section>
        <!--
        End #home Slider
 
 
   <!--
        #Documentation
        ========================== -->
        
        <section id="Doc">
  <div class="container">
                <div class="row">
                    <div class="col-md-12">
            <div class="section-title text-center wow fadeInDown">
                <h2>En savoir plus</h2>  
      		   </div>
                    </div>
             
                <div class="row" style="line-height: 2 !important; text-align: center; margin: auto; zoom: 1.5;">
 		
           		
<h3>Qu'est-ce ReSyf ?</h3> <br>

<p>Il s'agit d'une ressource de synonymes. La particularité de ReSyf est que les synonymes ont été gradués en tenant compte de leurs caractéristiques intra-lexicales (longueur des mots, structure syllabique, structure morphologique, polysémie, etc.) et de variables psycholinguistiques (indexs de fréquence).<br>
 
La version 1.0 de ReSyf (en cours de construction) contient plus de 30,000 lemmes désambiguïsés issus de BabelNet, étiquetés avec TreeTagger et filtrés avec Lexique 3 et le Trésor de la Langue Française Informatisé (TLFi).</p><br>
<h3>Quel est l'intérêt de ReSyf ?</h3> <br> 
  
<p>ReSyf peut être utilisé comme ressource pédagogique pour des apprenants du français. Il est aussi utilisé dans des outils de simplification automatique de textes (technologies d'aide à la lecture -travaux en cours).</p><br>
<h3>Bibliographie</h3> <br>  

<p>Gala, N., Billami, M. B., François, T. et Bernhard, D. (2015) Graded lexicons: new resources for educational purposes and much more. 22nd Computer-assisted language learning conference (EUROCALL-2015). Padova (Italie), août 2015. (lien http://pageperso.lif.univ-mrs.fr/~nuria.gala/publis/Galaetal_Eurocall2015_abstract.pdf)<br>
 
Gala, N., François T., Bernhard, D. et Fairon, C. (2014) Un modèle pour prédir la complexité lexicale et graduer les mots. Actes de Traitement Automatique des Langues Naturelles (TALN 2014), Marseille, juillet 2014. (lien http://pageperso.lif.univ-mrs.fr/~nuria.gala/publis/Galaetal_taln2014_final.pdf )<br>
 
Gala, N., François, T. et Fairon, C. (2013) Towards a French lexicon with difficulty measures: NLP helping to bridge the gap between traditional dictionaries and specialized lexicons. Actes de Electronic lexicography in the 21st century: thinking outside the paper (eLex 2013). Tallinn (Estonie), octobre 2013. (lien http://pageperso.lif.univ-mrs.fr/~nuria.gala/publis/eLex2013_Galaetal.pdf )</p><br>
 
<h3>Contributeurs :</h3> <br>  
<p>N. Gala, LIF-TALEP, Aix Marseille Université, Brain and Language Reseach Institute<br>
M. B. Billami, LIF-TALEP, Aix Marseille Université, Brain and Language Reseach Institute<br>
T. François, Cental, Université Catholique de Louvain<br>
C. Fairon, Cental, Université Catholique de Louvain<br>
D. Bernhard, LiLPa, Université de Strasbourg<br>
 
  Site Web :
Mohamed Nader JANHAOUI, étudiant du master IDL Grenoble Alpes (2015-2016).</p><br>

 
 </div>
       </div>

        </section>
        <!--
        End #Documentation
        ========================== -->
 
  <!--
        #a propos de nous
        ========================== -->
        
       
        
       
        <!--
        End #Portfolio
        ========================== -->
 
 
 
 
 
 
        <!--
        #footer
        ========================== -->
        <footer id="footer" class="text-center" >
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="footer-logo wow fadeInDown" style="margin-top: -73px;">
                       <a href="#home">   <img src="img/logo.png" alt="logo"    style="  width: 262px;"></a>  
                        </div>

                        <div class="footer-social wow fadeInUp">
                            <h3>ReSyf © Laboratoire Informatique Fondamentale Marseille  </h3>
                            <ul class="text-center list-inline">
                                <li><a href="#"><i class="fa fa-facebook fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus fa-lg"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble fa-lg"></i></a></li>
                            </ul>
                        </div>

                        <div class="copyright">
                           
                            
                        </div>

                    </div>
                </div>
             <div class="row">
  <div class="footer-social wow fadeInUp">
 <ul class="text-center list-inline">
<div class="col-sm-3"> <a href="http://www.univ-amu.fr/" target="_blank"><img src="img/aix.jpg" alt="logo" style="width: 142px; height: 54px;"></a>  </div>
  <div class="col-sm-3"> <a href="http://www.lif.univ-mrs.fr/" target="_blank"><img src="img/lif.png" alt="logo" style="width: 142px; height: 54px;"></a>  </div>
  <div class="col-sm-3"> <a href="http://www.blri.fr/" target="_blank"><img src="img/sw.jpeg" alt="logo" style="width: 142px; height: 54px;"></a>  </div>
  <div class="col-sm-3"><a href="http://uclouvain.be/cental" target="_blank"><img src="img/cental.png" alt="logo" style="width: 142px; height: 54px;"></a>  </div>
   </ul>
</div>
</div>
</div>
                
                
            </div>
        </footer>
        <!--
        End #footer
        ========================== -->

  <!-- Modal -->


        <!-- JavaScripts ========================== -->
+
<script>
$.get( "words.txt" ).done(function( data ) {
    $( "#recherche" ).autocomplete( {  
	maxResults: 6,
	minLength:2, 
 	source: function(request, response) {
        var results = $.ui.autocomplete.filter(data.split( "\n" ) , request.term);
        
        response(results.slice(0, this.options.maxResults));
    }
	
} );
});
$(".recherche").click(function() {
	
	var val =$(".mot").val();
       $.ajax({
 	type: "POST",
  	url: "tokinisation.php",
  	data: { "file": val  },
	success: function(data) {
$( ".resyf" ).empty();
var substring = "Sens";
var res = data.split("\n");
var per= res[res.length-2];

if (res.length>3){
$(".resyf").append("<div class='information'> </div> <div class='panel panel-primary'> <div class='panel-heading'> <h3 class='panel-title'>Liste de Synonymes de  <b>"+val+" ("+res[res.length-3]+")</b></h3> </div> <div class='panel-body'> <table class='table' style=' font-family: inherit; line-height: 1.1; color: black;height:100px;overflow:auto;'> <thead> <tr> <th><a href='#'> <span class='glyphicon glyphicon-book' style='font-size: 30px;'></span> </a></th> <th style='text-align: -webkit-center;'>Synonyme</th> <th style='text-align: -webkit-center;'>Degré de difficulté</th> </tr> </thead> <tbody> </tbody> </table> </div> </div>") ;


$(".table").append("<tr class='table-active' style='background-color: #A5DAE8'> <th scope='row'><a href='#'><span class='glyphicon glyphicon-th-list'></span></a>    "+res[1]+"</th> <td></td>  <td></td> </tr>") ;
pas=2;
taille=1100;
while (pas <res.length-1) {
if (pas>8){
$('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',taille+40);
taille=taille+30;
}
if (res[pas].indexOf(substring) > -1)
{
$(".table").append("<tr class='table-active' style='background-color: #A5DAE8'> <th scope='row'><a href='#'><span class='glyphicon glyphicon-th-list'></span></a>    "+res[pas]+"</th> <td></td> <td></td> </tr>") ;
pas=pas+1;
}
else{

$(".table").append("<tr class='table-active'> <th scope='row'><a href='#'> <span class='glyphicon glyphicon-leaf'></span> </a></th> <td>"+res[pas]+"</td>  <td>"+res[pas+2]+"</td> </tr>") ;
pas=pas+3;
}
}
}      
	
else{

$(".resyf").append("<div class='alert alert-danger' role='alert'> <span class='glyphicon glyphicon-exclamation-sign' aria-hidden='true'></span><span class='sr-only'>Error:</span> Désolé ce mot n'est pas couvert par ReSyf </div>");
$('#home-carousel .carousel-inner .item, #home-carousel .video-container').css('height',800);
}
}

 
        });
    	});

var availableTags;
$.get("resyf.txt", function(data){
    availableTags = data.split(",");
});


$( "#tags" ).autocomplete({
    source: availableTags,
    appendTo: '#autocompleteDump'
});




</script>

       
     
        <!-- main jQuery -->








        <!-- Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
        <!-- jquery.nav -->
        <script src="js/jquery.nav.js"></script>

 	
        <!-- Portfolio Filtering -->
        <script src="js/jquery.mixitup.min.js"></script>
        <!-- Fancybox -->
        <script src="js/jquery.fancybox.pack.js"></script>
        <!-- Parallax sections -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
        <!-- jQuery Appear -->
        <script src="js/jquery.appear.js"></script>
        <!-- countTo -->
        <script src="js/jquery-countTo.js"></script>
        <!-- owl carousel -->
        <script src="js/owl.carousel.min.js"></script>
        <!-- WOW script -->
        <script src="js/wow.min.js"></script>
        <!-- theme custom scripts -->
        <script src="js/main.js"></script>
 
    </body>
</html>
