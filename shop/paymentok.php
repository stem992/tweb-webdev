<?php 

/*	
	Autore: Stefano Peddoni
	
	All'interno di questo file ho la pagina di avvenuto pagamento, se si vuole si può tornare
	alla Home per navigare e scegliere altri prodotti, altrimenti si effettua il logout.

*/

include("../php/session.php");
include("../common/functions.php");
$db = databaseConnection();
ensure_logged_in();

 ?>



<?php include("../html/link.html"); ?>
<?php if(isset($_SESSION["nome"])) ?>

<!DOCTYPE html>

<html lang="it">
    <head>
        <title>Pagamento Effettuato</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.css">
    </head>
	
	<body>

		<script language=javascript>
            svuota();
        </script>

				<div class="container">
          <div class="row g-3">

      <div class="col-12 order-md-last mt-4  "align="center">

          <h5 class="mb-3">IL TUO ORDINE E' STATO CONFERMATO, E' STATA INVIATA UN'EMAIL AL TUO INDIRIZZO</h5><br>
		   <div class="hello">
		   
				<img src="../img/check.png" alt="hello"> <br> <br>
		  		<a href="../php/home.php">
		<button class="btn btn-secondary btn-block">TORNA ALLA HOME</button>
		</a>
		
				  		<a href="../users/logout.php">
		<button class="btn btn-secondary btn-block">EFFETTUA IL LOGOUT</button>
		</a>
            </div>


            </div>
 </div>
						   

       
</body>

