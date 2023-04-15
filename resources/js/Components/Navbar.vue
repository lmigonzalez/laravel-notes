<template>
	<header>
		<h1>NotesVault</h1>
		<p>You current have <span>3</span>  notes</p>
	</header>
</template>

<style scoped>
header {
	display: flex;
	justify-content: space-between;
	align-items: center;
}

/* addNote="$emit('add-note', newNote) */
span {
	color: #DF2E38;
	font-weight: 600;
}
</style>