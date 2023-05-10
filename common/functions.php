<?php 

/* 	Autore: Stefano Peddoni

	All'interno di questo file ho le funzioni che mi permettono di:
	- Connettermi al database creato
	- Registrazione dell'utente all'interno del database
	- Verificare se l'utente è già stato inserito all'interno del database
	- Verifcare se al momento della fase di login, l'utente esiste
	- Reindirizzamento della pagina corrente a login.php se l'utente non ha effettuato l'accesso
	- Reindirizzamento della pagina corrente alla Home, solo dopo aver verificato l'esistenza dell'utente alla pagina di login
	
*/

// Connessione al database db_utenti
 function databaseConnection () {
    $connectstr = "mysql:dbname=db_utenti;host=localhost:3306";
    try {
      $db = new PDO($connectstr, "root", "");
    } catch(PDOException $ex){
      die('Could not connect: ' . $ex->getMessage());
    }
  return $db;
}


// Registrazione dell'utente 
function register_user($nome, $cognome, $citta, $email, $password){
	try{
	$db = databaseConnection();
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$nome = $db -> quote($nome);
	$cognome = $db -> quote($cognome);
	$citta = $db -> quote($citta);
	$email = $db -> quote($email);
	$password = md5($password);
	$query = "INSERT INTO utenti VALUES(NULL, $nome, $cognome, $citta, $email, '$password');";
	$db -> query($query);
	} 
	  catch(PDOException $ex){
      die('Could not connect: ' . $ex->getMessage());
    }
  }

// Verifico se l'utente esiste ed è stato associato al db tramite l'email inserita
function check_email($email){
	try{
	$db = databaseConnection();
    $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
 	$email = $db -> quote($email);
	$query = "SELECT * FROM utenti WHERE email=$email;";
	$rows = $db -> query($query);
	return $rows -> rowCount() != 0;
	} 
	  catch(PDOException $ex){
      die('Could not connect: ' . $ex->getMessage());
    }
  }

// Verifico se l'utente esiste in fase di login
function check_user($email, $password){
	try{
	$db = databaseConnection();
	$db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$email = $db -> quote($email);
	$password = md5($password);
	$query = "SELECT * FROM utenti WHERE email=$email AND password='$password';";
	$rows = $db -> query($query);  
	return $rows -> fetch(PDO::FETCH_ASSOC)["nome"];
	} 
	  catch(PDOException $ex){
      die('Could not connect: ' . $ex->getMessage());
    }
  }

// Reindirizza la pagina corrente a login.php se l'utente non ha effettuato l'accesso
function ensure_logged_in() {
    if (!isset($_SESSION["nome"])) {
        redirect("../users/login.php", "PER ACCEDERE ALLA HOME DEVI EFFETTUARE IL LOGIN !!!!");
    }
}

// Reindirizza la pagina corrente alla Home, solo dopo aver verificato l'esistenza dell'utente alla pagina di login
function redirect($url, $flash_message = NULL) {
    if ($flash_message) {
        $_SESSION["flash"] = $flash_message;
    }
    header("Location: $url");
    die;
}

?>