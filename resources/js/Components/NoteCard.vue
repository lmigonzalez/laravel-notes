<script>

import { myNotes } from '../notes'
export default {

	name: 'NoteCard',
	props: {
		id: String,
		title: String,
		description: String,
		date: String,
		showDelete: Boolean,
		deleteNote: Function
	},
	data() {
		return {
		}
	},
	methods: {
		// deleteNote() {
		// 	const index = myNotes.findIndex(note => note.id === this.id);
		// 	if (index !== -1) {
		// 		myNotes.splice(index, 1);
		// 	}
		// 	console.log(myNotes);
			
			
		// },
		updateNote(noteId) {
			// const url = this.$inertia.route('/update-note', { noteId: noteId })
			// Inertia.visit(url)
			this.$inertia.visit(`/update-note/${noteId}`)
		}
	}
}
</script>


<template>
	<div class="notes-container">
		<div>
			<div class="note-header">
				<h2>{{ this.title }}</h2>
				<div>
					<button v-if="showDelete" @click="deleteNote(this.id)">

						<img src="../../../public/delete.png" alt="delete icon">
					</button>
					<!-- <Link href="/update-note">Home</Link> -->

					<button @click="updateNote(this.id)">
						<img src="../../../public/edit.png" alt="edit icon">

					</button>
				</div>
			</div>

			<div class="note-body">
				<p>{{ this.description }}</p>

				<div class="date">{{ this.date }}</div>
			</div>

		</div>
	</div>
</template>

<style scoped>
.notes-container {
	background-color: #FCC8D1;
	padding: 1rem;
	border-radius: 0.5rem;
	margin: 1rem 0;
}

.notes-container button {
	background-color: transparent;
	border-style: none;
	cursor: pointer;
}

.note-header {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

img {
	width: 25px;
	margin: 0 0.3rem;
	transition: 0.2s ease-in-out;
}

img:hover {
	scale: 1.1;
}

.note-body {
	margin-top: 1.5rem;
}

.date {
	text-align: end;
	font-weight: 700;
	margin-top: 1rem;
}
</style>