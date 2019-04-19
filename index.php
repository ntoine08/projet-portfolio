<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/index.css" rel="stylesheet">
    <!-- Pour le parallax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    <!-- Fin des liens pour parallax -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>TITRE</title>
  </head>

<?php include "header.php";?>
  <body>

        <!-- partie du slider-->
		<div class="container">
			<!--images du slide-->
					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="images2/image1.jpg" style="width:100%">

					</div>

					<div class="mySlides">
						<div class="numbertext"></div>
						<img src="images2/image2.png" style="width:100%">

					</div>

					<div class="mySlides">
							<div class="numbertext"></div>
							<img src="images2/image3.jpg" style="width:100%">

					</div>

					<div class="mySlides">
							<div class="numbertext"></div>
							<img src="images2/image4.jpg" style="width:100%">

					</div>

					<!--boutons previous et next-->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  					<a class="next" onclick="plusSlides(1)">&#10095;</a>

    <script src="script.js"></script>
    <div id="Qui-suis-je?"></div>
		</div>
    <!-- Fin du slider -->

    <!-- partie qui suis je-->
		<div id="qui-suis-je">
			<h3>Qui suis je ?</h3> <!-- titre de la partie qui suis je -->

			<div class="flex-container"> <!-- container de la partie qui suis je -->
				<div class="qui"> <!-- partie texte de qui suis je -->
					<p>Un texte est une série orale ou écrite de mots perçus comme constituant un ensemble cohérent, porteur de sens et utilisant les structures propres à une langue (conjugaisons, construction et association des phrases…)1. Un texte n'a pas de longueur déterminée sauf dans le cas de poèmes à forme fixe comme le sonnet ou le haïku. L'étude formelle des textes s'appuie sur la linguistique, qui est l'approche scientifique du langage.</p>
				</div>

				<div class="qui"> <!-- partie image de qui suis je -->
					<img src="images2/image1.jpg">
				</div>
			</div>
<!-- fin de la partie qui suis je-->


		</div>

    <!-- paralax 4 elem -->
    <div class="parallax-element" data-parallax="scroll" data-image-src="images/para.png" alt="" id="parcour">

      <div id="get-involved">
       <div id="ico">
         <div id="wrapper">
           <ul id="menu">
     <li><center><i class="fas fa-user fa-stack fa-4x"></i></i><br>
     <h4>100 %</h4></li>
     <li><center><i class="fas fa-user fa-stack fa-4x"></i></i><br>
     <h4>100 %</h4></li>
     <li><center><i class="fas fa-user fa-stack fa-4x"></i></i><br>
     <h4>100 %</h4></li>
     <li><center><i class="fas fa-user fa-stack fa-4x"></i></i><br>
     <h4>100 %</h4></li>
          </ul>
        </div>
       </div>
     </div>
      </div>

		<!-- parcours-->
    <div id="parcours">
			<h4>PARCOURS</h4> <!--titre parcours-->
			<hr>
			<h5>TIMELINE</h5> <!--titre timeline-->
		</div>
		<!-- fin de parcours-->

<br>

<!-- parallax "Mes projets" -->
<div class="parallax-projet" data-parallax="scroll" data-image-src="images/para.png" alt="" id="projets">
  MES PROJETS</div>
  <!-- fin de parallax "Mes projets" -->

<center>
  <!-- Début des 8 screens des projets accomplis -->
  <div id="proj1">
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <br>

  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <br><br>
  <div class="bouton">
  <p>
    <a href="#">ALL »</a>
  </p>
</div>
<!-- Fin des screens des projets accomplis -->

</div><br><br>

<!-- Début parallax "Mes tips" -->
<div class="parallax-tip" data-parallax="scroll" data-image-src="images/para.png" alt="" id="tips">
MES TIPS</div>
<!-- Fin parallax "Mes tips" -->

<!-- Début des 8 images des tips -->
<div id="proj">
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <br>

  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <br><br>
  <div class="bouton">
  <p>
    <a href="#">ALL »</a>
  </p>
</div>
</div>

</center>
<!-- Fin des tips -->

    </body>

<?php include "footer.php";?>
<?php include "footer2.php";?>

</html>
