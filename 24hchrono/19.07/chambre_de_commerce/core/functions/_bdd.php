<?php  

	/* Connexion à une base MySQL avec l'invocation de pilote */
	$dsn = 'mysql:dbname=ccaimag;host=127.0.0.1';
	$user = 'root';
	$password = '';

	try {
	    $db = new PDO($dsn, $user, $password);
	} 
	catch (PDOException $e) {
	    echo 'Connexion échouée : ' . $e->getMessage();
	}

?>