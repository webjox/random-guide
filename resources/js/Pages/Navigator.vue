<script setup>
import Layout from '@/Layouts/Layout.vue';
import { Head, router } from '@inertiajs/vue3';
import Map from '@/Components/Map.vue';
import { Button } from 'flowbite-vue';

const props = defineProps({
    place: Object
})

function checkin() {
    router.post('/checkin', {
        place: props.place.id
    })
}

</script>

<template>
    <Layout>
        <Head title="Navigator" />
        <h1 class="text-2xl">
            {{ `Идем в ${place.name}` }}
        </h1>
        <Map :coordinates="[place.longitude, place.latitude]" />
        <div class="flex gap-6">
            <Button color="dark" outline>
                <i class="fas fa-share"></i>
                Поделиться
            </Button>
            <Button color="green" outline @click="checkin">На месте!</Button>
        </div>
    </Layout>
</template>
