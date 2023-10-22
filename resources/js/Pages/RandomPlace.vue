<script setup>
import Map from '@/Components/Map.vue';
import Layout from '@/Layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
import { Button, Rating } from 'flowbite-vue';
import { toValue } from 'vue';
import { useRandomPlace } from '@/Composables/places.js';
import { router } from '@inertiajs/vue3';

const place = useRandomPlace();

function accept() {
    router.post('/navigator', {
        response: toValue(place),
        is_confirmed: false,
    });
}

function reload() {
    router.get('/skip');
    router.visit('/random');
}
</script>

<template>
    <Layout>
        <Head title="Random Place" />

        <Rating class="mx-auto my-2" :rating="3" />

        <section class="flex flex-col gap-2" v-if="place">
            <h1 class="my-2 text-2xl font-semibold text-gray-700 text-center">{{ place.name }}</h1>
            <p class="text-sm text-gray-500 italic text-center my-2">{{ place.address }}</p>
        </section>

        <Map :coordinates="place.pin" v-if="place" />

        <div class="flex gap-4 justify-around mt-6 grid-cols-2">
            <Button color="dark" outline @click="reload">
                <span class="bg-red-100 text-red-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-red-900 dark:text-red-300">-5</span>
                Пропустить
            </Button>
            <Button color="green" outline @click="accept">
                <span class="bg-green-100 text-green-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded-full dark:bg-green-900 dark:text-green-300">+10</span>
                Я в деле!
            </Button>
        </div>

    </Layout>
</template>
