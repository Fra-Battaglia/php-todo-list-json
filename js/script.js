const { creatAapp } = Vue

createApp({
	data() {
		return {
			api_url: './server.php',
			todo_list: [],
			new_task: ''
		}
	}
}).mount('#app')