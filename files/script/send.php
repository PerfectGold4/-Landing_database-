<?php
	function send () {
		if ($_POST['email_1']) {
			$data_1 = [ 'mail' => $_POST['email_1']];
			$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 1)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_1);
		}
		elseif ($_POST['email_2']) {
			$data_2 = [ 'mail' => $_POST['email_2']];
			$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 2)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_2);
			}
		elseif ($_POST['email_3']) {
			$data_3 = [ 'mail' => $_POST['email_3']];
			$pdo = new PDO("mysql:host=localhost;dbname=user_emails", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 3)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_3);
		}
	}
	send();
?>