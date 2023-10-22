<script setup>
import Layout from '@/Layouts/Layout.vue';
import { Head } from '@inertiajs/vue3';
import Map from '@/Components/Map.vue';

defineProps({
    place: Object
})

</script>

<template>
    <Layout>
        <Head title="Navigator" />
        <h1 class="text-2xl">
            {{ `Идем в ${place.name}` }}
        </h1>
        <Map :coordinates="[place.longitude, place.latitude]" />
    </Layout>
</template>
