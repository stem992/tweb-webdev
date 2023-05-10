<!--
	Autore: Stefano Peddoni

	All'interno di questo file visualizzo l'elenco dei prodotti presi dal database per ogni brand,
	ho voluto inserirlo in un unico file per non ripeterlo.
	
-->

	<div class="product-list">

	<div class="white-box">
			
            <div class="product-img">
				<img src="<?= $row["immagine"] ?>">
            </div> 
			
            <div class="product-bottom">
              <div class="product-name"><?= $row["nome"] ?></div>
			  		
              <div class="price">
                <span class="rupee-icon">€</span> <?= $row["prezzo"] ?>
              </div>
			<a href="<?= $row["descrizione"] ?>" class="btn" target="_blank"> SCHEDA TECNICA </a>
			 
			<a href="javascript:aggiungi(<?= $row["id"] ?>,'<?= $row["nome"]?>',<?= $row["prezzo"] ?>)">
			<div id="addcart" >
				<img src="../img/addtocart.png" class="item_add" alt="cart" >
			</div> </a>
			</div>   </div>  </div>