<!DOCTYPE html>
<html lang="fr">

    <head>
	    <meta charset="utf-8" />
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	    <title>Teste Technique CDA</title>

	    <!-- BootStrap CDN Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

		<!-- Stylesheet CSS -->
	    <link rel="stylesheet" type="text/css" href="lib/css/style.css">
	</head>

    <body>

		<div class="container">
			<div class="row justify-content-center py-4">
				<div class="col-md-5">
					<form action="lib/script/connect.php" method="POST">
					  	<div class="form-group">
					    	<label for="mail">Email:</label>
					    	<input type="email" class="form-control" placeholder="Entrez votre email" id="mail" name="mail" >
					  	</div>
					  	<div class="form-group">
						    <label for="pass">Mot de passe:</label>
						    <input type="password" class="form-control" placeholder="Entrez votre mot de passe" id="pass" name="pass" required >
						</div>
					  	<button type="submit" class="btn btn-primary float-right">Se connecter</button>
						<?php 
							$msg = (isset($message) ) ? $message : '' ; 
							echo $msg;
						?>
					</form>
				</div> 
			</div><!-- the end row -->
		</div><!-- the end container -->
    
		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

		<!-- SCRIPT JS -->
		<script src="lib/js/script.js"></script>
    </body>
</html>