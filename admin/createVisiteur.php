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
				<div class="col-md-5">
					<form action="../lib/script/createUser.php" method="POST">
					  	<div class="form-group">
					    	<label for="newMail">Email du nouveau visiteur :</label>
					    	<input type="email" class="form-control" placeholder="Entrez un nouveau email" id="newMail" name="newMail" required >
					  	</div>
					  	<div class="form-group">
						    <label for="newPass">Mot de passe du nouveau visiteur :</label>
						    <input type="password" class="form-control" placeholder="Entrez un nouveau mot de passe" id="newPass" name="newPass" required >
						</div>
					  	<button type="button" class="btn btn-danger float-left" id="cancel" >Annuler</button>
					  	<button type="submit" class="btn btn-primary float-right" id="submit" >Valider</button>
					</form>
				</div>
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