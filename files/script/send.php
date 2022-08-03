<?php
	$data = [ 'mail' => $_POST['email']];
	$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
	$sql = "INSERT INTO emails (emails)VALUES (:mail)";
	$statement = $pdo->prepare($sql);
	$result = $statement->execute($data);

?>