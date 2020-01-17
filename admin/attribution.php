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
				<table class="table table-bordered">
					<thead>
					    <tr>
					      	<th>ID</th>
					        <th>Mail</th>
					        <th>Attribuer</th>
					        <th>Créneau</th>
					    </tr>
				    </thead>
				    <tbody>
						<?php
							include "../lib/script/function.php"; 

							// recupere la liste des user 
							$pdo = connexionBDD();
							$reponseUser = $pdo->query('SELECT * FROM jho_user LEFT JOIN jho_attribution ON jho_user.idUser = jho_attribution.idUser');

							while ($donnees = $reponseUser->fetch() ) {
								echo "<tr>";
								echo "<th>" .$donnees[0] . '</th>';
								echo "<th>" .$donnees['mailUser'] . '</th>';
								
								if (isset($donnees['numPc'])) {
									echo "<th> OUI | PC n° " .$donnees['numPc'] . '</th>';
								} else {
									echo "<th> ACTUELLEMENT SANS ATTRIBUTIOON </th>";
								}

								if (isset($donnees['creneauDebut'])) {
									echo "<th>" .$donnees['creneauDebut'] . " à " .$donnees['creneauFin'] . '</th>';
								} else {
									echo "<th> ... </th>";
								}

								echo "</tr>";
							}

							$reponseUser->closeCursor();
						?>
				    </tbody>
				</table>
				<button class="btn btn-secondary" id="back">RETOUR</button>
			</div><!-- the end row -->
		</div><!-- the end container -->
    
		<<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!-- SCRIPT JS -->
		<script src="../lib/js/script.js"></script>
    </body>
</html>