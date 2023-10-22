<script setup>
import {Head, usePage} from "@inertiajs/vue3";
import {Alert} from 'flowbite-vue'
import Title from "@/Components/Title/Title.vue";
import {computed} from "vue";
import Map from "@/Components/Map.vue";

const page = usePage()

const places = computed(() => page.props.favoritePlaces)

function getNormarFormatDate(date) {
    let newDate = new Date(date);
    return newDate.toLocaleString();
}

</script>

<template>
    <Head title="Избранное" />

    <Title>
        Избранное
    </Title>

    <div class="container mx-auto mt-10 space-y-10 mb-10">
        <Alert v-for="item in places" type="dark" border class="mx-auto w-[600px] mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px]">
            <div class="flex">
                <div class="flex-initial">
                    <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                        {{item.name}}
                    </h5>
                </div>

                <div class="flex p-2">
                    <p class="text-sm text-gray-500">{{getNormarFormatDate(item.created_at)}}</p>
                </div>
            </div>

            <p class="font-normal text-gray-700 dark:text-gray-400">
                <Map :coordinates="[item.longitude, item.latitude]" :key="item.id" class="w-full"></Map>
            </p>

            <button>
                <div class="inline-block mt-4">
                    <div class="flex">
                        <div class="flex-initial">
                            <i class="fa-solid fa-star text-yellow-200 text-2xl"></i>
                        </div>

                        <div class="flex p-1 ml-2">
                            <p>Убрать из избраного</p>
                        </div>
                    </div>
                </div>
            </button>
        </Alert>
    </div>
</template>

<style scoped>

</style>
