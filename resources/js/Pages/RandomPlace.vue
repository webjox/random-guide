<script setup>
import Map from '@/Components/Map.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import axios from 'axios';
import { Button, Rating } from 'flowbite-vue';
import { ref, onBeforeMount } from 'vue';

const randomPlace = ref(null)
const token = import.meta.env.VITE_VK_MAPS_ACCESS_TOKEN ?? 'token';

const getRandomPlace = async () => {
    const baseApiUrl = 'https://maps.vk.com/api';
    delete axios.defaults.headers.common['X-Requested-With'];
    await axios.get(`${baseApiUrl}/places`, {
        params: {
            api_key: token,
            q: 'Памятник',
            location: '47.2372031,39.7120899',
            radius: 1000,
            fields: 'name,address,place_details,pin,bbox,type'
        }
    }).then(response => {
        let results = response.data.results;
        let randomIndex = Math.floor(Math.random() * results.length);

        randomPlace.value = results[randomIndex]
    })
}

onBeforeMount(() => {
    getRandomPlace();
})
</script>

<template>
    <Head title="Random Place" />
    <GuestLayout class="grid place-items-center">
        <div class="grid place-items-center">
            <Rating class="mx-auto my-2" rating="3" />
        </div>

        <section class="flex flex-col gap-2">
            <h1 tag="h1" class="my-2 text-2xl font-semibold text-gray-700 text-center">{{ randomPlace?.name }}</h1>
            <p class="text-sm text-gray-500 italic text-center my-2">{{ randomPlace?.address }}</p>
        </section>

        <Map :coordinates="randomPlace.pin" />
        <div class="flex gap-6 justify-around mt-6">
            <Button color="dark" outline>Пропустить</Button>
            <Button color="green" outline>Я в деле!</Button>
        </div>
    </GuestLayout>
</template>
