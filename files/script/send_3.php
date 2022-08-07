<?php
	$data_3 = [ 'mail' => $_POST['email_3']];
	$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
	$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 3)";
	$statement = $pdo->prepare($sql);
	$result = $statement->execute($data_3);
?>