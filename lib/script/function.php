<?php
	
	function securisation($donnees){
		// Supprime certain caractére et les espaces
		$donnees = trim($donnees);
		// Echapper les antislashes pour eviter les erreurs
		$donnees = stripcslashes($donnees);
		// Pour que les balises html soit plus interpreter et les supprime
		$donnees = strip_tags($donnees);

		return $donnees;
	}

	function connexionBDD() {
		// localhost -------- connexion vers la base de données
		$SERVEUR 	= 'localhost';
		$NOMBDD 		= 'distributionpc';
		$LOGIN 		= 'root';
		$PASSW 		= '' ;
		
		try {
			$strConnection = 'mysql:host=' . $SERVEUR .';dbname=' . $NOMBDD ; 	
			$arrExtraParam= array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"); 
			$pdo = new PDO($strConnection, $LOGIN , $PASSW, $arrExtraParam); 
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
			return $pdo ;
		}
		catch(PDOException $e) {
			$msg = 'ERREUR PDO dans ' . $e->getFile() . ' L.' . $e->getLine() . ' : ' . $e->getMessage();
			die($msg);
			return false ;			// ce return ne s'execute pas !
		}
	}


?>