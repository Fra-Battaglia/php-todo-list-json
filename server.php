<?php

	// Prendo il json e lo metto in una stringa
	$string = file_get_contents('todo-list.json');

	// Converto il json in codice php
	$todo_list = json_decode($string, true);

	if(isset($_POST['todo_input'])) {
		$todo_input = $_POST['todo_input'];
		$todo_list[] = ["language" => $todo_input, "done" => false];

		file_put_contents('todo-list.json', json_encode($todo_list));
	}

	header('Content-Type: application/json');
	echo json_encode($todo_list);
	
?>