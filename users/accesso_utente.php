<?php 

/* 	
	Autore: Stefano Peddoni
	
	All'interno di questo file viene verificata l'esistenza dell'utente
	per l'accesso alla Home del sito

*/

include("../php/session.php");
include("../common/functions.php");

$nome = check_user($_POST["email"], $_POST["password"]);
if (isset($_SESSION)) {
	session_regenerate_id(TRUE);
}
$_SESSION["user"] = $_POST["email"];
$_SESSION["nome"] = $nome;

header("location: ../php/home.php");

?>