<script>
import NoteCard from '../Components/NoteCard.vue';
import AppLayout from '../Layouts/AppLayout.vue';
import { reactive } from 'vue';
import { myNotes } from '../notes';

export default {
	layout: AppLayout,
	components: {
		NoteCard,
		AppLayout
	},
	setup() {
		const notes = reactive(myNotes);
		const deleteNote = (id) => {
			console.log(myNotes);
			const index = notes.findIndex((note) => note.id === id);
			if (index !== -1) {
				notes.splice(index, 1);
			}
		};
		return {
			notes,
			deleteNote
		}
	},

}



</script>

<template>
	<div class="main-div">
		<main>
			<NoteCard :key="note.id" v-for="note in notes" :id="note.id" :title="note.title" :description="note.description"
				:date="note.date" :deleteNote="deleteNote" :showDelete="true"/>
		</main>
	</div>
</template>

<style scoped>
.main-div {
	min-height: 100vh;
	max-width: 1200px;
	margin: 0 auto;
}

main {
	width: 100%;
	width: 100%;
}

.search-input {
	width: 100%;
}
</style>