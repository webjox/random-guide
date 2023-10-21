<script setup>
import { Head } from "@inertiajs/vue3";
import Title from "@/Components/Title/Title.vue";
import { Alert } from "flowbite-vue";
</script>

<template>
    <Head title="Моя История" />

    <Title>
        Моя история
    </Title>

    <div class="container mx-auto mt-10">
        <div class="flex flex-col space-y-10">
            <Alert type="dark" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                <div class="flex">
                    <div class="flex-initial">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </div>

                    <div class="flex p-2">
                        <p class="text-sm text-gray-500">2022-12-23</p>
                    </div>
                </div>

                <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                </p>

                <button>
                    <div class="inline-block mt-4">
                        <div class="flex">
                            <div class="flex-initial">
                                <i class="fa-regular fa-star text-2xl text-yellow-200"></i>
                            </div>

                            <div class="flex p-1 ml-2">
                                <p>Вернуть обратно в избранное</p>
                            </div>
                        </div>
                    </div>
                </button>
            </Alert>

            <Alert type="danger" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                <div class="flex">
                    <div class="flex-initial">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </div>

                    <div class="flex p-2">
                        <p class="text-sm text-gray-500">2022-12-23</p>
                    </div>
                </div>

                <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                </p>
            </Alert>

            <Alert type="success" border class="mx-auto w-[600px] max-[635px]:w-[500px] max-[530px]:w-[400px] max-[450px]:w-[380px]">
                <div class="flex">
                    <div class="flex-initial">
                        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white text-left">
                            Noteworthy technology acquisitions 2021
                        </h5>
                    </div>

                    <div class="flex p-2">
                        <p class="text-sm text-gray-500">2022-12-23</p>
                    </div>
                </div>

                <p class="font-normal text-gray-700 dark:text-gray-400 text-left">
                    Here are the biggest enterprise technology acquisitions of 2021 so far, in reverse chronological order.
                </p>
            </Alert>
        </div>
    </div>
</template>

<style scoped>

</style>
