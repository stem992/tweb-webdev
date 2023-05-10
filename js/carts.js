/*
	Autore: Stefano Peddoni
	
	All'interno di questo file ho le funzioni javascript utili per il carrello

*/

/* creazione del vettore carrello che contiene i dati necessari alla visualizzazione sulla pagina,
   come: id, descrizione e prezzo del prodotto */
var carrello = new Array();  

/* questa funzione permette di verificare se all'interno del carrello ci sono già prodotti.
   ad esempio, se inserisco all'interno del carrello un prodotto APPLE, ho anche l'opportunità di scegliere un prodotto di marca diversa
   da inserire anch'esso all'interno del carrello grazie a questa funzione che ho inserito all'interno di tutte le pagine dei prodotti */
function inizializza() {
  
   if (localStorage.carrello) {
        carrello = eval(localStorage.carrello);
   }
  
}

/* questa funzione trasforma il carrello in una stringa e lo memorizza mediante cookies (localStorage) nel disco del client */
function serializza() {

   var cart = "[";
   var comma = "";
   for(i=0;i<carrello.length;i++) {
       cart = cart + comma; 
       cart = cart + " {codice : " + carrello[i].codice;
       cart = cart + ", nome: '" + carrello[i].nome + "'"; 
       cart = cart + ", prezzo : " + carrello[i].prezzo;
       cart = cart + ", qnt : " + carrello[i].qnt + "}";
       comma = ',';
   } 
   cart = cart + "]";
   delete localStorage.carrello;
   localStorage.carrello = cart; 
}

/* questa funzione restituisce la posizione di un prodotto gia presente in carrello, nel caso in cui si dovesse aggiungere uno stesso prodotto,
   viene aggiornata la quantità di esso e non aggiunta un'altra riga con lo stesso prodotto */
function cerca(cod) {

   for (var i=0;i<carrello.length;i++) {
        if (carrello[i].codice == cod) {
            return(i);
        }
   }
   return("N");
}

/* questa funzione permette di aggiungere un prodotto all'interno del carrello */
function aggiungi(cod,nome, prezzo) {

   var ogg = {};
   var n = carrello.length;
   var x = cerca(cod);
   if (x == 'N') {     
       ogg.codice  = cod;
       ogg.nome  = nome;
       ogg.prezzo  = prezzo;
       ogg.qnt     = 1;
       carrello[n] = ogg;
   } else { 
       carrello[x].qnt++;
   }
   serializza();
  swal("AGGIUNTO AL CARRELLO", "You clicked the button!", "success");
}
        
/* questa funzione permette di calcolare e visualizzare il totale */
function totali () {
 
	var obj, tot=0, tp=0;
	for (i=0;i< carrello.length; i++) {
		  var id = "t"+i;
		  obj = document.getElementById(id);
		  tp = carrello[i].prezzo * carrello[i].qnt;
		  obj.innerHTML = tp;
		  tot = tot + tp;
	}
		  document.getElementById('totale').innerHTML = tot;
          
 }
 
/* questa funzione permette di aggiornare la quantità del prodotto all'interno del carrello */
function cambia(cella) {
	var label = "q"+cella; 
	var v   = document.getElementById(label).value;
	carrello[cella].qnt = v;
	serializza(); 
	totali();
}

/* questa funzione permette la creazione della tabella */
function tabella() {
    document.write("<TABLE border=2><TH>Codice<TH>Nome<TH>Prezzo €<TH>Quantita<TH>Totale €\n ");
    for(var i=0; i<carrello.length; i++) {
        document.write("<TR><TD class=center>"+carrello[i].codice);
        document.write("<TD> " + carrello[i].nome);
        document.write("<TD class=right>"+carrello[i].prezzo);
        document.write("<TD><input onChange=cambia(" + i + ") class=center id=q" + i + " type=text size=4 value= " + carrello[i].qnt + ">");
        document.write("<TD class=center id=t"+i+">&nbsp;\n"); 
     }
        document.write("<TR><TD colspan=4 align=center>TOTALE ORDINE € <TD class=center id=totale>&nbsp\n");
        document.write("</TABLE>\n");            
}

/* questa funzione permette di svuotare il carrello, una volta svuotato il carrello viene visualizzato un messaggio */
function svuota() {
     delete localStorage.carrello;
     document.getElementById('elenco').innerHTML = "HAI SVUOTATO IL CARRELLO";    
	 
}

/* questa funzione permette di verificare le spese di spedizione per ogni marca */
function rispondi() {
    var nome = document.getElementById("nome").value;
    if (nome == '')
    {
      return;
    }

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200)
        {
            document.getElementById("risposta").innerHTML = this.responseText;
        }
    };
    xmlhttp.open("GET", "risposta.php?n=" + nome, true);
    xmlhttp.send();

}
