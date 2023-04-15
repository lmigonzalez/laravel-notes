<script>
import { myNotes } from '../notes';
import AppLayout from '../Layouts/AppLayout.vue';


export default {
	layout: AppLayout,
	setup() {
		const currentUrl = window.location.pathname
		const segments = currentUrl.split('/')
		const noteId = segments[segments.length - 1]
		const selectedNote = myNotes.find(note => note.id === noteId)

		return {
			noteId,
			selectedNote
		}
	},
	methods: {

		update() {
			if (this.selectedNote.title.trim() === '') {
				alert('Title is required');
				return;
			} else if (this.selectedNote.title.length > 25) {
				alert('Title must be less than 20 characters');
				return;
			} else if (this.selectedNote.description.trim() === '') {
				alert('Note is required');
				return;
			}
			const index = myNotes.findIndex(note => note.id === this.noteId)
			myNotes[index].title = this.selectedNote.title
			myNotes[index].description = this.selectedNote.description
			this.$inertia.visit('/');
		},
		cancel() {
			if (this.selectedNote.title.trim() === '') {
				alert('Title is required');
				return;
			} else if (this.selectedNote.title.length > 25) {
				alert('Title must be less than 20 characters');
				return;
			} else if (this.selectedNote.description.trim() === '') {
				alert('Note is required');
				return;
			}
			this.$inertia.visit('/');
		}
	}
}

</script>


<template>
	<div class="form-container">
		<form>
			<h3 class="form-header">Update Note</h3>
			<label for="title">Title</label>
			<input id="title" v-model="selectedNote.title" type="text" required maxlength="25" />
			<div class="text-length">{{ selectedNote.title.length }} / 25</div>
			<label for="description">Description</label>
			<textarea id="description" v-model="selectedNote.description" required maxlength="500"></textarea>
			<div class="text-length">{{ selectedNote.description.length }} / 500</div>
			<div class="btn-container">
				<button @click.prevent="cancel">Cancel</button>
				<button @click.prevent="update">Update</button>
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

.text-length {
	text-align: end;
	margin-bottom: 1rem;
}

form input {
	height: 2rem;
	margin-bottom: 1rem;
	border-radius: 0.3rem;
	border: 1px solid black;
	padding: 0 0.5rem;
}

form textarea {
	height: 5rem;
	resize: none;
	margin-bottom: 1rem;
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

