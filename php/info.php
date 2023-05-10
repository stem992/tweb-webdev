<!DOCTYPE html>

<!-- 
	Autore: Stefano Peddoni
	 
	All'interno di questo file ho le informazioni utili del nostro sito come:
	- Chi siamo
	- Orari di apertura del negozio
	- Contatti
	- Condizioni di vendita

-->

<?php include("../html/link.html"); ?>
<?php if(isset($_SESSION["nome"])) ?>

<html lang="it">
    <head>
        <title>Info</title>
    </head>
	
	<body>

		<h1 id="title"> INFO STP ELECTRONICS </h1>
	
	<div class="info">
		<h2 id="chiSiamo"> CHI SIAMO </h2>
			<p> 
				L’azienda ha sede a Milano e dispone di un centro logistico accentrato a Torino, conta su uno staff di oltre 4.300 dipendenti e ricavi che, per l’esercizio conclusosi il 28 febbraio 2017, hanno superato quota 1,6 miliardi di euro.
				Il nostro negozio STP ELECTRONICS si occupa della vendita di smartphone di ultima generazione. I nostri BRAND sono:
				<li> APPLE </li>
				<li> SAMSUNG </li>
				<li> HUAWEI </li>
				<li> XIAOMI </li>
			</p>
			<br>
			<br>
		<h2 id="orari"> ORARI DI APERTURA </h2>
				<li> LUNEDI: 	14:30 - 20:00  </li>
				<li> MARTEDI: 	08:30 - 20:00  </li>
				<li> MERCOLEDI: 08:30 - 20:00  </li>
				<li> GIOVEDI:   08:30 - 20:00  </li>
				<li> VENERDI:   08:30 - 20:00  </li>
				<li> SABATO:    08:00 - 21:00  </li>
				<li> DOMENICA:  09:00 - 19:00  </li>
			</p>
			<br>
			<br>
		
		
		<h2 id="contatti"> CONTATTI </h2>
			<p>
				Email: stpelectronics@gmail.com <br>
				Numero Di Telefono: +39 334404455505 <br>
			</p>
			<br>
			<br> 

		
		<h2 id="condVendita"> CONDIZIONI DI VENDITA </h2>
			<p>
				Per effettuare acquisti all'interno del nostro sito &egrave obbligatoria una registrazione; una volta registrati verrete reindirizzati
				alla Home del nostro sito, dove potrete iniziare la navigazione e l'acquisto di prodotti.
				I prodotti acquistati dal Cliente attraverso il Sito possono essere pagati alternativamente con: 
				<li> Carta di credito </li>
				<li> PayPal</li> <br>
				Al prezzo del prodotto e/o del servizio acquistato dal Cliente attraverso il Sito potrà essere aggiunto un importo a titolo di spese di spedizione e trasporto. 
				Tale importo è calcolato in modo automatico dal sistema informativo di STP ELECTRONICS avuto riguardo, tra l’altro, al peso e alle dimensioni dei prodotti, ecc.. 
				Tale importo verrà indicato nell’Ordine prima del suo invio da parte del Cliente.
			</p>
			<br>
			<br>
	</div>
	</body>