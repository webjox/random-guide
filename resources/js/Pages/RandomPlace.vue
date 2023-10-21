<script setup>
import Map from '@/Components/Map.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';
import { Button, Rating } from 'flowbite-vue';
import { ref, onBeforeMount } from 'vue';
import { useRandomPlace } from '@/Composables/places.js';

const randomPlace = ref(null)
const mapKey = ref(1);
const reloadPlace = () => {
    useRandomPlace(randomPlace);
    mapKey.value++;
}

onBeforeMount(() => {
    reloadPlace();
});
</script>

<template>
    <Head title="Random Place" />
    <GuestLayout class="grid place-items-center">
        <div class="grid place-items-center">
            <Rating class="mx-auto my-2" :rating="3" />
        </div>

        <section class="flex flex-col gap-2">
            <h1 tag="h1" class="my-2 text-2xl font-semibold text-gray-700 text-center">{{ randomPlace?.name }}</h1>
            <p class="text-sm text-gray-500 italic text-center my-2">{{ randomPlace?.address }}</p>
        </section>

        <Map :coordinates="randomPlace.pin" :key="mapKey" />
        <div class="flex gap-6 justify-around mt-6">
            <Button color="dark" outline @click="reloadPlace">Пропустить</Button>
            <Button color="green" outline>Я в деле!</Button>
        </div>
    </GuestLayout>
</template>
