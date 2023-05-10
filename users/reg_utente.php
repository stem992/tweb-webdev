<?php 

/* 	
	Autore: Stefano Peddoni

	All'interno di questo file viene effettuata la registrazione dell'utente con le proprie credenziali
	all'interno del database creato.
	Una volta effettuata la registrazione l'utente verrà reindirizzato alla pagine di login per effettuare
	l'accesso

*/

include("../php/session.php");
include("../common/functions.php");

if(!check_email($_POST["email"])){
	register_user($_POST["nome"], $_POST["cognome"], $_POST["citta"], $_POST["email"], $_POST["password"]);
	$_SESSION["user"] = $_POST["email"];
	$_SESSION["nome"] = $_POST["nome"];
} else
header("location: ./register.php?yet=true");
?>

<?php include("../html/header.html"); ?>

<?php
	
	echo "REGISTRAZIONE EFFETTUATA";

?>
	<br>
	<div class="back">
	<a href = "login.php">TORNA ALLA SCHERMATA DI LOGIN PER EFFETTUARE L'ACCESSO</a>
	</div>
