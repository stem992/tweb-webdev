<?php

/* 	
	Autore: Stefano Peddoni

	All'interno di questo file viene effettuato il logout dell'utente
	e viene reindirizzato nella pagina di login per effettuare nuovamente l'accesso

*/

	include("../php/session.php");
    session_unset();
    session_destroy();
    header("location: ../users/login.php");
	
?>

