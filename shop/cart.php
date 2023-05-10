<?php 

/*	
	Autore: Stefano Peddoni
	
	All'interno di questo file ho il carrello dove vengono salvati tutti gli articoli
	desiderati per poi acquistarli. Al momento del pagamento degli articoli da parte dell'utente
	il carrello viene svuotato.

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
        <title>Carrello</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
    </head>
	
	<body>

	<div class="infoShop" id="top">
			<a href="../users/logout.php">
			<div id=icona>
				<img src="../img/logout.png">
			</div> </a>

			<a href="../php/home.php">
			<div id=icona>
				<img src="../img/home.png">
			</div> </a>
	</div>
								   
			<div id="carrellologo">
			<img src="../img/bag2.png">
			</div>

<div class="container">

    <div class="row g-4">
      <div class="col-12 order-md-last mt-4">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
		
		<span class="text-muted">Carrello Di <?php echo $_SESSION['nome']; ?></span>

        </h4>
		<a href=javascript:svuota()> <div class="svuota">Svuota</div>
		</a>
	<div>
	<a href="payment.php">
	<button class="btn btn-primary btn-block" name="buttons">VAI AL PAGAMENTO</button>
	</div></a>
	<form id="formesempio">
	<input type="text" id="nome" class="butnome" placeholder="INSERIRE SOLTANTO LA MARCA">
	<input type="button" value="SCOPRI LE SPESE DI SPEDIZIONE DA PAGARE AL CORRIERE " class="but" onclick="javascript:rispondi()">
	</form>
	<p><span id="risposta"></span></p>
	<br>
	<div class="white-box3">
	<script language=javascript>
     
        carrello = eval(localStorage.carrello);
      
        document.write("<div id=elenco>");
        tabella(); 
        document.write("</div>");
        totali();
        
	</script>
	</div>	
	</div>
</div>

	
</body>

