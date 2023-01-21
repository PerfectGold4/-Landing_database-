<?php
	//отправка данных в БД, а именно эл. почты (для каждой услуги свой номер) и комментария; при обращении к php файлу проверяются все данные, которые мог бы получить php файл
	function send () {
		if ($_POST['email_1']) {
			$data_1 = [ 'mail' => $_POST['email_1']];
			$pdo = new PDO("mysql:host=localhost;dbname=landing", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 1)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_1);
		}
		elseif ($_POST['email_2']) {
			$data_2 = [ 'mail' => $_POST['email_2']];
			$pdo = new PDO("mysql:host=localhost;dbname=landing", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 2)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_2);
			}
		elseif ($_POST['email_3']) {
			$data_3 = [ 'mail' => $_POST['email_3']];
			$pdo = new PDO("mysql:host=localhost;dbname=landing", "root", "root");
			$sql = "INSERT INTO emails (emails, servise_num)VALUES (:mail, 3)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($data_3);
		}
		elseif ($_POST['user'] and $_POST['msg']) {
			$comment = [ 	'user_name' => $_POST['user'],
							'msg_content' => $_POST['msg']];
			$pdo = new PDO("mysql:host=localhost;dbname=landing", "root", "root");
			$sql = "INSERT INTO comments (name, content)VALUES (:user_name, :msg_content)";
			$statement = $pdo->prepare($sql);
			$result = $statement->execute($comment);
		}
	}
	send();
?>