<?php 

/*	
	Autore: Stefano Peddoni
	
	All'interno di questo file ho la fase di pagamento dei prodotti che ho aggiunto al carrello

*/

include("../php/session.php");
include("../common/functions.php");
ensure_logged_in()


 ?>

<?php include("../html/link.html"); ?>
<?php if(isset($_SESSION["nome"])) ?>

<!DOCTYPE html>

<html lang="it">
    <head>
        <title>Pagamento</title>
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
			<a href="../shop/cart.php">
			<div id=icona>
				<img src="../img/back.png">
			</div> </a>
		
	</div>
			
										   
			<div id="carrellologo">
			<img src="../img/payment.png" alt="cart">
			</div>
					  
<div class="container">
<div class="white-box2">
          <div class="row g-3">

      <div class="col-12 order-md-last mt-4">
          <h4 class="mb-3">PAGAMENTO</h4> <br>
			
		  <form action="paymentok.php" method="post" name="modulo">


          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Nome e Cognome</label>
              <input type="text" name="nome" class="form-control" id="cc-name" placeholder="" required="" maxlength="25">
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Numero Carta di Credito</label>
              <input type="text" name="carta" class="form-control"  id="onlyNumber" class="onlyNumber" placeholder="1111-2222-3333-4444" required="" maxlength="16">
            </div>
			
            <div class="col-md-3 p-3">
              <label for="cc-expiration" class="form-label">Data</label>
              <input type="text" name="data" class="form-control" id="cc-expiration" placeholder="MM/YY" required="" maxlength="5">
            </div>

            <div class="col-md-3 p-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" name="cvv" class="form-control" id="onlyNumber" class="onlyNumber"  placeholder="000" required="" maxlength="3">
            </div>
          </div>
		</div>
	</div>

</div>
    
</div>      
		  
		 <hr class="my-4">
		<button onClick="Modulo2()"  value="Invia" class="btn btn-primary btn-block" >PAGA</button>
       </form>


</body>

