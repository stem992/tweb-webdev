/* 	
	Autore: Stefano Peddoni
	
	All'interno di questo file ho le funzioni javascript utili per il pagamento

*/

/* In questo caso la funzione javascript si applica solo agli input con classe "onlyNumber" */
      $(document).ready(function() {

        (function() {
            var editingKeys = {
               '8'  : 'backspace',
               '46' : 'canc',
               '37' : 'leftarrow',
               '39' : 'rightarrow'
            };
						
						
	    $('#onlyNumber').bind('keydown', function(e) {
                var key = String.fromCharCode(e.keyCode);
                if (isNaN(key)) return (e.keyCode in editingKeys);
            });					
						
						
        })();

      });

function Modulo2() {
// Variabili associate ai campi del modulo
var nome = document.modulo.nome.value;
var carta = document.modulo.carta.value;
var data = document.modulo.data.value;
var cvv = document.modulo.cvv.value;

// Effettua il controllo sul campo NOME
if ((nome == "") || (nome == "undefined")) {
//alert("Il campo Nome e Cognome è obbligatorio.");
document.modulo.nome.focus();
return false;
}

// Effettua il controllo sul campo numero di CARTA
if ((carta == "") || (carta == "undefined")) {

document.modulo.carta.focus();
return false;
}

// Effettua il controllo sul campo DATA
if ((data == "") || (data == "undefined")) {

document.modulo.data.focus();
return false;
}

// Effettua il controllo sul campo CVV
if ((cvv == "") || (cvv == "undefined")) {

document.modulo.cvv.focus();
return false;
}


}