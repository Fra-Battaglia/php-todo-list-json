<?php
 
	// Verifica esistenza email
	function email_exist( $email, $users ) {

		foreach($users as $user) {
			if($email == $users['email']) {
				return true;
			} else {
				return false;
			}
		}

	}

	function get_user_data_by_email( $email, $todo_list ) {

		//recuperare il contenuto di todo-list.json
		$string = file_get_contents('todo-list.json');

		// decodificare file json in linguaggio php
		$users = json_decode($string, true);

		foreach($users as $key => $user) {
			if($email == $users['email']) {
				[$key]['todolist']= $todo_list;
			}
		}
	}

	function add_language($todo_list, $post) {
		//aggiungo in coda un nuovo elemento all'array
		$todo_list[] = $post;

		file_put_contents('todo-list.json', json_encode($todo_list, JSON_PRETTY_PRINT));
	}
?>