<?php 

/* 	 
	Autore: Stefano Peddoni

	All'interno di questo file ci sono i prodotti HUAWEI che possono essere acquistati

*/

include("../php/session.php");
include("../common/functions.php");
$db = databaseConnection();
ensure_logged_in();

 ?>

<?php include("../html/link.html"); ?>
<?php if(isset($_SESSION["nome"])) ?>

<script language=javascript>
            
   inizializza();
        
</script>

<!DOCTYPE html>

<html lang="it">
    <head>
        <title>Huawei</title>
    </head>
	
	<body>

	<div class="infoShop" id="top">
		
			<a href="../users/logout.php">
			<div id=icona>
				<img src="../img/logout.png" alt="cart" >
			</div> </a>
			
			<a href="../shop/cart.php">
			<div id=icona>
				<img src="../img/bag2.png" alt="cart" >
			</div> </a>
			<a href="home.php">
			<div id=icona>
				<img src="../img/home.png" alt="cart" >
			</div> </a>
	</div>
			
										   
			<div id="logohuawei">
			<img src="../img/huawei.png" alt="huawei">
			</div>
			<div id="marcaprod"> <p> PRODOTTI HUAWEI
											   </p> 
										   
		 </div>
			
  <?php

    $results = $db->query("SELECT *
                            FROM prodotti
                            WHERE nome LIKE 'HUAWEI%';");
    while ($row = $results->fetch()) {
		
		?>

	<?php include("description-prod.php"); ?>
	      <?php
    }
  ?>	


	</body>
