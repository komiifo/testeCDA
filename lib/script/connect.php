<?php  
	include 'function.php';

	$email = securisation($_POST['mail']);
	$password = securisation($_POST['pass']);
	$pdo = connexionBDD();


	$message = '';

	//Oublie d'un champ
    if (empty($email) || empty($password) ) {
        $message = '<p>une erreur s\'est produite pendant votre identification.
	Vous devez remplir tous les champs</p>';

	//On check le mot de passe
    } else { 
        $query=$pdo->prepare('SELECT * FROM jho_user WHERE mailUser = :email');
        $query->bindValue(':email',$email, PDO::PARAM_STR);
        $query->execute();
        $data=$query->fetch();

	    // Acces OK !
		if ($data['passUser'] == $password ) {

			// Redirection si c'est un admin ou bien un visiteur
			if ($data['roleUser'] == "admin") {
				header('Location: ../../admin/index.php');
			} elseif ($data['roleUser'] == "visiteur") {
				header('Location: ../../visiteur.php');
			} else {
				echo "ERREUR !! Vous étes pas autorisé à faire ça.";
			}
			
   			session_start();
			$_SESSION['email'] = $data['mailUser'];
		// Acces pas OK !
		} else {
		    $message = '<p>Une erreur s\'est produite 
		    pendant votre identification.<br /> Le mot de passe ou le pseudo 
	            entré n\'est pas correcte.</p>';

		   	 header('Location: ../../index.php');
		}


	    $query->CloseCursor();

    }

   
?>