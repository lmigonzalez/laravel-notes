<script>
import { myNotes } from '../notes';
import NoteCard from '../Components/NoteCard.vue'
import AppLayout from '../Layouts/AppLayout.vue';
export default {
	layout: AppLayout,
	components: {
		NoteCard,
		AppLayout
	},

	data() {
		return {
			keyword: '',
			filterNotes: []
		}
	},
	methods: {
		searchNote(keyword) {
			let filterNotesArray = []
			myNotes.map((note) => {
				let newQuery = keyword.split(' ').join('')
				let currentNote = note.title.split(' ').join('')
				if (currentNote.toLowerCase().trim().includes(newQuery.toLowerCase().trim())) {
					filterNotesArray.push(note)
				}
				if (keyword.length === 0) {
					filterNotesArray = []
				}
			})
			this.filterNotes = filterNotesArray


		}
	}
}


</script>

<template>
	<div class="search-container">
		<main>
			<div class="input-container">
				<input @input="searchNote(keyword)" v-model="keyword" type="text" placeholder="Search for a note..." />
			</div>


			<div class="main-div">
				<main>
					<NoteCard :key="note.id" v-for="note in filterNotes" :id="note.id" :title="note.title"
						:description="note.description" :date="note.date" :deleteNote="deleteNote" />
				</main>
			</div>
		</main>

	</div>
</template>

<style scoped>
.search-container {
	display: flex;
	flex-direction: column;
	align-items: center;
	justify-content: center;
	margin-top: 1rem;
	max-width: 1200px;
	margin: 0 auto;
}

.input-container {
	display: flex;
	justify-content: center;
}

input {
	width: 350px;
	height: 2rem;
	border-radius: 0.5rem;
	border: 1px solid #DF2E38;
	padding: 0 1rem;
	margin: 2rem 0;
}

.main-div {
	/* background-color: #C0DBEA; */
	min-height: 100vh;
	width: 1400px;
	max-width: 100%;
	padding: 0 1rem;
	margin: 0 auto;

}

main {
	width: 100%;
}

.search-input {
	width: 100%;
}
</style>