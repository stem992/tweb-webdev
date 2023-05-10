<?php

/* 
	Autore: Stefano Peddoni
	
	All'interno di questo file viene effettuata la registrazione dell'utente nel caso 
	in cui non sia già presente all'interno del database

*/

include("../php/session.php");
?>

<?php include("../html/header.html"); ?>

<?php if(isset($_SESSION["nome"])) ?>
	
	<body id="LoginForm">
	<div class="container">
		<div class="login-form">
			<div class="main-div">
				<div class="panel">
				 <img src="../img/avatar.png" alt="">
				<h2>REGISTRAZIONE UTENTE</h2>
				<p>INSERISCI I DATI PER LA REGISTRAZIONE</p>
				</div>
	
		<form id="Login" action = "reg_utente.php"  method = "post" name="modulo">
        <div class="form-group">
					<input id="nome" type="text" class="form-control" name="nome" maxlength="50" required="" placeholder="Nome" ><br>
		</div>
		<div class="form-group">
					<input id="cognome" type="text" class="form-control" name="cognome" maxlength="50" required placeholder="Cognome"><br>
		</div>
		<div class="form-group">
					<input id="citta" type="text" class="form-control" name="citta" maxlength="50" required placeholder="Citta'"><br>
		</div>
		<div class="form-group">
					<input id="email" type="text" class="form-control" name="email" required placeholder="Email"><br>
		</div>
		<div class="form-group">
					<input id="password" type="password" class="form-control"  name="password" required placeholder="Password"><br>
		</div>
		<div class="form-group">
					<label id=error class="error"><?= (isset($_GET["yet"]) && $_GET["yet"])? "Utente già registrato" : "" ?></label>
					<button onClick="Modulo()"  value="Invia" type="submit" class="btn btn-primary">Registrati</button><br><br>
		</div>
		<div class="back">
				<a href = "login.php">TORNA ALLA SCHERMATA DI LOGIN </a>
		</div>
    </form>
	</form>
    </div>

</div></div></div>

</body>
  
<?php include("../html/footer.html"); ?>