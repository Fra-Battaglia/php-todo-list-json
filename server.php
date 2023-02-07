<?php

	include __DIR__. '/functions.php'; 

	// Prendo il json e lo metto in una stringa
	$string = file_get_contents('todo-list.json');

	// Converto il json in codice php
	$todo_list = json_decode($string, true);

	// Aggiungi voci alla lista
	if(isset($_POST['todo_input'])/* && $_POST['todo_input'] != ''*/) {

		$todo_list = add_language($todo_list, $_POST['todo_input']);

		// $todo_input = $_POST['todo_input'];
		// $todo_list[] = ["language" => $todo_input, "done" => false];
	}

	if(isset($_POST['delete'])) {
		unset($todo_list[$_POST['delete']]);

		file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
	}

	if(isset($_POST['edit'])) {
		// Individua l'elemento avente indice contenuto in $_POST['edit'] e lo sostituisce con il suo valore corrispondente che in questo caso è l'array
		$replacement = array(
			$_POST['edit'] => array(
				"language" => $_POST['language_edit'], 
				"done" => false
			)
		);
		$todo_list = array_replace($todo_list, $replacement);
	}

	header('Content-Type: application/json');
	echo json_encode($todo_list);

?>