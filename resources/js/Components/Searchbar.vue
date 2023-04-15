<script>
import { myNotes } from '../notes';
import NoteCard from './NoteCard.vue';
import AppLayout from '../Layouts/AppLayout.vue';
export default {
	layout: AppLayout,
	components: {
		NoteCard,
		AppLayout
	},
	computed: {
		notes() {
			return myNotes
		},
	},
	mounted() {
		console.log(this.notes);

	},

}

</script>


<template>
	<div class="search-container">
		<input type="text" placeholder="Search for a note..." />

		<div class="main-div">
			<main>
				<NoteCard :key="note.id" v-for="note in myNotes" :id="note.id" :title="note.title"
					:description="note.description" :date="note.date" />
			</main>
		</div>
	</div>
</template>

<style scoped>
.search-container {
	display: flex;
	justify-content: end;
	margin-top: 1rem;
}

input {
	width: 350px;
	height: 2rem;
	border-radius: 0.5rem;
	border: 1px solid #DF2E38;
	padding: 0 1rem;
}
</style>