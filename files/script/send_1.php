<?php
	$data_1 = [ 'mail' => $_POST['email_1']];
	$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
	$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 1)";
	$statement = $pdo->prepare($sql);
	$result = $statement->execute($data_1);
?>