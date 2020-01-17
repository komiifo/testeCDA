<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">

	<head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Teste Technique CDA</title>

	    <!-- BootStrap CDN Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<!-- Stylesheet CSS -->
	    <link rel="stylesheet" type="text/css" href="../lib/css/style.css">
	</head>

    <body>

		<div class="container">
			<div class="row justify-content-center py-2">
				<h3>Bienvenue <?php echo $_SESSION['email']; ?></h3>
				
			</div><!-- the end row -->
			<div class="row justify-content-center py-2">
				<?php 
				// Pour l'affichage du creneau autoriser 
					// include "lib/script/function.php"; 

					// // recupere la liste des user 
					// $pdo = connexionBDD();
					// $reponseCreneau = $pdo->query("SELECT * FROM jho_user INNER JOIN jho_attribution ON jho_user.idUser = jho_attribution.idUser 
					// 								WHERE mailUser = '' ");

					// while ($donnees = $reponseCreneau->fetch() ) {
					// 	echo $donnees['creneauDebut'];
					// }



				?>
				
				<h4>Vous étes autoriser à être connecter de  à </h4>
				
			</div>
		</div><!-- the end container -->
    	<p>certaines fonctionaltiées n'est pas disponible pour le moment </p>
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!-- SCRIPT JS -->
		<script src="../lib/js/script.js"></script>
    </body>
</html>