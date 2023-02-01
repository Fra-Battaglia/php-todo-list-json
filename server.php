<?php

	// echo'<pre>';
	// var_dump($_POST);
	// echo'</pre>';

	// Prendo il json e lo metto in una stringa
	$string = file_get_contents('./todo-list.json');

	// Converto il json in codice php
	$todo_list = json_decode($string, true);

	?>