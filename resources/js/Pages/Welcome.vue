<script setup>
import Main from "@/Layouts/Main.vue";
import { Head, Link } from '@inertiajs/vue3';
import bridge from '@vkontakte/vk-bridge';

bridge.send("VKWebAppInit");

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});
</script>

<template>
    <Head title="Welcome" />
    <Main class="text-center mt-auto"/>
</template>

