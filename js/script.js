const { createApp } = Vue;

createApp({
	data() {
		return {
			api_url: 'server.php',
			todo_list: [],
			language: ''
		}
	},

	mounted() {
		axios.get(this.api_url).then((response)=> {
			this.todo_list = response.data
		})
	},

	methods: {
        add_language() {
            const data = {
                todo_input: this.language
            }
            axios.post(this.api_url, data, {
                headers: { 'Content-Type': 'multipart/form-data' }
            }).then((response) => {
                this.language = '';
                this.todo_list = response.data;
            })
        }
    },

}).mount('#app')