<script setup>
import Map from '@/Components/Map.vue';
import GuestLayout from '@/Layouts/GuestLayout.vue';
import { Head } from '@inertiajs/vue3';
import { Button, Rating, Heading } from 'flowbite-vue';

const place = {
    title: 'Random place',
    description: `
    Lorem ipsum dolor sit amet, consectetur adipiscing elit,
    sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
    `,
    coordinates: {
        lat: 0,
        lon: 0,
    },
    rating: 3,
};
</script>

<template>
    <Head title="Random Place" />
    <GuestLayout class="grid place-items-center">
        <div class="grid place-items-center">
            <Rating class="mx-auto my-2" :rating="place.rating" />
        </div>

        <section class="flex flex-col gap-2">
            <Heading tag="h1" class="my-2 text-2xl font-semibold text-gray-700 text-center">{{ place.title }}</Heading>
            <p class="text-sm text-gray-500 italic text-center my-2">{{ place.description }}</p>
        </section>

        <Map />
        <div class="flex gap-6 justify-around mt-6">
            <Button color="dark" outline>Won't go</Button>
            <Button color="green" outline>You got me!</Button>
        </div>
    </GuestLayout>
</template>
