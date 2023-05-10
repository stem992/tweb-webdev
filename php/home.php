<?php 

/*  
	Autore: Stefano Peddoni
	
	All'interno di questo file abbiamo la Home Page, si accede ad essa
    solo dopo essersi loggati con successo

*/

include("../php/session.php");
include("../common/functions.php");
ensure_logged_in();

 ?>
 
<?php include("../html/link.html"); ?>
<?php if(isset($_SESSION["nome"])) ?>
 
<!DOCTYPE html>

<html lang="it">
    <head>
        <title>Home</title>
	
    </head>
	
	<body>
	
	<nav>
	<label class="logo">STP ELECTRONICS</label>
	<ul>
			<li><a class="navresp" href="../php/info.php" target="_blank">Chi siamo</a></li>
			<li><a class="navresp" href="../php/info.php#orari" target="_blank">Orari</a></li>
			<li><a class="navresp" href="../php/info.php#contatti" target="_blank">Contatti</a></li>
			<li><a class="navresp" href="../php/info.php#condVendita" target="_blank">Condizioni Di Vendita</a></li>
			<li><a class="navresp" class="logouthome" href="../shop/cart.php"> Carrello </a></li>
			<li><a class="navresp" class="logouthome" href="../users/logout.php"> Logout </a></li>
	</ul>
	</nav>
	
		<div id="corpo">
		 <div class="hello">
		     <h2>Hello <?php echo $_SESSION['nome']; ?></h2>
				<img src="../img/hello.png" alt="hello">
				<div id="text"> <h3> BENVENUTO SU STP ELECTRONICS IT </h3> </div> <br>
		 
			<div id="product-list"> <h4> SCOPRI LA NOSTRA GAMMA DI TELEFONI DI ULTIMA GENERAZIONE TRA CUI: APPLE, SAMSUNG, HUAWEI E XIAOMI.
														LE MIGLIORI MARCHE DI TELEFONIA SUL MERCATO <br>
														ABBIAMO INOLTRE I NUOVI SAMSUNG S21. VIENI A SCOPRIRLI IN NEGOZIO O ONLINE. PER QUALSIASI
														INFORMAZIONE NON ESITATE NEL CONTATTARCI <br> I NOSTRI ORARI E I NOSTRI CONTATTI LI TROVERETE SOPRA
														<br> </h4> </div>
			
		<div class="image-container">											
			
			<img src="../img/s21img.jpg">
			
			<div class="image-caption caption-1">

				<h2>NUOVA GAMMA SAMSUNG S21</h2><br>

				<p>La foto perfetta non potrà più sfuggirti. Dai il benvenuto a Galaxy S21 5G e S21+ 5G. Grazie a una risoluzione 8K di livello cinematografico, 
				   potrai ottenere foto straordinarie direttamente da un video. Qualcosa di rivoluzionario, per entrambi i mondi. Tutto quello che cerchi, in due formati: 
				   fotocamera da 64 MP, il nostro processore più veloce di sempre e una batteria che ti accompagna per tutto il giorno. Il meglio del meglio. <br><br>
				   Insoddisfatto ??<br> ci pensa il galaxy s21 ultra con una fotocamera da ben 108 MP e con uno zoom max fino a 100x </p>

			</div>
		</div>
		
		
		<div id="text"> <h3> I NOSTRI BRAND </h3> </div>
		
		<div id="categoria">
		
			<a href="product-apple.php">
			<div class="prod" >
				<img src="../img/apple.png" alt="apple">
			</div>
			</a>
			
			<a href="product-samsung.php">	
			<div class="prod">
				<img src="../img/samsung.png" alt="samsung">
			</div>
			</a>
			
			<a href="product-huawei.php">
			<div class="prod">
				<img src="../img/huawei.png" alt="huawei">
			</div>
			</a>
			
			<a href="product-xiaomi.php">
			<div class="prod">
				<img src="../img/xiaomiii.png" alt="xiaomi">
			</div>
			</a>
		
		</div> 
		
			
		

		<div id="dovesiamo"> <p>DOVE SIAMO </p><br>
		<p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d704.2012833697988!2d7.658925054055411!3d45.08974458799587!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47886db2ab717cef%3A0x405a8e3daad8d89e!2sUniversit%C3%A0%20di%20Torino%20Dipartimento%20di%20Informatica!5e0!3m2!1sit!2sit!4v1579045708818!5m2!1sit!2sit" width=90%" height="280" frameborder="22" style="border:3px solid black;" allowfullscreen=""></iframe>
			</p>
			<br>
			<br> 
		

		</div>
	</div>

	
	</body>
<div id ="footer">
	<p>
		&copy; Progetto di Stefano Peddoni
	</p>
	</div>

