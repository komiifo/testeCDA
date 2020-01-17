<?php
	include "function.php";
	$mailUser = securisation($_POST['newMail']);
	$passUser = securisation($_POST['newPass']);

	$pdo = connexionBDD();
	$req = $pdo->prepare('INSERT INTO jho_user(mailUser, passUser, roleUser) VALUES(:mailUser, :passUser, :roleUser)');
	$req->execute(array(
		'mailUser' => $mailUser,
		'passUser' => $passUser,
		'roleUser' => "visiteur"
		));

	echo 'L\'utilisateur a bien été ajouté !';
?>