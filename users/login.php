<?php

/* 	
	Autore: Stefano Peddoni	

	All'interno di questo file viene effettuato il login da parte dell'utente
	per accedere alla Home Page
	
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
				<h2>LOGIN</h2>
				<p>INSERISCI LE CREDENZIALI PER EFFETTUARE L'ACCESSO</p>
				</div>
				
		<form id="Login" action = "accesso_utente.php" onsubmit=" return login();" method = "post" name="modulo">
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email">

        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password">
        </div>
        

        <button onClick="Modulo()"  value="Invia" type="submit" class="btn btn-primary">Login</button><br><br>
	
		<?php if (isset($_SESSION["flash"])) { ?>
		<div id="flash"> <?= $_SESSION["flash"] ?> </div>
		<?php unset($_SESSION["flash"]); } ?>
		<br>
		<div class="reg">
        <a href="register.php">NON HAI UN ACCOUNT ? REGISTRATI</a>
		</div>
    </div>

</div></div>
</form>

</body>

<?php include("../html/footer.html"); ?>