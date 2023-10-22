<script setup>
import {Head, usePage} from "@inertiajs/vue3";
import Title from "@/Components/Title/Title.vue";
import { Alert } from "flowbite-vue";
import {computed} from "vue";
import Map from "@/Components/Map.vue";

const page = usePage();

let history = computed(() => page.props.history)

function getNormarFormatDate(date) {
    let newDate = new Date(date);
    return newDate.toLocaleString();
}

</script>

<template>
    <Head title="Моя История" />

    <Title>
        Моя история
    </Title>

    <div class="container mx-auto mt-10">
        <div class="flex flex-col py-5" v-for="item in history">
            <div v-if="item.is_confirmed === 0">
                <Alert type="danger" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                    <div class="flex">
                        <div class="flex-initial">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                                {{item.name}}
                            </h5>
                        </div>

                        <div class="flex p-2">
                            {{getNormarFormatDate(item.created_at)}}
                        </div>
                    </div>

                    <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                        <Map :coordinates="[item.longitude, item.latitude]" :key="item.id" class="w-full"></Map>
                    </p>

                    <button>
                        <div class="inline-block mt-4">
                            <div class="flex">
                                <div class="flex-initial">
                                    <i class="fa-regular fa-star text-2xl text-yellow-200"></i>
                                </div>

                                <div class="flex p-1 ml-2">
                                    <p>Добавить в избранное</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </Alert>
            </div>

            <div v-else-if="item.is_confirmed === 1">
                <Alert type="success" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                    <div class="flex">
                        <div class="flex-initial">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                                {{item.name}}
                            </h5>
                        </div>

                        <div class="flex p-2">
                            {{getNormarFormatDate(item.created_at)}}
                        </div>
                    </div>

                    <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                        <Map :coordinates="[item.longitude, item.latitude]" :key="item.id" class="w-full"></Map>
                    </p>

                    <button>
                        <div class="inline-block mt-4">
                            <div class="flex">
                                <div class="flex-initial">
                                    <i class="fa-regular fa-star text-2xl text-yellow-200"></i>
                                </div>

                                <div class="flex p-1 ml-2">
                                    <p>Добавить в избранное</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </Alert>
            </div>

            <div v-else>
                <Alert type="dark" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                    <div class="flex">
                        <div class="flex-initial">
                            <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                                {{item.name}}
                            </h5>
                        </div>

                        <div class="flex p-2">
                            {{getNormarFormatDate(item.created_at)}}
                        </div>
                    </div>

                    <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                        <Map :coordinates="[item.longitude, item.latitude]" :key="item.id" class="w-full"></Map>
                    </p>

                    <button>
                        <div class="inline-block mt-4">
                            <div class="flex">
                                <div class="flex-initial">
                                    <i class="fa-regular fa-star text-2xl text-yellow-200"></i>
                                </div>

                                <div class="flex p-1 ml-2">
                                    <p>Добавить в избранное</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </Alert>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
