<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="styles/index.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
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
		</div>

<br>
<div class="parallax-window" data-parallax="scroll" data-image-src="images/projets2.png" alt=""></div>
<center>
  <div id="proj">
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <br>

  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a>
  <a href="#"><img src="images/aa_auto.png" width="20%" height="200px"></a></div>
  <br><br>
  <div class="bouton">
  <p>
    <a href="#">ALL »</a>
  </p>
</div><br><br>

<div class="parallax-window" data-parallax="scroll" data-image-src="images/tips2.png" alt=""></div>

<div id="proj">
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <br>

  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a>
  <a href="#"><img src="images/logosimplon.png" width="350px"></a></div>
  <br><br>
  <div class="bouton">
  <p>
    <a href="#">ALL »</a>
  </p>
</div>

</center>

    </body>

<?php include "footer.php";?>
<?php include "footer2.php";?>

</html>
