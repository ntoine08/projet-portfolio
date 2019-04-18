<!DOCTYPE html>
<html lang="fr">
	<head>
	  <meta charset="UTF-8">
	  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	  <title>Document</title>
	  <link rel="stylesheet" type="text/css" href="styles/style.css">
	</head>

	<body>

		<!-- partie de la navbarre-->

		<div class="navbarre">
			<ul>
				<li><a class="active" href="#Accueil">Accueil</a></li>
				<li><a href="#Qui suis-je">Qui suis-je</a></li>
				<li><a href="#Parcours">Parcours</a></li>
				<li><a href="#Mes projets">Mes projets</a></li>
				<li><a href="Mes TIPS">Mes TIPS</a></li>
			</ul>

		</div>

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
				
					
					
				
		</div>

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


		
		</div>

		<!-- paralax-->

		<!-- parcours-->
		<div id="parcours">
			<h4>PARCOURS</h4> <!--titre parcours-->
			<hr>
			<h5>TIMELINE</h5> <!--titre timeline-->

		</div>

		<!-- mes projets-->
	 
	  <script src="script.js"></script>
	</body>
</html>