<script setup>
import { Link } from '@inertiajs/vue3';

defineProps({
    route: String,
})
</script>

<template>
    <Link
        :href="route"
        as="button"
        class="rounded-full h-64 w-64 flex items-center justify-center bg-cube drop-shadow-md transition duration-700 ease-in-out"
    >
    <span class="fa-solid fa-dice-six text-8xl text-white animate-cube"></span>
    </Link>
</template>
