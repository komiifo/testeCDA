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
			<div class="row justify-content-around py-2">
				<div class="col-md-6">

					<form action="" method="POST">
					  	<div class="form-group">
					    	<label for="id">N° :</label>
					    	<input type="text" class="form-control" id="id" name="id" >
					  	</div>
					  	<div class="form-group ">
						    <label for="mail">Mail :</label>
						    <input type="email" class="form-control" id="mail" name="mail">
						</div>
						<div class="form-inline ">
						    <label for="attributionn">Créneau :</label>
						    <input type="time" class="form-control" id="attributionn" name="attributionn">
						    <label for="attributionn"> à </label>
						    <input type="time" class="form-control" id="attributionn" name="attributionn">
						</div>
						<div class="py-2">
							<button type="button" class="btn btn-danger float-left" id="cancel" >Annuler</button>
					  		<button type="submit" class="btn btn-primary float-right" id="submit" >Valider</button>
						</div>
					  	
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