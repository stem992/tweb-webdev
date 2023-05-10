/* 	
	Autore: Stefano Peddoni
	
	All'interno di questo file ho le funzioni javascript utili per verificare il corretto inserimento nei campi

*/

function Modulo() {
// Variabili associate ai campi del modulo
var nome = document.modulo.nome.value;
var cognome = document.modulo.cognome.value;
var password = document.modulo.password.value;
var citta = document.modulo.citta.value;
var email = document.modulo.email.value;

// Espressione regolare dell'email
var email_reg_exp = /^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9-]{2,})+.)+([a-zA-Z0-9]{2,})+$/;

// Effettua il controllo sul campo NOME
if ((nome == "") || (nome == "undefined")) {
//alert("Il campo Nome è obbligatorio.");
document.modulo.nome.focus();
return false;
}

// Effettua il controllo sul campo COGNOME
else if ((cognome == "") || (cognome == "undefined")) {

document.modulo.cognome.focus();
return false;
}

//Effettua il controllo sul campo CITTA'
else if ((citta == "") || (citta == "undefined")) {

document.modulo.citta.focus();
return false;
}

// Effettua il controllo sul campo EMAIL
else if ((email == "") || (email == "undefined")) {

document.modulo.email.focus();
return false;
}

// Effettua il controllo sul campo PASSWORD
else if ((password == "") || (password == "undefined")) {

document.modulo.password.focus();
return false;
}

}