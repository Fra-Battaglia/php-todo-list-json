<?php 

	// session_start();

	// if (isset($_POST['email']) && $email_exist($_POST['email'])) {
	// 	$user_data = get_user_data_by_email($email, $todo_list);
	// }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>PHP ToDo List JSON</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
		<link rel="stylesheet" href="./css/style.css">
		<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
	</head>
	<body class="bg-dark text-light">

		<div id="app">
			<div class="container">
				<div class="row vh-100 align-items-center justify-content-center">
					<div class="col-5">
						<h1 class="text-center">PHP ToDo List</h1>
						<div class="list rounded">
							<ul class="list-unstyled m-0 list-group">

								<li v-for="item, index in todo_list" class="list-group-item p-2 d-flex justify-content-between align-items-center">
									<div>{{ item.language }}</div>
									<div class="buttons d-flex gap-3">
										<button class="btn btn-warning" @click="edit_language(index)"><i class="fa-solid fa-edit"></i></button>
										<button class="btn btn-danger" @click="remove_language(index)"><i class="fa-solid fa-trash"></i></button>
									</div>
								</li>

							</ul>
						</div>
						<div class="input-group mt-3">
							<input type="text" class="form-control" placeholder="New Language" v-model="language" @keyup.enter="add_language">
							<button class="btn btn-outline-warning" type="submit" id="button-addon2" @click="add_language">Submit</button>
						</div>
					</div>
				</div>
			</div>

		</div>

		<script src="https://unpkg.com/vue@3"></script>
		<script type="text/javascript" src="./js/script.js"></script>
	</body>
</html>