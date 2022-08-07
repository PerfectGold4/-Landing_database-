<?php

	$data_2 = [ 'mail' => $_POST['email_2']];
	$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
	$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 2)";
	$statement = $pdo->prepare($sql);
	$result = $statement->execute($data_2);

?>