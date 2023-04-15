

<script>
import AppLayout from '../Layouts/AppLayout.vue';
import { myNotes } from '../notes';
import { v4 as uuidv4 } from 'uuid';
import moment from 'moment'

export default {
	layout: AppLayout,
	data() {
		return {
			title: '',
			description: '',
		}
	},
	computed: {
		notes() {
			return myNotes
		}
	},
	methods: {
		handleSubmit() {
			if (this.title.trim() === '') {
				alert('Title is required');
				return;
			} else if (this.title.length > 25) {
				alert('Title must be less than 20 characters');
				return;
			} else if (this.description.trim() === '') {
				alert('Note is required');
				return;
			}

			let newNote = { id: uuidv4(), title: this.title, description: this.description, date: moment().format('MMMM Do YYYY, h:mm:ss a') };
			myNotes.push(newNote)
			this.title = '';
			this.description = '';
			this.$inertia.visit('/');
		},
		cancel() {
			this.title = '';
			this.description = '';
			this.$inertia.visit('/');
		}

	}
}
</script>

<template>
	<div class="form-container">
		<form>
			<div class="form-header">Create New Note</div>
			<label for="">Note Title</label>
			<input type="text" v-model="title" required maxlength="25" />
			<div class="text-length">{{ title.length }} / 25</div>

			<label for="">Description</label>
			<textarea v-model="description" required maxlength="500"></textarea>
			<div class="text-length">{{ description.length }} / 500</div>
			<div class="btn-container">
				<button @click.prevent="cancel">Cancel</button>
				<button @click.prevent="handleSubmit">Create</button>
			</div>
		</form>
	</div>
</template>



<style scoped>
.form-container {

	width: 100%;
	min-height: 100vh;
	display: flex;
	justify-content: center;
	align-items: center;
}

form {
	width: 700px;
	max-width: 100%;
	margin: 0 auto;
	padding: 3rem 1rem;
	background-color: #2E3840;
	display: flex;
	flex-direction: column;
	border-radius: 0.5rem;
	color: #fff;

}

.form-header {
	text-align: center;
	margin-bottom: 2rem;
	font-size: 1.5rem;
}

form input {
	height: 2rem;
	border-radius: 0.3rem;
	border: 1px solid black;
	padding: 0 0.5rem;
}

.text-length {
	text-align: end;
	margin-bottom: 1rem;
}

form textarea {
	height: 5rem;
	resize: none;

	border-radius: 0.3rem;
	border: 1px solid black;
	padding: 0.5rem;
}

.btn-container {
	width: 100%;
	display: flex;
	justify-content: space-between;
}

.btn-container button {
	width: 50%;
	height: 2rem;
	border-radius: 0.3rem;
	border: solid 1px black;
	cursor: pointer;
	font-size: 1.2rem;
	background-color: #628E90;
	color: #fff;

}

.btn-container button:first-child {
	margin-right: 1rem;
	background-color: #CF0A0A;
}
</style>