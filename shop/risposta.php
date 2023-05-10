<?php

/*	
	Autore: Stefano Peddoni
	
	All'interno di questo file vengono visualizzate le spese di spedizione per il prodotto scelto

*/


$n = $_GET["n"];

$risposta = "";
if($n == "galaxy")
{
$risposta = "3.99 €";
} else if ($n ==("iphone" || "huawei" || "xiaomi") ) {
	$risposta = "5.99 €";
} else {$risposta = "";}

print $n === "" ? "niente da dire" : $risposta;

?>