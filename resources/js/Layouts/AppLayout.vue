<script>
import { Link } from '@inertiajs/vue3'

export default {
    components: {
        Link
    }
}
</script>

<template>
    <header>
        <Link href="/" class="logo">NotesVault</Link>

        <ul>
            <li>
                <Link href="/">Home</Link>
            </li>
            <li>
                <Link href="/create-note">Create</Link>
            </li>
            <li>
                <Link href="/search-note">Search</Link>
            </li>
        </ul>
    </header>

    <slot />
</template>

<style scoped>
header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    width: 100%;
    max-width: 1200px;
    margin: 0 auto;
    padding: 1rem 0;
}

.logo{
    font-size: 1.5rem;
}
ul{
    display: flex;
}

li{
    list-style: none;
    margin: 0 0.3rem;
}

a{
    text-decoration: none;
    font-size: 1rem;
    font-weight: 600;
    color: #000;
}

</style>